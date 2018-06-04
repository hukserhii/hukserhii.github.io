"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (this && this.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t;
    return { next: verb(0), "throw": verb(1), "return": verb(2) };
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = y[op[0] & 2 ? "return" : op[0] ? "throw" : "next"]) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [0, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var weather_1 = require("./weather");
var current_weather_1 = require("./current-weather");
var Axios_1 = require("Axios");
var CityWeatherService = (function () {
    function CityWeatherService() {
        this.isInit = false;
        this.change = new core_1.EventEmitter();
    }
    CityWeatherService.prototype.setCity = function (city) {
        this.city = city;
    };
    CityWeatherService.prototype.getInfo = function () {
        var _this = this;
        Axios_1.default.get('api.openweathermap.org/data/2.5/find?', {
            params: {
                appid: 'eeb29840ff54a3e759231add75fafd96',
                q: this.city.name
            }
        })
            .then(function (response) { return __awaiter(_this, void 0, void 0, function () {
            var res;
            return __generator(this, function (_a) {
                this.city.countryID = response.data[0].Country.ID;
                this.city.key = response.data[0].Key;
                res = Axios_1.default.get('openweathermap.org/data/2.5/weather?' + this.city.key, {
                    params: {
                        appid: 'eeb29840ff54a3e759231add75fafd96',
                        details: 'true',
                        metric: 'true'
                    }
                });
                return [2 /*return*/, res];
            });
        }); })
            .then(function (response) { return __awaiter(_this, void 0, void 0, function () {
            var tmp, res;
            return __generator(this, function (_a) {
                console.log(response);
                tmp = new current_weather_1.CurrentWeather();
                tmp.date = response.data[0].DateTime;
                tmp.icon = response.data[0].WeatherIcon;
                tmp.iconPhrase = response.data[0].IconPhrase.replace("w/", ",");
                tmp.temperature = response.data[0].Temperature.Value;
                tmp.realFeelTemperature = response.data[0].RealFeelTemperature.Value;
                tmp.wind = response.data[0].Wind.Speed.Value;
                tmp.humidity = response.data[0].RelativeHumidity;
                tmp.precipitationProbability = response.data[0].PrecipitationProbability;
                tmp.cloudCover = response.data[0].CloudCover;
                this.currentWeather = tmp;
                res = Axios_1.default.get('openweathermap.org/data/2.5/forecast?' + this.city.key, {
                    params: {
                        appid: 'eeb29840ff54a3e759231add75fafd96',
                        details: 'true',
                        metric: 'true'
                    }
                });
                return [2 /*return*/, res];
            });
        }); }).then(function (response) { return __awaiter(_this, void 0, void 0, function () {
            var i, tempWeather;
            return __generator(this, function (_a) {
                this.weather = [];
                for (i = 0; i < response.data.DailyForecasts.length; i++) {
                    tempWeather = new weather_1.Weather();
                    tempWeather.date = response.data.DailyForecasts[i].Date;
                    tempWeather.dayCloudCover = response.data.DailyForecasts[i].Day.CloudCover;
                    tempWeather.dayRainProbability = response.data.DailyForecasts[i].Day.RainProbability;
                    tempWeather.dayIcon = response.data.DailyForecasts[i].Day.Icon;
                    tempWeather.dayIconPhrase = response.data.DailyForecasts[i].Day.IconPhrase;
                    tempWeather.dayPhrase = response.data.DailyForecasts[i].Day.LongPhrase;
                    tempWeather.dayWindSpeed = response.data.DailyForecasts[i].Day.Wind.Speed.Value;
                    tempWeather.HoursOfSun = response.data.DailyForecasts[i].HoursOfSun;
                    tempWeather.moonRise = response.data.DailyForecasts[i].Moon.Rise;
                    tempWeather.moonSet = response.data.DailyForecasts[i].Moon.Set;
                    tempWeather.nightCloudCover = response.data.DailyForecasts[i].Night.CloudCover;
                    tempWeather.nightRainProbability = response.data.DailyForecasts[i].Night.RainProbability;
                    tempWeather.nightIcon = response.data.DailyForecasts[i].Night.Icon;
                    tempWeather.nightIconPhrase = response.data.DailyForecasts[i].Night.IconPhrase;
                    tempWeather.nightPhrase = response.data.DailyForecasts[i].Night.LongPhrase;
                    tempWeather.nightWindSpeed = response.data.DailyForecasts[i].Night.Wind.Speed.Value;
                    tempWeather.realFeelTempMax = response.data.DailyForecasts[i].RealFeelTemperature.Maximum.Value;
                    tempWeather.realFeelTempMin = response.data.DailyForecasts[i].RealFeelTemperature.Minimum.Value;
                    tempWeather.sunRise = response.data.DailyForecasts[i].Sun.Rise;
                    tempWeather.sunSet = response.data.DailyForecasts[i].Sun.Set;
                    tempWeather.TemperatureMax = response.data.DailyForecasts[i].Temperature.Maximum.Value;
                    tempWeather.TemperatureMin = response.data.DailyForecasts[i].Temperature.Minimum.Value;
                    this.weather.push(tempWeather);
                }
                console.log(response.data);
                this.isInit = true;
                this.change.emit(this.isInit);
                return [2 /*return*/];
            });
        }); })
            .catch(function (error) {
            console.log(error);
            prompt("Chosen city doesn't exist. Please, write correct city");
        });
    };
    return CityWeatherService;
}());
__decorate([
    core_1.Output()
], CityWeatherService.prototype, "change", void 0);
CityWeatherService = __decorate([
    core_1.Injectable({
        providedIn: 'root'
    })
], CityWeatherService);
exports.CityWeatherService = CityWeatherService;
