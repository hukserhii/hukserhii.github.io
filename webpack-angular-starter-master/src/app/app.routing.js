"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var router_1 = require("@angular/router");
var home_component_1 = require("./route/home/home.component");
exports.APP_ROUTING = router_1.RouterModule.forRoot([
    {
        path: '',
        component: home_component_1.HomeComponent
    }
]);
