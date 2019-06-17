@extends('commonmodule::layouts.master')

@section('title')
  {{__('widgetsmodule::widgets.why_us')}}
@endsection

@section('css')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.why_us')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('widgetsmodule::widgets.why_us')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{ url('admin-panel/widgets/why_us') }}/{{ $page->id }}" method="POST" enctype="multipart/form-data">
      {{ method_field('put') }}
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
                  {{-- name --}}
                  <label class="control-label col-sm-2" for="Name">{{__('widgetsmodule::widgets.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" class="form-control" value="{{ ValueOf($page, $lang, 'title') }}" name="{{$lang->lang}}[title]" @if ($loop->first) required @endif>
                  </div>
                </div>

                <div class="form-group">
                  {{-- content --}}
                  <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.content')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[content]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($page, $lang, 'content') }}</textarea>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- /.tab-why_us -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('widgetsmodule::widgets.photo')}}:</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" name="photo">
            @if ($page->photo)
                <br>
                <img src="{{asset('images/why_us/' . $page->photo)}}" width="100" height="70">
            @else
                <br>
                <strong>"No Photo"</strong>
            @endif
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
                    <label class="control-label col-sm-2" for="title">{{trans('widgetsmodule::widgets.mt')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input type="text" autocomplete="off" class="form-control" name="{{ $lang->lang}}[meta_title]" value="{{ ValueOf($page, $lang, 'meta_title') }}">
                    </div>

                  </div>
                  <div class="form-group">
                    {{-- Meta Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('widgetsmodule::widgets.md')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15" rows="3">{{ ValueOf($page, $lang, 'meta_desc') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    {{-- Meta Keywords --}}
                    <label class="control-label col-sm-2" for="title">{{trans('widgetsmodule::widgets.tag')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input type="text" autocomplete="off" class="form-control" name="{{ $lang->lang }}[meta_keywords]" value="{{ ValueOf($page, $lang, 'meta_keywords') }}">
                    </div>
                  </div>
                  <!-- TODO: Slug -->
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="title">Slug : </label>
                   <div class="col-sm-8">
                       <input type="text" autocomplete="off" class="form-control" name="{{ $lang->lang }}[slug]" value="{{ ValueOf($page, $lang, 'slug') }}">
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
        <a href="{{url('/admin-panel/widgets/why_us')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('widgetsmodule::widgets.submit')}} &nbsp; <i class="fa fa-save"></i></button>
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
    CKEDITOR.replace('editor' + '{{$lang->id}}');
  });

</script>
@endforeach

@endsection
