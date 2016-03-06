<div class="weather_cnt min_hgt"  data-scroll-index='2'>
    <div class="mid_cnt" ng-controller="OpenWeatherCtrl">
        <div class="bnr_txt bnr_txt1">
            <h3>Weather Update</h3>
            <p>Whether Info</p>
            <div class="col-xs-12">
                <div>
                    <form class="form-inline" role="form">
                        <span class="btn-group" >
                            <button ng-repeat="item in exampleLocations" ng-click="setLocation(item)" type="submit" class="btn btn-default">{{item}}</button>
                        </span>
                        <span class="form-group {{hasState}}">
                            <label class="sr-only" for="location">City</label>
                            <input ng-model="location" type="text" class="form-control" id="location" placeholder="City">
                        </span>
                        <button ng-click="getForecastByLocation(location)" type="submit" class="btn btn-primary">Search!</button>
                        <span ng-show="message" class="alert"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>{{message}}</span>
                    </form>
                </div>
            </div>
        </div>

        <div class="weather_list">
            <div class="weather-data" ng-show="true">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="">
                            <h3>
                                {{forecast.city.name | placeholder:'?'}}, {{forecast.city.country | isoCountry}}
                                <small>Lon: {{forecast.city.coord.lon | number:2}} Lat: {{forecast.city.coord.lat | number:2}}</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12">
                    <div class="col-xs-4">
                        <div weather-panel="forecast" show-entry="forecast.list[0]"></div>
                    </div>
                    <div class="col-xs-4">
                        <div weather-panel="forecast" show-entry="forecast.list[1]"></div>
                    </div>
                    <div class="col-xs-4">
                        <div weather-panel="forecast" show-entry="forecast.list[2]"></div>
                    </div>
                    <div class="col-xs-4">
                        <div weather-panel="forecast" show-entry="forecast.list[3]"></div>
                    </div>
                        </div>
                </div>
            </div>
                  </div>

    </div>

</div>
