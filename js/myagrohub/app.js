(function(){
'use strict';

    angular.module('myagrohubApp',['ngTable','openWeatherApp.filters',
        'openWeatherApp.services',
        'openWeatherApp.directives',
        'openWeatherApp.controllers',
        "iso-3166-country-codes"]).config(['$httpProvider', function ($httpProvider) {
        // Intercept POST requests, convert to standard form encoding
        $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $httpProvider.defaults.transformRequest.unshift(function (data, headersGetter) {
            var key, result = [];

            if (typeof data === "string")
                return data;

            for (key in data) {
                if (data.hasOwnProperty(key))
                    result.push(encodeURIComponent(key) + "=" + encodeURIComponent(data[key]));
            }
            return result.join("&");
        });
    }]).factory('ratesService',function($http,$q){

            var base = "backend/seeder/";

            function getFields(field,filters){
                var defered = $q.defer();
                $http.post(base+'getFields/'+field,filters).then(function(response){
                    defered.resolve(response.data);
                }).catch(function(response){
                    defered.error(response.data);
                });

                return defered.promise;
            }

            return {getFields:getFields};
        })
        .controller('ratesController',function($scope,ratesService,NgTableParams ){
            var base = "backend/seeder/";
            $scope.selected = {};
            $scope.rates = {};
            function getStates(){
                ratesService.getFields('State',null).then(function(response){
                    $scope.states =  response;
                }).catch(function(response){
                    console.log(response);
                });
            }
            getStates();
    $scope.reset = function(){
        $scope.districts = {};
        $scope.markets = {};
        $scope.commodities = {};
        $scope.selected = {};
        $scope.rates ={};
    };
            $scope.getDistricts = function(){
                ratesService.getFields('District',$scope.selected).then(function(response){
                    $scope.districts =  response;
                }).catch(function(response){
                    console.log(response);
                });
            }

            $scope.getMarkets = function(){
                ratesService.getFields('Market',$scope.selected).then(function(response){
                    $scope.markets =  response;
                }).catch(function(response){
                    console.log(response);
                });
            }

            $scope.getCommodities = function(){
                ratesService.getFields('Commodity',$scope.selected).then(function(response){
                    $scope.commodities =  response;
                    }).catch(function(response){
                    console.log(response);
                });
            }

            $scope.getRates = function(){
                ratesService.getFields('Variety/Arrival_Date/Min_x0020_Price/Max_x0020_Price/Modal_x0020_Price',$scope.selected).then(function(response){
                    $scope.rates =  response;

                    $scope.tableParams = new NgTableParams({}, {counts:[],dataset: $scope.rates});
                }).catch(function(response){
                    console.log(response);
                });
            }
        });
})();