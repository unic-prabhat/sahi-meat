@extends('Admin.layouts.adminbody')
@section('title', 'Dashboard')
@section('css')

@endsection
@section('admincontent')                           
<!-- Content Header (Page header) -->
   <div class="p-2"></div>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
             <button type="button" class="btn btn-success swalDefaultSuccess">
                 Launch Success Toast
             </button>
             <button type="button" class="btn btn-info swalDefaultInfo">
                 Launch Info Toast
             </button>
             <button type="button" class="btn btn-danger swalDefaultError">
                 Launch Error Toast
             </button>
             <button type="button" class="btn btn-warning swalDefaultWarning">
                 Launch Warning Toast
             </button>
             <button type="button" class="btn btn-default swalDefaultQuestion">
                 Launch Question Toast
             </button>
             <a type="button" class="btn btn-default delete-msg">
                delet
             </a>
         </div>
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 @endsection
