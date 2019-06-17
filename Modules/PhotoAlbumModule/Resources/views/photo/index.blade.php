@extends('commonmodule::layouts.master')

@section('title')
    {{__('photoalbummodule::photocateg.Photopage')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
    <section class="content-header">
        <h1>  {{__('photoalbummodule::photocateg.Photopage')}} </h1>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"> {{trans('photoalbummodule::photocateg.Photopage')}}</h3>
                        {{-- Add New --}}
                        <a href="{{url('admin-panel/photos/photo/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;  {{__('photoalbummodule::photocateg.addnew')}}</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="categoriesIndex" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> {{__('photoalbummodule::photocateg.id')}}</th>
                                <th> {{__('photoalbummodule::photocateg.title')}}</th>
                                <th>{{__('photoalbummodule::photocateg.photo')}}</th>
                                <th> {{__('photoalbummodule::photocateg.operation')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($photos as $photo)
                                <tr>
                                    <td> {{$photo->id}} </td>

                                    <td> {{$photo->title}} </td>

                                    <td>
                                        @if($photo->photo)
                                            <img src="{{asset('public/images/photo/' . $photo->photo)}}" height="70" width="100">
                                        @else
                                            "<strong>No Photo</strong>"
                                        @endif
                                    </td>

                                    <td>
                                        {{-- Edit --}}
                                        <a title="Edit" href="{{url('admin-panel/photos/photo/' . $photo->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        {{-- Delete --}}
                                        <form class="inline" action="{{url('admin-panel/photos/photo/' . $photo->id)}}" method="POST">
                                            {{ method_field('DELETE') }} {!! csrf_field() !!}
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                                                    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    @section('javascript')

    @include('commonmodule::includes.swal')

            <!-- DataTables -->
    <script src="{{asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#categoriesIndex').DataTable({
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





