@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Unallocated Projects
            <small>All Unassigned Projects</small>
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
                @if (Auth::user()->role->id==4)

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    <span class="fa fa-plus"></span> Add Project
                </button>

                <a href="{{route('chapter.index')}}" class="btn btn-success"><span class="fa fa-eye"></span>
                    Chapters
                </a>
                @endif


                @if (Auth::user()->role->id==2)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default-assign">
                    <span class="fa fa-exchange"></span> Assign Project
                </button>
                <a href="{{route('project.allocated')}}" class="btn btn-success"><span class="fa fa-eye"></span>
                    Allocated Projects</a>
                @endif

                <br><br>

                <div class="row">
                    <div class="col-md-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                @if (count($projects)>0)

                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>By</th>
                                            <th>Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                        @if ($project->user->id==Auth::user()->id||Auth::user()->role->id==1||Auth::user()->role->id==2)
                                        <tr>
                                            <td>{{$project->title}}</td>
                                            <td>{{$project->user->lastname.', '.$project->user->firstname.' - '.$project->user->identitynumber}}
                                            </td>
                                            <td style="text-align: center">
                                                <a href="{{ route('project.show',$project->id) }}"><span
                                                        class="fa fa-eye fa-2x text-primary"></span></a>
                                            </td>

                                            <td style="text-align: center">
                                                @if ($project->user->id==Auth::user()->id)
                                                <a href="{{ route('project.edit',$project->id) }}"><span
                                                        class="fa fa-edit fa-2x text-primary"></span>
                                                </a>
                                                @endif
                                            </td>

                                            <td style="text-align: center">
                                                <form id="delete-form-{{$project->id}}" style="display: none"
                                                    action="{{ route('project.destroy',$project->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$project->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                                </a>

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>By</th>
                                            <th>Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                @else
                                <p class="alert alert-info">No Unallocated Projects yet!</p>
                                @endif
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>


                {{-- Data input modal area --}}
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">

                        <form action="{{ route('project.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add Project</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Project Title <b style="color: red;">*</b></label>
                                        <input type="text" class="form-control" name="title" placeholder="Project Title"
                                            autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Case Study</label>
                                        <input type="text" class="form-control" name="casestudy"
                                            placeholder="Project Case Study">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Year</label>
                                        <input type="text" class="form-control" id="datepicker" name="projyear"
                                            placeholder="Project year">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Level</label>
                                        <select name="classlevel_id" class="form-control">
                                            <option selected="disabled">Select Level</option>
                                            @foreach ($classlevels as $classlevel)
                                            <option value="{{$classlevel->id}}">{{$classlevel->levelname}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->

                        </form>
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- /.modal -->

                {{-- Data input modal area for project allocation --}}
                <div class="modal fade" id="modal-default-assign">
                    <div class="modal-dialog">

                        <form action="{{ route('allocation.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"><span class="fa fa-exchange"></span> Assign Projects To
                                        Supervisor</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Supervisor <b style="color: red;">*</b> </label>

                                        <select name="supervisor_id" id="" class="form-control">
                                            <option selected="disabled">Select Supervisor</option>
                                            @foreach ($supervisors as $supervisor)
                                            <option value="{{$supervisor->id}}">
                                                {{$supervisor->title.' '.$supervisor->lastname.', '.$supervisor->firstname}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Project <b style="color: red;">*</b> </label>

                                        <select class="form-control select2" multiple="multiple"
                                            data-placeholder="Select Project" style="width: 100%;" name="project_id[]">

                                            @foreach ($projforassign as $pfa)
                                            <option value="{{$pfa->id}}">
                                                {{$pfa->title.' - '.$pfa->user->lastname.', '.$pfa->user->firstname.' - '.$pfa->user->identitynumber}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Assign</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->

                        </form>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

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