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


}
