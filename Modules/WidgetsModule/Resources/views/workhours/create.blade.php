@extends('commonmodule::layouts.master')
@section('title') {{__('widgetsmodule::widgets.teampagetitle')}}
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.teampagetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{__('widgetsmodule::widgets.teampagetitle')}}</h3>
        </div>
        @if (count($errors) > 0) @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
        @endforeach @endif
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{url('admin-panel/widgets/hours')}}" method="POST">
            {{ csrf_field() }}

            <div class="box-body">

                {{-- Day --}}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">{{__('widgetsmodule::widgets.day')}}:</label>
                    <div class="col-sm-8">
                        <input type="text" autocomplete="off" class="form-control" name="day" required>
                    </div>
                </div>

                {{-- From --}}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">{{__('widgetsmodule::widgets.from')}}:</label>
                    <div class="col-sm-8">
                        <input type="text" autocomplete="off" class="form-control" name="from" required>
                    </div>
                </div>

                {{-- To --}}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">{{__('widgetsmodule::widgets.to')}}:</label>
                    <div class="col-sm-8">
                        <input type="text" autocomplete="off" class="form-control" name="to" required>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/admin-panel/widgets/hours')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
                <button type="submit" class="btn btn-primary pull-right">{{__('widgetsmodule::widgets.submit')}} &nbsp; <i class="fa fa-save"></i></button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</section>
@endsection
