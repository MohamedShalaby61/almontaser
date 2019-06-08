@extends('commonmodule::layouts.master')

@section('title')
 {{__('commonmodule::main.lang')}}
@endsection

@section('css')
{{-- Metro CSS --}}
<link rel="stylesheet" href="{{asset('assets/admin/treeview.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('commonmodule::main.lang')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('commonmodule::main.control_lang')}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form class="form-horizontal" action="{{url('admin-panel/commonmodule/activate-lang')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- Link --}}
                                    <div class="form-group">
                                            <label class="control-label col-sm-2" for="title">{{ __('commonmodule::main.chooseLang') }} :</label>

                                            <div class="col-lg-3">
                                                @foreach ($langs as $lang)
                                                    <strong><label class="control-label col-sm-2" for="lang">{{ $lang->display_lang }}({{ $lang->lang }})</label></strong>
                                                    <br>
                                                    <br>
                                                    <label><input type="radio" name="{{ $lang->lang }}Activate" value="1" @if($lang->lang == 'ar') checked @endif> {{ __('commonmodule::main.activate') }}</label>
                                                    &nbsp;
                                                    <label><input type="radio" name="{{ $lang->lang }}Activate" value="0" @if($lang->lang == 'en' ) checked @endif> {{ __('commonmodule::main.deactivate') }}</label>
                                                    <hr>
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                           <div class="box-footer">
                               <a href="{{url('/admin-panel')}}" type="button" class="btn btn-default">{{trans('commonmodule::main.cancel')}} &nbsp; <i class="fa fa-remove"
                                                                                                                               aria-hidden="true"></i></a>
                               <button type="submit" class="btn btn-primary pull-right">{{trans('commonmodule::main.submit')}}
                                                           &nbsp; <i class="fa fa-save"></i></button>
                           </div>
                           <!-- /.box-footer -->
                        </div>
                    </form>
                </div>
                </div>
            </div>
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
{{-- Treeview --}}
<script src="{{asset('assets/admin/metro.js')}}"></script>
@endsection
