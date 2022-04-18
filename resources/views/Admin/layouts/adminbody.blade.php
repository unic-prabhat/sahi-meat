<!-- @auth
@if(auth()->user()->usertype == 2)
  <script type="text/javascript">
    window.location = "http://127.0.0.1:8000/admin";
  </script>
@endif
@else
<script type="text/javascript">
  window.location = "http://127.0.0.1:8000/logoutadmin";
</script>
@endauth -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{URL::to('assets/dist/img/favicon.png')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{URL::to('assets/dist/font.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/plugins/font/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::to('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('assets/dist/css/style.css')}}">

   <link rel="stylesheet" href="{{URL::to('assets/plugins/datepicker-new/css/bootstrap-datepicker.min.css')}}">

  <!-- Sweet ALert css -->
  <link rel="stylesheet" href="{{URL::to('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" class="cursor-pointor" id="logoutbtn">
          <i class="fa fa-power-off" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sidebar-bg elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link pointer">
      <img src="assets/dist/img/shai-meat-logo.png" alt="Sahi Meat Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <div class="brand-text font-weight-light txt-overflow-dotted">SAHI Meat</div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block txt-overflow-dotted">Username</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="admin_nav_ul">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a class="nav-link" href="{{URL::to('/admin')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/admin/manage-product/')}}">
                <i class="nav-icon fa fa-product-hunt"></i>
                <p>
                   Products
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/admin/manage-category/')}}">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                 Categories
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/admin/manage-coupon/')}}">
                <i class="nav-icon fa fa-ticket"></i>
                <p>
                  Manage Coupon
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/admin/payment-options/')}}">
                <i class="nav-icon fa fa-money"></i>
                <p>
                  Payment Options
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">
                <i class="nav-icon fa fa-cart-plus"></i>
                <p>
                  Orders
                  <span class="right badge badge-danger">3</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customers.php">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Customers
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/admin/manage-gallery/')}}">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@yield('admincontent')
</div>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Designed & Development by</b> <a href="#" target="_blank">Pravat</a>
    </div>
    <strong>Copyright &copy; 2022 <a href="https://odisha.gov.in/" target="_blank">SAHI Meat</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::to('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- script for tooltip -->

<script src="{{URL::to('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{URL::to('assets/plugins/datepicker-new/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{URL::to('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{URL::to('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<!-- <script src="{{URL::to('img/favicon.png')}}assets/plugins/jszip/jszip.min.js"></script>
<script src="{{URL::to('img/favicon.png')}}assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{URL::to('img/favicon.png')}}assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script> -->
<script src="{{URL::to('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@yield('js')
<!-- sweet alert js -->
<script src="{{URL::to('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{URL::to('assets/dist/js/adminlte.min.js')}}"></script>
<!-- Page specific script -->
<script type="text/javascript">
  //input file initilization  start//
    $(function () {
      bsCustomFileInput.init();
    });
//input file initilization end//
</script>

<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

$('.delete-msg').click(function() {
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )
  }
})
});

$('#logoutbtn').click(function() {
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to Logout!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Logout!'
}).then((result) => {
  if (result.isConfirmed) {
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )
  }
})
});

  });
</script>
</body>
</html>
