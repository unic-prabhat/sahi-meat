<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

  public function home(){
    return view('Admin.index');
  }

  public function manageproduct(){
    return view('Admin.Product.all');
  }

  public function addproduct(){
    return view('Admin.Product.add');
  }

  public function editproduct(){
    return view('Admin.Product.edit');
  }

  public function category(){
    return view('Admin.Product.Category.all');
  }

  public function coupon(){
    return view('Admin.Product.Coupon.all');
  }

  public function paymentoptions(){
    return view('Admin.Product.PaymentOption.all');
  }

  public function gallery(){
    return view('Admin.Gallery.all');
  }



}
