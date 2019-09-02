@extends('commonmodule::layouts.master')

@section('title')
  {{__('servicemodule::service.categtitle')}}
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('servicemodule::service.categtitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('servicemodule::service.categtitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/servicemodule/category')}}/{{$category->id}}" method="POST" enctype="multipart/form-data">
      {{method_field('PUT')}}
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              @foreach($activeLang as $lang)
              <li @if($loop->first) class="active" @endif>
                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
              </li>
              @endforeach

            </ul>

            <div class="tab-content">
              @foreach($activeLang as $lang)

              <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                <div class="form-group">
                  {{-- title --}}
                  <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{ ValueOf($category,$lang,'title') }}" name="{{$lang->lang}}[title]" @if($loop->first) required @endif>
                  </div>
                </div>

                <div class="form-group">
                  {{-- Description --}}
                  <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.desc')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      {{ ValueOf($category,$lang,'description') }}
                    </textarea>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- /.tab-content -->
          </div>
            <div class="form-group">
                <label class="col-md-6">@lang('servicemodule::service.photo')</label>
                <input class="col-md-6" type="file"  name="photo" >
                <img style="width: 100px;height: 100px" src="{{ url('images/service/'.$category->photo) }}">
            </div>

            <div class="form-group">
                <label class="col-md-6">@lang('servicemodule::service.cover_photo')</label>
                <input class="col-md-6" type="file"  name="cover_photo" >
                <img style="width: 100px;height: 100px" src="{{ url('images/service/'.$category->cover_photo) }}">
            </div>
          <!-- /.nav-tabs-custom -->
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel/servicemodule/category')}}" type="button" class="btn btn-default">{{__('servicemodule::service.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('servicemodule::service.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection

@section('javascript')
<!-- CK Editor -->
<script src="{{asset('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>

@foreach ($activeLang as $lang)
<script>
  $(function () {
    CKEDITOR.replace('editor'+"{{$lang->id }}" );
  });

</script>
@endforeach

@endsection
