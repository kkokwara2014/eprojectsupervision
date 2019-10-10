@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student Detail
            <small>Student Information</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
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
                    <div class="col-md-4">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center">
                                        <img style="display: block;
                                        margin-left: auto;
                                        margin-right: auto;
                                        width: 50%;" src="{{url('user_images',$student->userimage)}}" alt=""
                                            class="img-responsive img-rounded" width="180" height="180">

                                        <p>
                                            <h3>{{$student->title.' '.$student->lastname.' '.$student->firstname}}</h3>
                                        </p>
                                        <hr>
                                        <div>Matric. Number : {{$student->identitynumber}} </div>
                                        <div>Gender : {{$student->gender}} </div>
                                        <div>Email : {{$student->email}} </div>
                                        <div>Phone : {{$student->phone}}</div>
                                        <div>Department :
                                            {{$student->department->name.' - '.$student->department->code}}
                                        </div>
                                        <hr>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="col-md-8">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Project Topic</h3>

                                        @forelse ($student_project as $studproj)
                                        <h4>{{$studproj->title}}</h4>
                                        @empty
                                        <p style="background-color: dodgerblue" class="badge badge-info"><strong>No
                                                Project topic has been
                                                registered yet!</strong></p>
                                        @endforelse

                                        {{-- <h4>Supervisor:
                                            @forelse ($project_supervisor as $projSup)
                                            <span style="color:dodgerblue; font-weight: bolder;">
                                                {{$projSup->user->title.' '.$projSup->user->lastname.', '.$projSup->user->firstname}}
                                            </span>
                                            @empty
                                            <span style="background-color: firebrick"
                                                class="badge badge-info">Supervisor not assigned yet!</span>
                                            @endforelse

                                        </h4> --}}


                                        <hr>
                                        <h3>Chapters</h3>
                                        <ul class="list-group">

                                            @forelse ($project_chapters as $chapt)
                                            <a href="{{route('comment.create')}}">
                                                <li class="list-group-item">
                                                    @if ($chapt['isapproved']==1)
                                                    <span style="background-color: seagreen"
                                                        class="badge pull-right">Approved</span>
                                                    @else
                                                    <span style="background-color:crimson" class="badge pull-right">Not
                                                        Approved</span>
                                                    @endif
                                                    {{$chapt['title']}}

                                                </li>
                                            </a>
                                            @empty
                                            <p style="background-color: dodgerblue" class="badge badge-info"><strong>No
                                                    Chapter yet!</strong></p>
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