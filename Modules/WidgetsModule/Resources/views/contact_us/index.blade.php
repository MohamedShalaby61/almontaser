@extends('commonmodule::layouts.master')

@section('title')
  {{__('widgetsmodule::widgets.contactpagetitle')}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.contactpagetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('widgetsmodule::widgets.contactpagetitle')}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="TeamIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('widgetsmodule::widgets.id')}}</th>
                                <th>{{__('widgetsmodule::widgets.name')}}</th>
                                <th>{{__('widgetsmodule::widgets.email')}}</th>
                                <th>{{__('widgetsmodule::widgets.phone')}}</th>
                                <th>{{__('widgetsmodule::widgets.message')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                            <tr>
                              <td> {{$item->id}} </td>

                              <td> {{$item->name}} </td>

                              <td> {{$item->email}} </td>

                              <td>{{$item->phone}}</td>

                              <td> <a href="{{url('/widgets/contact_us')}}/{{$item->id}}">{!!substr($item->message, 0, 10)!!}...</a> </td>
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
        $('#TeamIndex').DataTable({
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



