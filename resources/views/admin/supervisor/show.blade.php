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
            <div class="col-md-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url('user_images',$supervisor->userimage)}}" alt=""
                                    class="img-responsive img-rounded" width="250" height="250">

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
                            </div>
                            <div class="col-md-8">
                                <h2>Allocated Projects</h2>
                                <ul class="list-group">
                                    @forelse ($supervisor_projects as $sup_proj)
                                    <a href="#">
                                        <li class="list-group-item">{{$sup_proj->project->title}}</li>
                                    </a>

                                    @empty
                                    <li class="list-group-item alert alert-warning"><strong>No Project has been
                                            allocated yet!</strong>
                                    </li>

                                    @endforelse


                                </ul>


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