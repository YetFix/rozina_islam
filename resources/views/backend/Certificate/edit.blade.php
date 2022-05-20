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
                       <a href='/certificates' class="btn btn-primary mb-3">Back</a>
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
                            <h3 class="box-title">Edit Certificate</h3>
                            <div class="table-responsive">
                            <table class="table text-nowrap">
                            <form action="{{route('ct.update',$certificate->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Certificate Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                                    name="name"
                                    placeholder="Enter Certificate name"
                                    value="{{$certificate->title}}"
                                     required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Certificate Description</label>
                                        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" >{{$certificate->desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="certificate">Certificate Image</label><br/>
                                    <p>* For Best Quality image size should be 1200X695 </p>
                                    <input type="file" class="form-control-file" id="certificate"
                                     name="certificate"> 
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
