@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
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
                                <div> </div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-5">
                                <h4>Chapters</h4>
                                <ul class="list-group">
                                    @forelse ($project_chapters->chapters as $proj_chapt)
                                    {{-- <a href="{{route('chapter.show',$proj_chapt->id)}}"> --}}
                                    <li class="list-group-item">
                                        <span class="badge badge-pill pull-right">
                                            @if ($proj_chapt->isapproved==1)
                                                Approved
                                            @else
                                                Not Approved
                                            @endif
                                            
                                        </span>
                                        {{$proj_chapt->title}}

                                    </li>
                                    {{-- </a> --}}
                                    @empty
                                    <li class="list-group-item alert alert-warning"><strong>No Chapter yet!</strong>
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