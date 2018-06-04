"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var angular_highcharts_1 = require("angular-highcharts");
var WeatherChartsComponent = (function () {
    function WeatherChartsComponent(cityWeather) {
        this.cityWeather = cityWeather;
        this.isInit = false;
    }
    WeatherChartsComponent.prototype.draw = function () {
        var maxTempArr = [];
        var maxFeelArr = [];
        var minTempArr = [];
        var minFeelArr = [];
        var dayProbArr = [];
        var nightProbArr = [];
        var dayWindArrr = [];
        var nightWindArr = [];
        var sunRiseArr = [];
        var sunSetArr = [];
        var moonRiseArr = [];
        var moonSetArr = [];
        var hoursOfSunArr = [];
        var dateArr = [];
        for (var i = 0; i < this.cityWeather.weather.length; i++) {
            maxTempArr.push(this.cityWeather.weather[i].TemperatureMax);
            maxFeelArr.push(this.cityWeather.weather[i].realFeelTempMax);
            minTempArr.push(this.cityWeather.weather[i].TemperatureMin);
            minFeelArr.push(this.cityWeather.weather[i].realFeelTempMin);
            dayProbArr.push(this.cityWeather.weather[i].dayRainProbability);
            nightProbArr.push(this.cityWeather.weather[i].nightRainProbability);
            dayWindArrr.push(this.cityWeather.weather[i].dayWindSpeed);
            nightWindArr.push(this.cityWeather.weather[i].nightWindSpeed);
            sunRiseArr.push((+this.cityWeather.weather[i].sunRise.substr(11, 2)) + (+this.cityWeather.weather[i].sunRise.substr(14, 2) / 100));
            sunSetArr.push((+this.cityWeather.weather[i].sunSet.substr(11, 2)) + (+this.cityWeather.weather[i].sunSet.substr(14, 2) / 100));
            moonRiseArr.push((+this.cityWeather.weather[i].moonRise.substr(11, 2)) + (+this.cityWeather.weather[i].moonRise.substr(14, 2) / 100));
            moonSetArr.push((+this.cityWeather.weather[i].moonSet.substr(11, 2)) + (+this.cityWeather.weather[i].moonSet.substr(14, 2) / 100));
            hoursOfSunArr.push(this.cityWeather.weather[i].HoursOfSun);
            dateArr.push(this.cityWeather.weather[i].date.substr(0, 10));
        }
        this.chartMaxTemp = this.createDoubleBar(maxTempArr, maxFeelArr, dateArr, "Day maximum temperature", "Day max temperature", "Real feel temperature", '°C');
        this.chartMinTemp = this.createDoubleBar(minTempArr, minFeelArr, dateArr, "Day minimum temperature", "Day min temperature", "Real feel temperature", '°C');
        this.chartDayProb = this.createBar(dayProbArr, dateArr, "Day precipitation probability", '%');
        this.chartNightProb = this.createBar(nightProbArr, dateArr, "Night precipitation probability", '%');
        this.chartDayWind = this.createSpline(dayWindArrr, dateArr, "Day wind speed", 'km/h');
        this.chartNightWind = this.createSpline(nightProbArr, dateArr, "Night wind speed", 'km/h');
        this.chartSunMoonRise = this.createDoubleBar(sunRiseArr, moonRiseArr, dateArr, "Sun/moon rise time", "Sun rise time", "Moon rise time", '');
        this.chartSunMoonSet = this.createDoubleBar(sunSetArr, moonSetArr, dateArr, "Sun/moon set time", "Sun set time", "Moon set time", '');
        this.chartHoursOfSunChart = this.createLine(hoursOfSunArr, dateArr, "Hours of sun", "");
    };
    WeatherChartsComponent.prototype.createLine = function (data, categories, text, metric) {
        return new angular_highcharts_1.Chart({
            chart: {
                type: 'line'
            },
            title: {
                text: text
            },
            xAxis: {
                categories: categories
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.x + ': ' + this.y + metric;
                }
            },
            series: [
                {
                    name: text + ' ' + metric,
                    data: data,
                    color: '#9040D5	'
                }
            ]
        });
    };
    WeatherChartsComponent.prototype.createSpline = function (data, categories, text, metric) {
        return new angular_highcharts_1.Chart({
            chart: {
                type: 'spline'
            },
            title: {
                text: text
            },
            xAxis: {
                categories: categories
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.x + ': ' + this.y + metric;
                }
            },
            series: [
                {
                    name: text + ' ' + metric,
                    data: data,
                    color: '#9040D5	'
                }
            ]
        });
    };
    WeatherChartsComponent.prototype.createBar = function (data, categories, text, metric) {
        return new angular_highcharts_1.Chart({
            chart: {
                type: 'column'
            },
            title: {
                text: text
            },
            xAxis: {
                categories: categories
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.x + ': ' + this.y + metric;
                }
            },
            series: [
                {
                    name: text + ' ' + metric,
                    data: data,
                    color: '#9040D5	'
                }
            ]
        });
    };
    WeatherChartsComponent.prototype.createDoubleBar = function (firstData, secondData, categories, text, firstSeriesName, secondSeriesName, metric) {
        return new angular_highcharts_1.Chart({
            chart: {
                type: 'column'
            },
            title: {
                text: text
            },
            xAxis: {
                categories: categories
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.x + ': ' + this.y + metric;
                }
            },
            series: [
                {
                    name: firstSeriesName + ' ' + metric,
                    data: firstData,
                    color: '#FFD740'
                }, {
                    name: secondSeriesName + ' ' + metric,
                    data: secondData,
                    color: '#5E4BD8'
                }
            ]
        });
    };
    WeatherChartsComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.cityWeather.change.subscribe(function (isInit) {
            _this.isInit = isInit;
            _this.draw();
        });
    };
    return WeatherChartsComponent;
}());
WeatherChartsComponent = __decorate([
    core_1.Component({
        selector: 'app-weather-charts',
        templateUrl: './weather-charts.component.html',
        styleUrls: ['./weather-charts.component.css']
    })
], WeatherChartsComponent);
exports.WeatherChartsComponent = WeatherChartsComponent;
