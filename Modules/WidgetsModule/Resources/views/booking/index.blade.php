@extends('commonmodule::layouts.master')

@section('title')
  {{__('widgetsmodule::widgets.bookingpagetitle')}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.bookingpagetitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('widgetsmodule::widgets.bookingpagetitle')}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="BookingTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('widgetsmodule::widgets.id')}}</th>
                                <th>{{__('widgetsmodule::widgets.name')}}</th>
                                <th>{{__('widgetsmodule::widgets.phone')}}</th>
                                <th>{{__('widgetsmodule::widgets.message')}}</th>
                                <th>{{__('widgetsmodule::widgets.operations')}}</th>
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

        $('#BookingTable').DataTable({
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ url('admin-panel/widgets/booking/datatable') }}",
                "type": "GET"
            },
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'message', name: 'message' },
                { data: 'operations', name: 'operations' },
            ],
            'language': {!! yajra_lang() !!}
        });
    })

</script>
@endsection



