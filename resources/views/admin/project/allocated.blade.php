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
        
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">


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
                                            {{-- <th>Assigned To</th> --}}

                                            <th>Deallocate</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allocatedprojects as $project)
                                        <tr>
                                            <td>{{$project->title}}</td>

                                           
                                            </td>

                                            <td style="text-align: center">
                                                <form id="delete-form-{{$project->id}}" style="display: none"
                                                    action="{{ route('allocation.destroy',$project->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                            if (confirm('Are you sure you want to Deallocation this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$project->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-ban fa-2x text-danger"></span>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            {{-- <th>Assigned To</th> --}}

                                            <th>Deallocate</th>
                                        </tr>
                                    </tfoot>
                                </table>
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