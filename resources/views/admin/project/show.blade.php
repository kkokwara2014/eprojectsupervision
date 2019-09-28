@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Project Detail
            <small>Project Information</small>
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
                    <a href="{{ route('project.index') }}" class="btn btn-primary btn-sm">
                        Back</a>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p>
                                            <h4>{{$project_chapters->title}}</h4>
                                        </p>
                                        <hr>
                                        <div>By:
                                            <strong>{{strtoupper($project_chapters->user->lastname).', '.$project_chapters->user->firstname}}</strong>
                                        </div>
                                        <div>Matric. Number:
                                            <strong>{{$project_chapters->user->identitynumber}}</strong></div>
                                        <div>Class Level: {{$project_chapters->classlevel->levelname}}</div>
                                        <div>Case Study: {{$project_chapters->casestudy}}</div>
                                        <div>Project Year: {{$project_chapters->projyear}}</div>
                                        
                                        <div>Supervisor: </div>

                                        <hr>
                                    </div>
                                    <div class="col-md-5">
                                        <h4>Chapters</h4>
                                        <ul class="list-group">
                                            @forelse ($project_chapters->chapters as $proj_chapt)
                                            {{-- <a href="{{route('chapter.show',$proj_chapt->id)}}"> --}}
                                            <li class="list-group-item">

                                                @if ($proj_chapt->isapproved==1)
                                                <span style="background-color: seagreen"
                                                    class="badge pull-right">Approved</span>
                                                @else
                                                <span style="background-color:crimson" class="badge pull-right">Not
                                                    Approved</span>
                                                @endif
                                                {{$proj_chapt->title}}

                                            </li>
                                            {{-- </a> --}}
                                            @empty
                                            <li class="list-group-item alert alert-warning"><strong>No Chapter
                                                    yet!</strong>
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