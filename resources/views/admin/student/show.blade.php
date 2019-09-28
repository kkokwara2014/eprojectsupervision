@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">
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
                                <img src="{{url('user_images',$student->userimage)}}" alt=""
                                    class="img-responsive img-rounded" width="180" height="180">

                                <p>
                                    <h2>{{$student->title.' '.$student->lastname.' '.$student->firstname}}</h2>
                                </p>
                                <hr>
                                <div>Identity Number : {{$student->identitynumber}} </div>
                                <div>Gender : {{$student->gender}} </div>
                                <div>Email : {{$student->email}} </div>
                                <div>Phone : {{$student->phone}}</div>
                                <div>Department : {{$student->department->name.' - '.$student->department->code}}
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-8">
                                <h3>Project Topic</h3>

                                @if (!empty($student_project))
                                <h4>{{$student_project->title}}</h4>
                                @else
                                <h4 class="alert alert-warning"><strong>No Project topic has been
                                        registered yet!</strong></h4>
                                @endif

                                <hr>
                                <h3>Chapters</h3>
                                <ul class="list-group">
                                    @forelse ($project_chapters as $chapt)
                                    <a href="{{route('comment.show',$chapt->id)}}">
                                        <li class="list-group-item">
                                            @if ($chapt->isapproved==1)
                                            <span style="background-color: seagreen"
                                                class="badge pull-right">Approved</span>
                                            @else
                                            <span style="background-color:crimson" class="badge pull-right">Not
                                                Approved</span>
                                            @endif
                                            {{$chapt->title}}
                                            
                                        </li>

                                    </a>
                                    @empty
                                    <li class="list-group-item alert alert-warning"><strong>No Chapter has been
                                            uploaded yet!</strong>
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