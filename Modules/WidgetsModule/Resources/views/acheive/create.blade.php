@extends('commonmodule::layouts.master')

@section('title')
  {{ __('widgetsmodule::widgets.acheivepagetitle') }}
@endsection

@section('css')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.acheivepagetitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('widgetsmodule::widgets.acheivepagetitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/widgets/acheive')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              @foreach($activeLang as $lang)
              <li @if($loop->first) class="active" @endif >
                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
              </li>
              @endforeach

            </ul>

            <div class="tab-content">
              @foreach($activeLang as $lang)

              <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                <div class="form-group">
                  {{-- title --}}
                  <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input data-validation="length alphanumeric" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                     name="{{$lang->lang}}[title]" data-validation="alphanumeric" @if ($loop->first) required @endif>
                  </div>
                </div>

                <div class="form-group">
                  {{-- content --}}
                  <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.content')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[content]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              @endforeach

                  <div class="form-group">
                      {{-- Description --}}
                      <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.number')}} ({{$lang->display_lang}}):</label>
                      <div class="col-sm-8">
                          <input data-validation="length alphanumeric" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                                 name="number" data-validation="alphanumeric" required >
                      </div>
                  </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('widgetsmodule::widgets.icon')}}:</label>
          <div class="col-sm-8">
            <input data-validation="required" type="file" autocomplete="off" name="icon">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('/admin-panel/widgets/acheive')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('widgetsmodule::widgets.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
</section>
@endsection

@section('javascript')
<!-- CK Editor -->
<script src="{{asset('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>

@foreach ($activeLang as $lang)
<script>
  $(function () {
    CKEDITOR.replace('editor' + '{{ $lang->id }}');
  });

</script>
@endforeach

@endsection
