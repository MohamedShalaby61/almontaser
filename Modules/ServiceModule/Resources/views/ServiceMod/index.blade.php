@extends('commonmodule::layouts.master')

@section('title')
  {{__('servicemodule::service.servicetitle')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
   @endsection

@section('content-header')
<section class="content-header">
  <h1> {{__('servicemodule::service.servicetitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('servicemodule::service.servicetitle')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/servicemodule/service/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('servicemodule::service.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                    @csrf
                    <div class="box-body">
                        <table id="myTable" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th>{{__('servicemodule::service.id')}}</th>
                                    <th>{{__('servicemodule::service.title')}}</th>
                                    <th>{{__('servicemodule::service.category')}}</th>
                                    <th>{{__('servicemodule::service.photo')}}</th>
                                    <th>{{__('servicemodule::service.is_featured')}}</th>
                                    <th>{{__('servicemodule::service.operation')}}</th>
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

@section('javascript') {{-- sweet alert --}}


@include('commonmodule::includes.swal')

<!-- page script -->
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
                "url": "{{ url('admin-panel/servicemodule/service/datatable') }}",
                "type": "GET"
            },
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'service_category', name: 'service_category' },
                { data: 'photo', name: 'photo' },
                { data: 'feature', name: 'feature' },
                { data: 'operation', name: 'delete', orderable: false, searchable: false}

            ],
            'language': {!! yajra_lang() !!}
        });
    });

</script>

@endsection
