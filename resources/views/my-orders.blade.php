@extends('layouts.app')
@section('css')
<!-- SPECIFIC CSS for My Order page-->
<link href="{{URL::to('css/my-order.css')}}" rel="stylesheet">
@endsection

@section('content')
<main class="bg_gray">
		<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li>My Orders</li>
				</ul>
			</div>
			<h1>My Orders</h1>
		</div>
		<!-- /page_header -->
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>Product</th>
									<th>Order ID</th>
									<th>Date</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Subtotal</th>
									<th>Invoice</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="{{URL::to('img/products/product_placeholder_square_small.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" class="lazy" alt="Image">
										</div>
										<span class="item_cart">Chiken Meat 1kg</span>
									</td>
									<td>
										<strong>R343535355</strong>
									</td>
									<td>
										<strong>12-April-2022</strong>
									</td>
									<td>
										<strong>₹140.00</strong>
									</td>
									<td>
										<strong>1</strong>
									</td>
									<td>
										<strong>₹140.00</strong>
									</td>
									<td>
										<a href="{{URL::to('invoice')}}" target="_blank"><i class="ti-printer"></i> Print</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="{{URL::to('img/products/product_placeholder_square_small.jpg')}}" data-src="{{URL::to('img/products/shoes/2.jpg')}}" class="lazy" alt="Image">
										</div>
										<span class="item_cart">Chiken Full Meat 1kg</span>
									</td>
									<td>
										<strong>R343535355</strong>
									</td>
									<td>
										<strong>12-April-2022</strong>
									</td>
									<td>
										<strong>₹110.00</strong>
									</td>
									<td>
										<strong>1</strong>
									</td>
									<td>
										<strong>₹110.00</strong>
									</td>
									<td>
										<a href="{{URL::to('invoice')}}" target="_blank"><i class="ti-printer"></i> Print</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="{{URL::to('img/products/product_placeholder_square_small.jpg')}}" data-src="{{URL::to('img/products/shoes/1.jpg')}}" class="lazy" alt="Image">
										</div>
										<span class="item_cart">Chiken Leg Pics 1kg</span>
									</td>
									<td>
										<strong>R343535355</strong>
									</td>
									<td>
										<strong>12-April-2022</strong>
									</td>
									<td>
										<strong>₹90.00</strong>
									</td>

									<td>
										<strong>1</strong>
									</td>
									<td>
										<strong>₹90.00</strong>
									</td>
									<td>
										<a href="{{URL::to('invoice')}}" target="_blank"><i class="ti-printer"></i> Print</a>
									</td>
								</tr>
							</tbody>
						</table>
					<!-- /cart_actions -->

		</div>
		<!-- /container -->


</main>
	<!--/main-->
@endsection

@section('js')
  <!-- SPECIFIC SCRIPTS for My Order page-->

@endsection
