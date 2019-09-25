@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('supervisor.index') }}" class="btn btn-primary btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{url('user_images',$supervisor->userimage)}}" alt=""
                                    class="img-responsive img-rounded" width="250" height="250">

                            </div>
                            <div class="col-md-7">
                                <p>
                                    <h2>{{$supervisor->title.' '.$supervisor->lastname.' '.$supervisor->firstname}}</h2>
                                </p>
                                <hr>
                                <div>Staff Number : {{$supervisor->identitynumber}} </div>
                                <div>Gender : {{$supervisor->gender}} </div>
                                <div>Email : {{$supervisor->email}} </div>
                                <div>Phone : {{$supervisor->phone}}</div>
                                <div>Department : {{$supervisor->department->name.' - '.$supervisor->department->code}}
                                </div>

                                <hr>
                                <div>
                                    <a href="#" class="btn btn-success btn-sm">Assigned Projects</a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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