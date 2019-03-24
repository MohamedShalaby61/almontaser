@extends('commonmodule::layouts.master')

@section('title')
  {{trans('portfoliomodule::portfolio.pagetitle')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  @endsection

@section('content-header')
<section class="content-header">
  <h1> {{trans('portfoliomodule::portfolio.pagetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('portfoliomodule::portfolio.pagetitle')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/portfoliomodule/project/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{trans('portfoliomodule::portfolio.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                          <th>{{trans('portfoliomodule::portfolio.id')}}</th>
                          <th>{{trans('portfoliomodule::portfolio.title')}}</th>
                          <th>{{trans('portfoliomodule::portfolio.photo')}}</th>
                          <th>{{trans('portfoliomodule::portfolio.category')}}</th>
                          <th>{{trans('portfoliomodule::portfolio.operation')}}</th>
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
                "url": "{{ url('admin-panel/portfoliomodule/project/datatable') }}",
                "type": "GET"
            },
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'photo', name: 'photo' },
                { data: 'portfolio_category', name: 'portfolio_category.title' },
                { data: 'operation', name: 'operation', orderable: false, searchable: false}

            ]
        });
    })

</script>
@endsection
