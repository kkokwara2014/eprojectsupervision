@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Project Coordinator Details
            <small>Project Coordinator Information</small>
          </h1>
          {{-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol> --}}
        </section>
      
        <!-- Main content -->
        <section class="content">
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('projectcoordinator.index') }}" class="btn btn-primary btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center">
                                <img style="display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 50%;" src="{{url('user_images',$projectcoordinator->userimage)}}" alt=""
                                    class="img-responsive img-rounded" width="180" height="180">

                                <p>
                                    <h3>{{$projectcoordinator->title.' '.$projectcoordinator->lastname.' '.$projectcoordinator->firstname}}</h3>
                                </p>
                                <hr>
                                <div>Staff Number : {{$projectcoordinator->identitynumber}} </div>
                                <div>Gender : {{$projectcoordinator->gender}} </div>
                                <div>Email : {{$projectcoordinator->email}} </div>
                                <div>Phone : {{$projectcoordinator->phone}}</div>
                                <div>Department : {{$projectcoordinator->department->name.' - '.$projectcoordinator->department->code}}
                                </div>
                                <hr>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            
        </div>
</div>



</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
{{-- <section class="col-lg-5 connectedSortable"> --}}


{{-- </section> --}}
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection