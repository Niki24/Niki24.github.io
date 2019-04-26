import { QuotesService } from './../../services/quote.service';

import { Component, OnInit } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';

 import { Quote } from './../data/quote.interface';

/**
 * Generated class for the Quotes page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
@IonicPage()
@Component({
  selector: 'page-quotes',
  templateUrl: 'quotes.html',
})
export class Quotes implements OnInit {
  QuotesService: any;

  quoteGroup : { category:string, quotes:Quote[], icon:string }[];

  constructor(public navCtrl: NavController, 
  public navParams: NavParams, 
  private alertCtl:AlertController, 
  private quotesService:QuotesService) {

  }

  ngOnInit (){
    this.quoteGroup = this.navParams.data;
  }

/*  ionViewDidLoad() {
    this.quoteGroup = this.navParams.data;
    ADD elvis operator ? in template to use this approach 
  }*/
  onAddToFavorite(selectedQuote:Quote) {
    const alert= this.alertCtl.create({
      title: 'Add Quote', 
      subTitle:'Are you sure?',
      message:'Are you sure you want to add the quote?', 
      buttons:[
        {
        text:'Yes go ahead', 
        handler:() => {
          this.quotesService.addQuoteToFavorites(selectedQuote);
        }
      }, {
          text:'no I changed my mind!',
          role:'cancel', 
          handler:() => {
            console.log('cancel');
          }
      }
      ]
    });
    alert.present();
  }

}
