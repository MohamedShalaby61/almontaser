@extends('commonmodule::layouts.master')

@section('title')
  {{__('portfoliomodule::portfolio.pagecategtitle')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  @endsection

@section('content-header')
<section class="content-header">
  <h1> {{__('portfoliomodule::portfolio.pagecategtitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
    <!-- Content Here -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('portfoliomodule::portfolio.pagecategtitle')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/portfoliomodule/category/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('portfoliomodule::portfolio.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>{{__('portfoliomodule::portfolio.id')}}</th>
                              <th>{{__('portfoliomodule::portfolio.title')}}</th>
                              <th>{{__('portfoliomodule::portfolio.photo')}}</th>
                              <th>{{__('portfoliomodule::portfolio.operation')}}</th>
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
                "url": "{{ url('admin-panel/portfoliomodule/category/datatable') }}",
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
