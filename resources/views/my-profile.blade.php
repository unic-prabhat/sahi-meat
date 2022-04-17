@extends('layouts.app')
@section('css')
<!-- SPECIFIC CSS for account page-->
<link href="{{URL::to('css/account.css')}}" rel="stylesheet">
@endsection

@section('content')
<main class="bg_gray">
   <div class="container margin_30">
      <div class="page_header">
         <div class="breadcrumbs">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Category</a></li>
               <li>My Profile</li>
            </ul>
         </div>
         <h1>Profile</h1>
      </div>
      <!-- /page_header -->
      <div class="row justify-content-center">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="box_account">
               <h3 class="client">My Profile coming soon.............</h3>

            </div>
            <!-- /box_account -->

         </div>



      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</main>
	<!--/main-->
@endsection

@section('js')
  <!-- SPECIFIC SCRIPTS for account page-->
@endsection
