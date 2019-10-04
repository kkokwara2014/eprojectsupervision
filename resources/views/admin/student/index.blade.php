@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Students
            <small>All Students</small>
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
                {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <span class="fa fa-plus"></span> Add Supervisor
        </button> --}}
                {{-- <br><br> --}}

                <div class="row">
                    <div class="col-md-12">

                        {{-- for messages --}}
                        {{-- @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                        @endif --}}

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-responsive table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Surname</th>
                                            <th>First Name</th>
                                            <th>Identity Number</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>View Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Edit</th>
                                            <th>Delete</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)

                                        <tr>

                                            <td>{{$student->lastname}}</td>
                                            <td>{{$student->firstname}}</td>
                                            <td>{{$student->identitynumber}}</td>

                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td style="text-align: center">
                                                <a href="{{ route('student.show',$student->id) }}"><span
                                                        class="fa fa-eye fa-2x text-primary"></span></a>
                                            </td>
                                            <td>
                                                @if ($student->isactive==1)
                                                <span class="fa fa-check-circle fa-2x text-success"></span>
                                                @else
                                                <span class="fa fa-close fa-2x text-danger"></span>
                                                @endif

                                            </td>
                                            <td>
                                                @if ($student->isactive==1)

                                                <form id="delete-form-{{$student->id}}" style="display: none"
                                                    action="{{ route('student.deactivate',$student->id) }}" method="post">
                                                    {{ csrf_field() }}

                                                </form>
                                                <a href="" onclick="
                                                                            if (confirm('Are you sure you want to Deactivate this?')) {
                                                                                event.preventDefault();
                                                                            document.getElementById('delete-form-{{$student->id}}').submit();
                                                                            } else {
                                                                                event.preventDefault();
                                                                            }
                                                                        "
                                                    class="btn btn-danger btn-sm btn-block">Deactivate
                                                </a>
                                                @else

                                                <form id="delete-form-{{$student->id}}" style="display: none"
                                                    action="{{ route('student.activate',$student->id) }}" method="post">
                                                    {{ csrf_field() }}

                                                </form>
                                                <a href="" onclick="
                                                                            if (confirm('Are you sure you want to Activate this?')) {
                                                                                event.preventDefault();
                                                                            document.getElementById('delete-form-{{$student->id}}').submit();
                                                                            } else {
                                                                                event.preventDefault();
                                                                            }
                                                                        " class="btn btn-success btn-sm btn-block">
                                                    Activate
                                                </a>

                                                @endif
                                            </td>

                                            <td style="text-align: center"><a
                                                    href="{{ route('student.edit',$student->id) }}"><span
                                                        class="fa fa-edit fa-2x text-primary"></span></a></td>

                                            <td style="text-align: center">
                                                <form id="delete-form-{{$student->id}}" style="display: none"
                                                    action="{{ route('student.destroy',$student->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                                if (confirm('Are you sure you want to delete this?')) {
                                                                    event.preventDefault();
                                                                document.getElementById('delete-form-{{$student->id}}').submit();
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
                                            <th>Surname</th>
                                            <th>First Name</th>
                                            <th>Identity Number</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>View Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
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