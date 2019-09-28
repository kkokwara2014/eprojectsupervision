@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Project Chapter
            <small>All Chapters</small>
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
    <section class="col-lg-11 connectedSortable">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Chapter
        </button>
    <a href="{{route('project.index')}}" class="btn btn-success"><span class="fa fa-eye"></span> Project</a>
        <br><br>

        <div class="row">
            <div class="col-md-10">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Download</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chapters as $chapter)
                                <tr>
                                    <td>{{$chapter->title}}</td>
                                    <td>{{$chapter->created_at->diffForHumans()}}</td>
                                    <td><a href="#" class="btn btn-success btn-sm"><span class="fa fa-download"></span> Download</a></td>

                                    <td><a href="{{ route('chapter.edit',$chapter->id) }}"><span
                                                class="fa fa-edit fa-2x text-primary"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{$chapter->id}}" style="display: none"
                                            action="{{ route('chapter.destroy',$chapter->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$chapter->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Download</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>


        {{-- Data input modal area --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">

                <form action="{{ route('chapter.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Chapter</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Chapter Title <b style="color: red;">*</b> </label>
                                <select name="title" class="form-control">
                                    <option selected="disabled">Select Title</option>
                                    <option>Chapter One</option>
                                    <option>Chapter Two</option>
                                    <option>Chapter Three</option>
                                    <option>Chapter Four</option>
                                    <option>Chapter Five</option>
                                    <option>Chapter Six</option>
                                    <option>References</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Project <b style="color: red;">*</b> </label>
                                <select name="project_id" class="form-control">
                                    <option selected="disabled">Select Project</option>
                                    @foreach ($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Upload file <b style="color: red;">*</b> </label>
                                <input type="file" name="filename">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"> Save</button>
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