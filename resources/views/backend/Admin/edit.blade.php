@extends('backend.master')

@section('content')
  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                       <a href='/admins' class="btn btn-primary">Back</a>
                    </div>
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Update Admin</h3>
                            <div class="table-responsive">
                            <table class="table text-nowrap">
                            <form action="{{route('adm.update',$admin->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                                    name="name"
                                    placeholder="Enter category name"
                                    value="{{$admin->name}}"
                                     required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Email</label>
                                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" 
                                    name="email"
                                    placeholder="Enter admin email"
                                    value="{{$admin->email}}"
                                     required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Password</label>
                                    <input type="text" class="form-control" id="password" aria-describedby="emailHelp" 
                                    name="password"
                                    placeholder="Change admin password"
                                   
                                     >
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
         
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
@endsection
