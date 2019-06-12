@extends('commonmodule::layouts.master')

@section('title')
    {{ trans('adminmodule::admin.admins') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
    <section class="content-header">
        <h1> {{ trans('adminmodule::admin.admins') }} </h1>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ trans('adminmodule::admin.admins') }}</h3>
                        {{-- Add New--}}
                        <a href="{{url('admin-panel/admins/create')}}" type="button" class="btn btn-success pull-right">
                            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{ trans('adminmodule::admin.add_new') }}
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="adminsTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ trans('adminmodule::admin.name') }}</th>
                                <th>{{ trans('adminmodule::admin.email') }}</th>
                                <th>{{ trans('adminmodule::admin.op') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td> {{$admin->id}} </td>

                                    <td> {{$admin->name}} </td>

                                    <td> {{$admin->email}} </td>

                                    <td>
                                        {{-- Edit --}}
                                        <a title="Edit" href="{{url('admin-panel/admins/' . $admin->id . '/edit')}}" type="button" class="btn btn-primary">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        {{-- Delete --}}
                                        <form class="inline" action="{{url('admin-panel/admins/' . $admin->id)}}" method="POST">
                                            {{ method_field('DELETE') }} {!! csrf_field() !!}
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Admin Data?')" type="button"
                                                    class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
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

<!-- DataTables -->
<script src="{{asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#adminsTable').DataTable({
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