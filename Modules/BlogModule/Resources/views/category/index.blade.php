@extends('commonmodule::layouts.master')

@section('title')
    {{trans('blog::category.index')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection


@section('content-header')
    <section class="content-header">
        <h1>
            {{trans('blog::category.index')}}
        </h1>

    </section>
@endsection


@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('blog::category.index')}}</h3>
                    <a href="{{url('admin-panel/blog-categories/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{trans('blog::category.createnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{trans('blog::category.id')}}</th>
                                <th>{{trans('blog::category.title')}}</th>
                                <th>{{trans('blog::category.pic')}}</th>
                                <th>{{trans('blog::category.op')}}</th>
                            </tr>
                        </thead>
                        <tbody>

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


@section('javascript')

    @include('commonmodule::includes.swal')

    <!-- DataTables -->
    <script src="{{asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {

            $('#myTable').DataTable({
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ url('admin-panel/blog-categories/datatable') }}",
                    "type": "GET"
                },
                "columns": [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'photo', name: 'photo' },
                    { data: 'operation', name: 'operation', orderable: false, searchable: false}

                ]
            });
        })

    </script>

@endsection
