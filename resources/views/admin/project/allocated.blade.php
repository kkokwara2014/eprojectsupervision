@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Allocated Projects
            <small>All assigned Projects</small>
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
                <p>
                    <a href="{{route('project.index')}}" class="btn btn-success"><span class="fa fa-eye"></span>
                        Unallocated Projects</a>
                </p>
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

                                            <th>Deallocate</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                        <tr>
                                            <td>{{$project->title}}</td>

                                            <td>{{$project->user->lastname.', '.$project->user->firstname.' - '.$project->user->identitynumber}}
                                            </td>

                                            <td>
                                                <form id="delete-form-{{$project->id}}" style="display: none"
                                                    action="{{ route('allocation.destroy',$project->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                                if (confirm('Are you sure you want to deallocate this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('delete-form-{{$project->id}}').submit();
                                                                } else {
                                                                    event.preventDefault();
                                                                }
                                                            " class="btn btn-warning btn-sm btn-block"><span
                                                        class="fa fa-retweet fa-2x"></span>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>By</th>

                                            <th>Deallocate</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @else
                                <p class="alert alert-info">No Allocated Projects yet!</p>
                                @endif

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