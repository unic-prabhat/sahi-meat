<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
  public function home(){
    return view('home');
  }

  public function productdetail(){
    return view('product-detail');
  }

  public function categoryinner(){
    return view('category-inner');
  }

  public function cart(){
    return view('cart');
  }

  public function checkout(){
    return view('checkout');
  }

  public function account(){
    return view('account');
  }


  public function myprofile(){
    return view('my-profile');
  }

  public function myorders(){
    return view('my-orders');
  }

  public function invoice(){
    return view('invoice');
  }

  public function testimonial(){
    return view('testimonial');
  }

  public function aboutus(){
    return view('about-us');
  }

  public function contactus(){
    return view('contact-us');
  }

  public function help(){
    return view('help');
  }

}
