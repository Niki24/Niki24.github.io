import { QuotesService } from './../../services/quote.service';
import { Quote } from './../quote/quote';
import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, ModalController } from 'ionic-angular';
 
 

/**
 * Generated class for the Favorites page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
@IonicPage()
@Component({
  selector: 'page-favorites',
  templateUrl: 'favorites.html',
})
export class Favorites {

  quotes: Quote[];
 

  constructor(public navCtrl: NavController, public navParams: NavParams, private quotesService:QuotesService, 
              private modalCtrl:ModalController) {

  }

  ionViewWillEnter() {
    this.quote = this.quotesService.getFavoriteQuotes(); 
  }

  onViewQuote(quote:Quote){
    const modal = this.modalCtrl.create(Quote);
    modal.present();  
  }
}
