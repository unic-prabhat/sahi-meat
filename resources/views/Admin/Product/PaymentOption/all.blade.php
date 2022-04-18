@extends('Admin.layouts.adminbody')
@section('title', 'Payment Option')
@section('css')

@endsection
@section('admincontent')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment Option</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="products.php">Products</a></li>
              <li class="breadcrumb-item active">Payment Option</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label style="width:20%">Credit Card : </label>
                <input type="checkbox" name="credit-card" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
              <div class="form-group">
                <label style="width:20%">Paypal : </label>
                <input type="checkbox" name="paypal" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
              <div class="form-group">
                <label style="width:20%">Cash on Delivery : </label>
                <input type="checkbox" name="cash-on-delivery" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
              <div class="form-group">
                <label style="width:20%">Rozerpay : </label>
                <input type="checkbox" name="rozerpay" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12 p-2 mb-3">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->

    @endsection

    @section('js')
    <script src="{{URL::to('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript">
     //switch init. start//
     $(function () {
           $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
       })
     });
     //switch init. end//
     </script>
    @endsection
