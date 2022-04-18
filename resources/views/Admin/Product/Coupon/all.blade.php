@extends('Admin.layouts.adminbody')
@section('title', 'Manage Coupon')
@section('css')
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="{{URL::to('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
@endsection
@section('admincontent')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manage Coupon</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Coupon</li>
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
        <div class="card-header">
          <h3 class="card-title">All Coupons</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-coupon">
              <i class="fas fa-plus"></i> Add New
            </button>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Coupon Code</th>
                <th>Start Date</th>
                <th>Expired Date</th>
                <th>Selected Products</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>242342</td>
                <td>APRILOFFER</td>
                <td>12-April-2022</td>
                <td>12-July-2022</td>
                <td>All Products</td>
                <td><span class="badge badge-success">Ongoing</span></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-coupon"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm delete-msg"><i class="fas fa-trash"></i> Delete</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>242342</td>
                <td>APRILOFFER</td>
                <td>12-April-2022</td>
                <td>12-July-2022</td>
                <td>Checken 1kg, checken full 1kg</td>
                <td><span class="badge badge-warning">Upcoming</span></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-coupon"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm delete-msg"><i class="fas fa-trash"></i> Delete</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>242342</td>
                <td>APRILOFFER</td>
                <td>12-Jan-2022</td>
                <td>12-Mar-2022</td>
                <td>Checken 1kg, checken full 1kg</td>
                <td><span class="badge badge-danger">Expired</span></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-coupon"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm delete-msg"><i class="fas fa-trash"></i> Delete</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>
<!-- /.content -->


<!-- start add new modal-->
<div class="modal fade" id="add-coupon">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
        <div class="modal-header p-1">
          <h5 class="modal-title">Add New Coupon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-2">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Coupon Code :</label>
                  <input type="text" class="form-control" name="" id="">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Start Date :</label>
                  <input type="text" class="form-control" name="" id="startdate">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Expired Date :</label>
                  <input type="text" class="form-control" name="" id="expireddate">
              </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                  <label>Choose Product :</label>
                  <select class="duallistbox" multiple="multiple" name="" id="">
                    <option value="">All Product</option>
                    <option value="">Product One</option>
                    <option value="">Product Two</option>
                    <option value="">Product Three</option>
                    <option value="">Product Four</option>
                    <option value="">Product Five</option>
                    <option value="">Product Six</option>
                    <option value="">Product Seven</option>
                    <option value="">Product Eight</option>
                  </select>
                </div>
            </div>

          </div>
        </div>
        <div class="modal-footer  p-1 justify-content-right">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Save</button>
        </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end add new modal-->



<!-- start edit modal-->
<div class="modal fade" id="edit-coupon">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
        <div class="modal-header p-1">
          <h5 class="modal-title">Edit Coupon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-2">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Coupon Code :</label>
                  <input type="text" class="form-control" name="" id="" value="APRILOFFER">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Start Date :</label>
                  <input type="text" class="form-control" name="" id="edit-startdate" value="01-02-2022">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                  <label for="">Expired Date :</label>
                  <input type="text" class="form-control" name="" id="edit-expireddate" value="03-04-2022">
              </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                  <label>Choose Product :</label>
                  <select class="duallistbox" multiple="multiple" name="" id="">
                    <option value="">All Product</option>
                    <option value="">Product One</option>
                    <option value="">Product Two</option>
                    <option value="">Product Three</option>
                    <option value="" selected>Product Four</option>
                    <option value="">Product Five</option>
                    <option value="" selected>Product Six</option>
                    <option value="">Product Seven</option>
                    <option value="">Product Eight</option>
                  </select>
                </div>
            </div>

          </div>
        </div>
        <div class="modal-footer  p-1 justify-content-right">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Save</button>
        </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end edit modal-->

@endsection

@section('js')
<!-- Bootstrap4 Duallistbox -->
<script src="{{URL::to('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
@endsection
