@extends('Admin.layouts.adminbody')
@section('title', 'Products')
@section('css')

@endsection
@section('admincontent')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Products</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Products</h3>

      <div class="card-tools">
        <a href="{{URL::to('admin/add-product')}}" class="btn btn-success btn-sm">
          <i class="fas fa-plus"></i> Add New
        </a>
      </div>
    </div>
    <div class="card-body p-1">
      <!--
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <select class="form-control" name="" id="">
              <option selected disabled>Filter by Category</option>
              <option value="">All</option>
              <option value="">Category 1</option>
              <option value="">Category 2</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
           <div class="form-group">
            <select class="form-control" name="" id="">
              <option selected disabled>Filter by Stock Status</option>
              <option value="">All</option>
              <option value="">In Stock</option>
              <option value="">Out Stock</option>
              <option value="">On Backorder</option>
            </select>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      -->
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-striped projects">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Stock</th>
                      <th>Price</th>
                      <th>Categories</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><img src="{{URL::to('assets/product-images/1_b.jpg')}}" class="tbl-product-img"></td>
                      <td><a>Chiken Full 1Kg</a><br/><small>ID: 6766666 | 01.01.2022</small></td>
                      <td><span class="badge badge-success">In Stock</span></td>
                      <td>₹190.00<br><small><s>₹300.00</s></small></td>
                      <td>Category-1</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-info btn-sm" href="{{URL::to('admin/edit-product')}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                          <button type="button" class="btn btn-danger btn-sm delete-msg" href="#"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td><img src="{{URL::to('assets/product-images/1_b.jpg')}}" class="tbl-product-img"></td>
                      <td><a>Chiken Full 1Kg</a><br/><small>ID: 6766666 | 01.01.2022</small></td>
                      <td><span class="badge badge-danger">Out of Stock</span></td>
                      <td>₹190.00<br><small><s>₹300.00</s></small></td>
                      <td>Category-1</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-info btn-sm" href="{{URL::to('admin/edit-product')}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                          <button type="button" class="btn btn-danger btn-sm delete-msg" href="#"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td><img src="{{URL::to('assets/product-images/1_b.jpg')}}" class="tbl-product-img"></td>
                      <td><a>Chiken Full 1Kg</a><br/><small>ID: 6766666 | 01.01.2022</small></td>
                      <td><span class="badge badge-success">In Stock</span></td>
                      <td>₹190.00<br><small><s>₹300.00</s></small></td>
                      <td>Category-1</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-info btn-sm" href="{{URL::to('admin/edit-product')}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                          <button type="button" class="btn btn-danger btn-sm delete-msg" href="#"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 @endsection

 @section('js')
 <script type="text/javascript">
// datatable init. start//
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});
// datatable init. start//
</script>
<script type="text/javascript">
  $(function() {
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
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
      Swal.fire(
        'Deleted!',
        'Your Product has been deleted.',
        'success'
      )
      }
    })
  });

});
</script>
 @endsection
