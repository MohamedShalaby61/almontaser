@extends('commonmodule::layouts.master')

@section('title')
    {{trans('productmodule::category.index')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
 @endsection


@section('content-header')
    <section class="content-header">
        <h1>
            {{trans('productmodule::category.index')}}
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
                    <h3 class="box-title">{{trans('productmodule::category.index')}}</h3>
                    <a href="{{url('admin-panel/product-categories/create')}}" type="button" class="btn btn-success pull-right">
                        <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{trans('productmodule::category.createnew')}}
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{trans('productmodule::category.id')}}</th>
                                <th>{{trans('productmodule::category.title')}}</th>
                                <th>{{trans('productmodule::category.pic')}}</th>
                                <th>{{trans('productmodule::category.parent')}}</th>
                                <th>{{trans('productmodule::category.op')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--@foreach ($categs as $item)--}}
                                {{--<tr>--}}
                                    {{--<td> {{$item->id}} </td>--}}
                                    {{--<td> {{$item->title}} </td>--}}
                                    {{--<td>--}}
                                        {{--@if ($item->photo)--}}
                                            {{--<img src="{{asset('public/images/category/' . $item->photo)}}" height="70" width="100">--}}
                                        {{--@else--}}
                                            {{--<p>No Photo</p>--}}
                                        {{--@endif--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--@if($item->parent)--}}
                                            {{--{{$item->parent->title}}--}}
                                        {{--@else--}}
                                            {{--Parent Category--}}
                                        {{--@endif--}}
                                        {{--</td>--}}
                                    {{--<td> --}}{{-- view --}}
                                        {{--<a title="View" href="{{url('admin-panel/product-categories/' . $item->id)}}" type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
                                            {{-- Edit --}}
                                        {{--@role('admin|superadmin')--}}
                                            {{--<a--}}
                                            {{--@if($item->title == 'Root')--}}
                                                {{--onclick="return false;"--}}
                                                {{--title="You can't Edit Parent Category"--}}
                                            {{--@elseif ($item->title =='القسم الرئيسي')--}}
                                                {{--onclick="return false;"--}}
                                                {{--title="You can't Edit Parent Category"--}}
                                            {{--@endif--}}
                                            {{--title="Edit" href="{{url('admin-panel/product-categories/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>--}}
                                        {{--@endrole--}}
                                            {{-- Delete --}}
                                        {{--@role('superadmin')--}}
                                            {{--<form class="inline" action="{{url('admin-panel/delete/' . $item->id)}}" method="POST">--}}
                                                {{--{{ method_field('DELETE') }} {!! csrf_field() !!}--}}
                                                {{--<button--}}
                                                {{--@if($item->title == 'Root')--}}
                                                    {{--disabled--}}
                                                    {{--title="You can't delete Parent Category"--}}
                                                {{--@elseif ($item->title =='القسم الرئيسي')--}}
                                                    {{--disabled--}}
                                                    {{--title="You can't delete Parent Category"--}}
                                                {{--@endif--}}
                                                {{--title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Category?')" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>--}}
                                            {{--</form>--}}
                                        {{--@endrole--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
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
                    "url": "{{ url('admin-panel/product-categories/datatable') }}",
                    "type": "GET"
                },
                "columns": [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'photo', name: 'photo' },
                    { data: 'parent', name: 'parent.title' },
                    { data: 'operation', name: 'operation', orderable: false, searchable: false}

                ],
                'language': {!! yajra_lang() !!}
            });
        })

    </script>

@endsection
