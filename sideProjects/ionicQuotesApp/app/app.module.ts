import { QuotesService } from './../services/quote.service';
import { Tabs } from './../pages/tabs/tabs';
import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { Quotes } from "../pages/quotes/quotes";
import { Favorites } from './../pages/favorites/favorites';
import { Settings } from './../pages/settings/settings';
import { Library } from './../pages/library/library';
import { Quote } from './../pages/quote/quote';


@NgModule({
  declarations: [
    MyApp,
    Favorites,
    Quote, Quotes,
    Library, Settings, Tabs, 
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp, Favorites,
    Quote, Quotes,
    Library, Settings,Tabs, 
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}, 
    QuotesService
  ]
})
export class AppModule {}
