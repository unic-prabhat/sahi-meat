<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Sahi Meat">
      <meta name="author" content="SAHI Meat">
      <title>SAHI Meat @yield('title')</title>
      <!-- Favicons-->
      <link rel="shortcut icon" href="{{URL::to('img/favicon.png')}}"  type="image/x-icon">
      <link rel="apple-touch-icon" type="image/x-icon" href="{{URL::to('img/apple-touch-icon-57x57-precomposed.png')}}">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"  href="{{URL::to('img/favicon.png')}}">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{URL::to('img/favicon.png')}}">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"  href="{{URL::to('img/favicon.png')}}">
      <!-- GOOGLE WEB FONT -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!-- BASE CSS -->
      <link href="{{URL::to('css/bootstrap.custom.min.css')}}" rel="stylesheet">
      <link href="{{URL::to('css/style.css')}}" rel="stylesheet">
      <!-- YOUR CUSTOM CSS -->
      <link href="{{URL::to('css/custom.css')}}" rel="stylesheet">

      @yield('css')
   </head>
   <div class="loadert">
      <img src="{{URL::to('img/oie_trans.gif')}}">
   </div>
   <body>
      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
      <script  src="{{URL::to('js/jquery.min.js')}}"></script>
      <!-- COMMON SCRIPTS -->
      <script  src="{{URL::to('js/common_scripts.min.js')}}"></script>
      <script   src="{{URL::to('js/main.js')}}"></script>
      @yield('js')
   </body>
</html>
