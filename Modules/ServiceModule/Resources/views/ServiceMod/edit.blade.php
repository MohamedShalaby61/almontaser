@extends('commonmodule::layouts.master')

@section('title')
  {{__('servicemodule::service.servicetitle')}}
@endsection

@section('css')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('servicemodule::service.servicetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('servicemodule::service.servicetitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/servicemodule/service')}}/{{$service->id}}" method="POST" enctype="multipart/form-data">
      {{method_field('PUT')}}
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
                  <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" value="  {!! ValueOf($service,$lang,'title') !!}"
                           class="form-control" name="{{$lang->lang}}[title]"
                           @if($loop->first) required @endif >
                  </div>
                </div>

                <div class="form-group">
                  {{-- Description --}}
                  <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.desc')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! ValueOf($service,$lang,'description') !!}</textarea>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('servicemodule::service.photo')}} :</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" name="photo">
            <br/>
            @if ($service->photo)
                <img src="{{asset('public/images/service/' . $service->photo)}}" width="100" height="70">
            @else
                "<strong>No Photo</strong>"
            @endif
          </div>
        </div>

        {{-- Category --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="category">{{__('servicemodule::service.categ')}} :</label>
          <div class="col-sm-8">
            <select class="form-control" name="service_category_id">
              @foreach($categs as $cat)
              <option value="{{ $cat->id }}" @if($cat->id == $service->service_category_id) selected @endif>
                {{ $cat->title }}
              </option>
              @endforeach
            </select>
          </div>
        </div>
          <div class="form-group">
              {{-- Feature --}}
              <label class="control-label col-sm-2">{{ __('servicemodule::service.is_featured') }}</label>
              <div class="col-sm-8">
                  <select name="feature" class="form-control">
                      <option {{ $service->feature == 1 ? 'selected' : '' }} value="1">{{ __('servicemodule::service.feature') }}</option>
                      <option {{ $service->feature == 0 ? 'selected' : '' }} value="0">{{ __('servicemodule::service.not_feature') }}</option>
                  </select>
              </div>
          </div>
        <div class="form-group">
          <div class="box-header">
            <pre><h4>SEO Columns : </h4></pre>
          </div>
        </div>

        <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                @foreach($activeLang as $lang)
                <li @if($loop->first) class="active" @endif >
                  <a href="#seo{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                </li>
                @endforeach
              </ul>


              <div class="tab-content">
                @foreach($activeLang as $lang)
                <div class="tab-pane @if($loop->first) active @endif" id="seo{{ $lang->display_lang }}">
                  <div class="form-group">
                    {{-- Meta Title --}}
                    <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.mt')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input type="text" value="{{ValueOf($service,$lang,'meta_title') }}" autocomplete="off" class="form-control" name="{{ $lang->lang}}[meta_title]">
                    </div>

                  </div>
                  <div class="form-group">
                    {{-- Meta Description --}}
                    <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.md')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15" rows="3">{!! ValueOf($service,$lang,'meta_desc') !!}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    {{-- Meta Keywords --}}
                    <label class="control-label col-sm-2" for="title">{{__('servicemodule::service.tag')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input type="text" autocomplete="off" value="{{ValueOf($service,$lang,'meta_keywords') }}" class="form-control" name="{{ $lang->lang }}[meta_keywords]">
                    </div>
                  </div>
                  <!-- TODO: Slug -->
                 <div class="form-group">
                   <label class="control-label col-sm-2" for="title">Slug : </label>
                   <div class="col-sm-8">
                      <input type="text" autocomplete="off" value="{{ValueOf($service,$lang,'slug') }}" class="form-control" name="{{ $lang->lang }}[slug]">
                   </div>
                 </div>
                </div>
                @endforeach

              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel/servicemodule/service')}}" type="button" class="btn btn-default">{{__('servicemodule::service.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
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
    CKEDITOR.replace('editor' + "{{$lang->id}}");
  });

</script>
@endforeach

@endsection
