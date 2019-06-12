@extends('commonmodule::layouts.master')

@section('title')
    {{__('VideoModule::vidcateg.vidpage')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
   @endsection

@section('content-header')
    <section class="content-header">
        <h1> {{__('VideoModule::vidcateg.vidpage')}} </h1>

    </section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('VideoModule::vidcateg.vidpage')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/videos/video/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add New</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="vidCategoriesIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('VideoModule::vidcateg.id')}}</th>
                                <th>{{__('VideoModule::vidcateg.title')}}</th>
                                <th>{{__('VideoModule::vidcateg.link')}}</th>
                                <th>{{__('VideoModule::vidcateg.operation')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vids as $item)
                            <tr>
                                <td> {{$item->id}} </td>

                                <td> {{$item->title}} </td>

                                <td> {{$item->link}} </td>

                                <td>
                                    {{-- Edit --}}
                                    @role('superadmin|admin')
                                    <a title="Edit" href="{{url('admin-panel/videos/video/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    @endrole

                                    {{-- Delete --}}
                                    @role('superadmin')
                                    <form class="inline" action="{{url('admin-panel/videos/video/' . $item->id)}}" method="POST">
                                        {{ method_field('DELETE') }} {!! csrf_field() !!}
                                        <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                                            class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                    @endrole
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection

@section('javascript') {{-- sweet alert --}}

@include('commonmodule::includes.swal')

<!-- page script -->
<!-- DataTables -->
<script src="{{asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#vidCategoriesIndex').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'language': {!! yajra_lang() !!}
        });
    })

</script>
@endsection
