@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('projectcoordinator.index') }}" class="btn btn-success">
           <span class="fa fa-eye"></span> All Project Coordinators
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-7">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('projectcoordinator.update',$projectcoordinators->id) }}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div>
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" name="lastname" value="{{$projectcoordinators->lastname}}">
                            </div>
                            <div>
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="firstname" value="{{$projectcoordinators->firstname}}">
                            </div>
                            <div>
                                <label for="name">Othernames</label>
                                <input type="text" class="form-control" name="othername" value="{{$projectcoordinators->othername}}">
                            </div>
                            <div>
                                <label for="name">Identity Number</label>
                                <input type="text" class="form-control" name="identitynumber" value="{{$projectcoordinators->identitynumber}}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('supervisor.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
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