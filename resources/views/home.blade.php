@extends('layouts.app')
@section('css')
<!-- SPECIFIC CSS for home page -->
<link href="{{URL::to('css/home_1.css')}}" rel="stylesheet">
@endsection

@section('content')
<main>
   <div id="carousel-home">
      <div class="owl-carousel owl-theme">
         <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
               <div class="container">
                  <div class="row justify-content-center justify-content-md-end">
                     <div class="col-lg-6 static">
                        <div class="slide-text text-end white">
                           <h2 class="owl-slide-animated owl-slide-title">Lorem ipsum dolor <br> amet, consectetur</h2>
                           <p class="owl-slide-animated owl-slide-subtitle">
                              Lorem ipsum dolor sit amet, consectetur
                           </p>
                           <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{URL::to('product-detail')}}" role="button">Shop Now</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/owl-slide-->
         <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_2.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
               <div class="container">
                  <div class="row justify-content-center justify-content-md-start">
                     <div class="col-lg-6 static">
                        <div class="slide-text white">
                           <h2 class="owl-slide-animated owl-slide-title">Lorem ipsum dolor <br> amet, consectetur</h2>
                           <p class="owl-slide-animated owl-slide-subtitle">
                              Lorem ipsum dolor sit amet, consectetur
                           </p>
                           <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{URL::to('product-detail')}}" role="button">Shop Now</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/owl-slide-->
         <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_3.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
               <div class="container">
                  <div class="row justify-content-center justify-content-md-start">
                     <div class="col-lg-12 static">
                        <div class="slide-text text-center black">
                           <h2 class="owl-slide-animated owl-slide-title">Lorem ipsum dolor <br> amet, consectetur</h2>
                           <p class="owl-slide-animated owl-slide-subtitle">
                              Lorem ipsum dolor sit amet, consectetur
                           </p>
                           <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{URL::to('product-detail')}}" role="button">Shop Now</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/owl-slide-->
         </div>
      </div>
      <div id="icon_drag_mobile"></div>
   </div>
   <!--/carousel-->
   <div class="feat">
      <div class="container">
         <ul>
            <li>
               <div class="box">
                  <i class="ti-gift"></i>
                  <div class="justify-content-center">
                     <h3>Free Shipping</h3>
                     <p>For all oders over $99</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="box">
                  <i class="ti-wallet"></i>
                  <div class="justify-content-center">
                     <h3>Secure Payment</h3>
                     <p>100% secure payment</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="box">
                  <i class="ti-headphone-alt"></i>
                  <div class="justify-content-center">
                     <h3>24/7 Support</h3>
                     <p>Online top support</p>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
   <div class="container margin_60_35">
      <div class="main_title">
         <h2>Top Selling</h2>
         <span>Chiken</span>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
      </div>
      <div class="row small-gutters">
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <span class="ribbon off">-30%</span>
               <figure>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Full Meat 2kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹320.00</span>
                  <span class="old_price">₹400.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <span class="ribbon off">-30%</span>
               <figure>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Full Meat 2kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹320.00</span>
                  <span class="old_price">₹400.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <span class="ribbon off">-30%</span>
               <figure>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Full Meat 2kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹320.00</span>
                  <span class="old_price">₹400.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
         <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
               <span class="ribbon off">-30%</span>
               <figure>
                  <a href="{{URL::to('product-detail')}}">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2.jpg')}}" alt="">
                  <img class="img-fluid lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/2_b.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="{{URL::to('product-detail')}}">
                  <h3>Chiken Full Meat 2kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹320.00</span>
                  <span class="old_price">₹400.00</span>
               </div>
               <ul>
                  <li>
                     <a href="{{URL::to('product-detail')}}" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /col -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
   <div class="featured lazy" data-bg="url(img/featured_home.jpg)">
      <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
         <div class="container margin_60">
            <div class="row justify-content-center justify-content-md-start">
               <div class="col-lg-6 wow" data-wow-offset="150">
                  <h3>Lorem ipsum<br> dolor sit</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <div class="feat_text_block">
                     <div class="price_box">
                        <span class="new_price">₹90.00</span>
                        <span class="old_price">₹170.00</span>
                     </div>
                     <a class="btn_1" href="{{URL::to('product-detail')}}" role="button">Shop Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /featured -->
   <div class="container margin_60_35">
      <div class="main_title">
         <h2>Special</h2>
         <span>Chicken</span>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
      </div>
      <div id="product-slider" class="owl-carousel owl-theme products_carousel">
         <div class="item">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="#">
                  <img class="owl-lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /item -->
         <div class="item">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="#">
                  <img class="owl-lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /item -->
         <div class="item">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="#">
                  <img class="owl-lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /item -->
         <div class="item">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="#">
                  <img class="owl-lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /item -->
         <div class="item">
            <div class="grid_item">
               <figure>
                  <span class="ribbon off">-30%</span>
                  <a href="#">
                  <img class="owl-lazy" src="{{URL::to('img/products/product_placeholder_square_medium.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" alt="">
                  </a>
               </figure>
               <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
               <a href="product-detail-1.html">
                  <h3>Chiken Meat 1kg</h3>
               </a>
               <div class="price_box">
                  <span class="new_price">₹120.00</span>
                  <span class="old_price">₹200.00</span>
               </div>
               <ul>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="View Details">
                     <i class="ti-eye"></i><span>View Details</span>
                     </a>
                  </li>
                  <li>
                     <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart">
                     <i class="ti-shopping-cart"></i><span>Add to cart</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /grid_item -->
         </div>
         <!-- /item -->
      </div>
      <!-- /products_carousel -->
   </div>
   <!-- /container -->
   <div class="bg_gray">
      <div class="container margin_30">
         <div id="brands" class="owl-carousel owl-theme">
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_1.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_2.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_3.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_4.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_5.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
            <div class="item">
               <a href="#0"><img src="{{URL::to('img/brands/placeholder_brands.png')}}" data-src="{{URL::to('img/brands/logo_6.png')}}" alt="" class="owl-lazy"></a>
            </div>
            <!-- /item -->
         </div>
         <!-- /carousel -->
      </div>
      <!-- /container -->
   </div>
   <!-- /bg_gray -->
</main>
<!-- /main -->
@endsection

@section('js')
  <!-- SPECIFIC SCRIPTS for home page slider init -->
  <script src="{{URL::to('js/carousel-home.min.js')}}"></script>
@endsection
