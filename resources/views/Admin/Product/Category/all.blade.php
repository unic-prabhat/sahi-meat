@extends('Admin.layouts.adminbody')
@section('title', 'Manage Category')
@section('css')

@endsection
@section('admincontent')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Categories</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Categories</li>
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
      <h3 class="card-title">All Categories</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-category">
          <i class="fas fa-plus"></i> Add New
        </button>
      </div>
    </div>
    <div class="card-body p-1">
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-striped projects">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      <th>ID</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Category 1</td>
                      <td>232f223</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-category"><i class="fas fa-pencil-alt"></i> Edit</button>
                          <button type="button" class="btn btn-danger btn-sm delete-msg"><i class="fas fa-trash"></i> Delete</button>
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


<!-- start add new modal-->
<div class="modal fade" id="add-category">
  <div class="modal-dialog modal-sm">
    <form class="modal-content">
        <div class="modal-header p-1">
          <h5 class="modal-title">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-2">
          <div class="form-group mb-0">
              <label for="">Category Name</label>
              <input type="text" class="form-control" name="" id="">
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

<!-- start add new modal-->
<div class="modal fade" id="edit-category">
  <div class="modal-dialog modal-sm">
    <form class="modal-content">
        <div class="modal-header p-1 ">
          <h5 class="modal-title">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-2">
          <div class="form-group mb-0">
              <label for="">Category Name</label>
              <input type="text" class="form-control" name="" id="" value="Category-1">
          </div>
        </div>
        <div class="modal-footer p-1 justify-content-right">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Update</button>
        </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end add new modal-->

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
          'Your Category has been deleted.',
          'success'
        )
        }
      })
    });

  });
</script>

@endsection
