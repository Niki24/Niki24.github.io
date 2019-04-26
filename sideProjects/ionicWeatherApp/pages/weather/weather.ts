import {Page} from 'ionic-angular';
import {OnInit} from '@angular/core';
import {WeatherService} from '../services/weather.service';

@Page({
    templateUrl:'build/pages/weather/weather.html',
    providers: [WeatherService]
})

export class WeatherPage {

    private weatherService = null; 
    private city = null; 
    private state = null; 
    

    static get parameters(){
        return [[WeatherService]];
    }

    constructor(weatherService){
      this.city = 'Augusta'; 
      this.state = 'GA'; 
       
    }

    ngOnInit(){
        this.weatherService.getWeather(this.state,this.city).subscribe(weather=>{
            console.log(WeatherService);
        })
    }
}