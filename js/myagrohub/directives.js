'use strict';

/* Directives */

angular.module('openWeatherApp.directives', [])

  //
  // Simple directive just setting version as elements value (kept from angular-seed dist)
  //
  .directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }])

  //
  // Create directive that handles formatting, resource fetching and
  // output of weather data for a specific date
  //
  .directive('weatherPanel',[function factory() {
    return {
      restrict: 'EA',

      scope: {
        useDayForecast: '=showEntry',
        forecast: '=weatherPanel'
      },


      template: '<div class="weather ">' +
      '<div>{{parseDate(useDayForecast.dt) | date}}</div>' +
      '<p class="lead">' +
      '<img ng-src="{{getIconImageUrl(useDayForecast.weather[0].icon)}}" />' +
      '{{useDayForecast.temp.day | number:1}}&#176;C {{useDayForecast.weather[0].main}}</p> <p>' +
      '</p>' +
      '</div>' +
      '</div>',
      link: function(scope, element, attrs) {
        // Get icon image url
        scope.getIconImageUrl = function(iconName) {
          return (iconName ? 'http://openweathermap.org/img/w/' + iconName + '.png' : '');
        };

        scope.parseDate = function (time) {
          return new Date(time * 1000);
        };
      }
    }
  }])

//
// "Wind" edition
//
.directive('weatherPanelWind',[function factory() {
  return {
    restrict: 'EA',

    scope: {
      useDayForecast: '=showEntry',
      forecast: '=weatherPanel'
    },

    template: '<div class="weather panel panel-primary">' +
    '<div class="panel-heading">{{parseDate(useDayForecast.dt) | date:"fullDate"}}</div>' +
  '<div class="panel-body"><div>' +
      '<p class="lead">' +
      '<img ng-src="{{getIconImageUrl(useDayForecast.weather[0].icon)}}" />' +
    '{{useDayForecast.temp.day | number:1}}&#176;C {{useDayForecast.weather[0].main}}</p> <p>' +
  '{{useDayForecast.weather[0].description}}&nbsp;&#126;&nbsp;' +
  'High: {{useDayForecast.temp.max}}&#176;C&nbsp;&#126;&nbsp;' +
  'Low: {{useDayForecast.temp.min}}&#176;C' +
  '</p>' +
  '</div>' +
  '</div>' +
  '<div class="panel-footer">' +
      '<small>' +
      'Day: {{useDayForecast.temp.day}}&#176;C&nbsp;&#126;&nbsp;' +
  'Night: {{useDayForecast.temp.night}}&#176;C&nbsp;&#126;&nbsp;' +
  'Pressure: {{useDayForecast.pressure}} hPa&nbsp;&#126;&nbsp;' +
  'Humidity: {{useDayForecast.humidity}}%' +
  '</small>' +
  '</div>' +
  '</div>',

    link: function(scope, element, attrs) {
      // Get icon image url
      scope.getIconImageUrl = function(iconName) {
        return (iconName ? 'http://openweathermap.org/img/w/' + iconName + '.png' : '');
      };

      scope.parseDate = function (time) {
        return new Date(time * 1000);
      };
    }
  }
}]);

