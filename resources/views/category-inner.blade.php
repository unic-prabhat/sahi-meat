@extends('layouts.app')
@section('css')
<!-- SPECIFIC CSS for category inner page-->
<link href="{{URL::to('css/listing.css')}}" rel="stylesheet">
@endsection

@section('content')
<main>
		<div class="top_banner">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
				<div class="container">
					<div class="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Category</a></li>
							<li>Category-1</li>
						</ul>
					</div>
					<h1>Chiken - Category-1</h1>
				</div>
			</div>
			<img src="{{URL::to('img/bg_cat_shoes.jpg')}}" class="img-fluid" alt="">
		</div>
		<!-- /top_banner -->
			<div id="stick_here"></div>
			<div class="toolbox elemento_stick">
				<div class="container">
				<ul class="clearfix">
					<li>
						<div class="sort_select">
							<select name="sort" id="sort">
                                    <option value="popularity" selected="selected">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to
							</select>
						</div>
					</li>
				</ul>
				</div>
			</div>
			<!-- /toolbox -->

			<div class="container margin_30">

			<div class="row">
				<aside class="col-lg-3" id="sidebar_fixed">
				    <div class="filter_col">
				        <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
				        <div class="filter_type version_2">
				            <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
				            <div class="collapse show" id="filter_1">
				                <ul>
				                    <li>
				                        <label class="container_check">Category-1 <small>12</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">Category-2 <small>24</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">Category-3 <small>23</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">Category-4 <small>11</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                </ul>
				            </div>
				            <!-- /filter_type -->
				        </div>

				        <!-- /filter_type -->
				        <div class="filter_type version_2">
				            <h4><a href="#filter_4" data-bs-toggle="collapse" class="opened">Price</a></h4>
				            <div class="collapse show" id="filter_4">
				                <ul>
				                    <li>
				                        <label class="container_check">₹0 — ₹50<small>11</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">₹50 — ₹100<small>08</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">₹100 — ₹150<small>05</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                    <li>
				                        <label class="container_check">₹150 — ₹200<small>18</small>
				                            <input type="checkbox">
				                            <span class="checkmark"></span>
				                        </label>
				                    </li>
				                </ul>
				            </div>
				        </div>
				        <!-- /filter_type -->
				        <div class="buttons">
				            <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
				        </div>
				    </div>
				</aside>
				<!-- /col -->
				<div class="col-lg-9">
					<div class="row small-gutters">
						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

						<div class="col-6 col-md-4">
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

					</div>
					<!-- /row -->
					<div class="pagination__wrapper">
						<ul class="pagination">
							<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
							<li>
								<a href="#0" class="active">1</a>
							</li>
							<li>
								<a href="#0">2</a>
							</li>
							<li>
								<a href="#0">3</a>
							</li>
							<li>
								<a href="#0">4</a>
							</li>
							<li><a href="#0" class="next" title="next page">&#10095;</a></li>
						</ul>
					</div>
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->

		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
@endsection

@section('js')
  <!-- SPECIFIC SCRIPTS for category inner page-->
<script src="{{URL::to('js/sticky_sidebar.min.js')}}"></script>
<script src="{{URL::to('js/specific_listing.js')}}"></script>
@endsection
