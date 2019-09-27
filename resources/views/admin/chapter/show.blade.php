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
            <div class="col-md-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-12">
                                <h2>Chapters</h2>
                                <ul class="list-group">
                                    @forelse ($chapters as $chapt)
                                    <a href="#">
                                        <li class="list-group-item">
                                            {{$chapt->title}}
                                            <span class="badge badge-pill badge-primary">
                                                @if ($chapt['isapproved'] ==1)
                                                Approved
                                                @else
                                                Not Approved
                                                @endif
                                            </span>
                                        </li>

                                    </a>
                                    @empty
                                    <li class="list-group-item alert alert-warning"><strong>No Chapter has been
                                            attached yet!</strong>
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