import { NgModule } from '@angular/core';
import { AppComponent } from './app.component';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { APP_ROUTING } from './app.routing';

import { HomeComponent } from './route/home/home.component';

import { CityInputComponent } from './route/city-input/city-input.component';
import { CurrentInfoComponent } from './route/current-info/current-info.component';
import { WeatherChartsComponent } from './route/weather-charts/weather-charts.component';

@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        HttpModule,
        APP_ROUTING
    ],
    declarations: [
        AppComponent,
        HomeComponent,
        CityInputComponent,
        CurrentInfoComponent,
        WeatherChartsComponent
    ],
    providers: [

    ],
    bootstrap: [
        AppComponent
    ]
})
export class AppModule {}