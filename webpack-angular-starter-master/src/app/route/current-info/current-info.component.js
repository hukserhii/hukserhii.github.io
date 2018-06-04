"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var CurrentInfoComponent = (function () {
    function CurrentInfoComponent(cityWeather) {
        this.cityWeather = cityWeather;
        this.isInit = false;
    }
    CurrentInfoComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.cityWeather.change.subscribe(function (isInit) {
            _this.isInit = isInit;
            _this.date = _this.cityWeather.currentWeather.date.substr(0, 10);
        });
    };
    return CurrentInfoComponent;
}());
CurrentInfoComponent = __decorate([
    core_1.Component({
        selector: 'app-current-info',
        templateUrl: './current-info.component.html',
        styleUrls: ['./current-info.component.css']
    })
], CurrentInfoComponent);
exports.CurrentInfoComponent = CurrentInfoComponent;
