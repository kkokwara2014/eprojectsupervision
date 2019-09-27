@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-11 connectedSortable">


        <div class="row">
            <div class="col-md-8">
                <a href="{{route('comment.create')}}" class="btn btn-primary"><span class="fa fa-comment-o"></span>
                    Begin Commenting</a>
                <br><br>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        @forelse ($discussions as $comt)
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{url('user_images',$comt->user->userimage)}}" class="img-circle" width="40" height="40">
                                    </div>
                                    <div class="col-md-10">
                                        <div></div>
                                        <div>{{$comt->comment}}</div>
                                        <div style="text-align: right">
                                            <small><span class="fa fa-clock-o"></span>
                                                {{$comt->commenttime}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <li class="list-group-item alert alert-warning"><strong>No Comments yet!</strong>
                        </li>
                        @endforelse
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