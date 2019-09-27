@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div>
            <a href="{{ route('supervisor.index') }}" class="btn btn-primary btn-sm">
                Back</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-7">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-12">
                                @forelse ($discussions as $comt)
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <div></div>
                                                <div>{{$comt->comments->comment}}</div>
                                                <div style="text-align: right">
                                                    <small><span class="fa fa-clock-o"></span>
                                                        {{$comt->comments->commenttime}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <li class="list-group-item alert alert-warning"><strong>No Comments yet!</strong>
                                </li>
                                @endforelse

                                <form action="{{route('comment.store')}}" method="post">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <select name="chapter_id" class="form-control">
                                            <option selected="disabled">Select Chapter</option>
                                            @foreach ($chapters as $chapt)
                                            <option value="{{$chapt->id}}">{{$chapt->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="2" name="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Send</button>
                                </form>

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