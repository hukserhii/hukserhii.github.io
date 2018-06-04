"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var CityInputComponent = (function () {
    function CityInputComponent(cityWeatherService) {
        this.cityWeatherService = cityWeatherService;
        this.city = {
            name: "",
            countryID: "",
            key: 0
        };
    }
    CityInputComponent.prototype.setCity = function () {
        this.cityWeatherService.setCity(this.city);
        this.cityWeatherService.getInfo();
        console.log("Input works!");
    };
    CityInputComponent.prototype.ngOnInit = function () {
    };
    return CityInputComponent;
}());
CityInputComponent = __decorate([
    core_1.Component({
        selector: 'app-city-input',
        templateUrl: './city-input.component.html',
        styleUrls: ['./city-input.component.css']
    })
], CityInputComponent);
exports.CityInputComponent = CityInputComponent;
