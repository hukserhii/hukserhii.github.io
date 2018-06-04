"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var testing_1 = require("@angular/core/testing");
var city_weather_service_1 = require("./city-weather.service");
describe('CityService', function () {
    beforeEach(function () {
        testing_1.TestBed.configureTestingModule({
            providers: [city_weather_service_1.CityWeatherService]
        });
    });
    it('should be created', testing_1.inject([city_weather_service_1.CityWeatherService], function (service) {
        expect(service).toBeTruthy();
    }));
});
