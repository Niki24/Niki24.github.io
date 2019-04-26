import {Injectable, Inject} from '@angular/core';
import {Http, Headers, RequestOptions,Response,HTTP_PROVIDERS} from '@angular/http'; 
import {Observable} from 'rxjs/Observable' ; 
import 'rxjs/Rx';
import 'rxjs/add/operator/map';

@Injectable() 

export class WeatherService {

    private http = null; 
    private apiKey = null; 
    private url = null; 
    private res = null; 
   // private latitude = null; 
   // private longitude = null; 

    static get parameters() {
        return [Http];
    }

    constructor(http){
        this.http = http; 
        this.apiKey = 'use your api key here';
      //  this.latitude = 37.8267; 
      //  this.longitude =-122.423;
        this.url =  'http://api.wunderground.com/api/' + this.apiKey +'/conditions/q' ; 
       // this.url =  'https://api.forecast.io/forecast/' + this.apiKey +'/' + this.latitude + ',' + this.longitude; 
    }

    getWeather( state,city){
        return this.http.get(this.url+'/'+state+'/'+city+'.json')
        .map(res =>res.json());
    }
}