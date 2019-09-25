@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        

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
                                    <td>
                                        <a href="{{ route('student.show',$student->id) }}"><span
                                                class="fa fa-eye fa-2x text-primary"></span></a>
                                    </td>
                                    <td><a href="{{ route('student.edit',$student->id) }}"><span
                                        class="fa fa-edit fa-2x text-primary"></span></a></td>

                                    <td>
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