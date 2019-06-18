@extends('commonmodule::layouts.master')

@section('title')
 {{__('widgetsmodule::widgets.teampagetitle')}}
@endsection

@section('css')

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
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/widgets/team/')}}/{{$team->id}}" method="POST" enctype="multipart/form-data">
      {{ method_field('PUT') }} {{ csrf_field() }}

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
                <label class="control-label col-sm-2" for="Name">{{__('widgetsmodule::widgets.name')}} ({{ $lang->display_lang }}):</label>
                <div class="col-sm-8">
                  <input type="text" value="{{ ValueOf($team, $lang, 'name') }}" autocomplete="off" class="form-control" name="{{$lang->lang}}[name]" @if($loop->first) required @endif>
                </div>
              </div>

              <div class="form-group">
                {{-- job title --}}
                <label class="control-label col-sm-2" for="job">{{__('widgetsmodule::widgets.job_title')}} ({{ $lang->display_lang }}):</label>
                <div class="col-sm-8">
                  <input type="text" value="{{ ValueOf($team, $lang, 'job_title') }}" autocomplete="off" class="form-control" name="{{$lang->lang}}[job_title]">
                </div>
              </div>

              <div class="form-group">
                {{-- Description --}}
                <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.desc')}} ({{$lang->display_lang}}):</label>
                <div class="col-sm-8">
                  <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($team, $lang, 'description') }}</textarea>
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
        <label class="control-label col-sm-2" for="img">{{__('widgetsmodule::widgets.photo')}}:</label>
        <div class="col-sm-8">
          <input type="file" autocomplete="off" name="photo">
          <br>
          <img src="{{asset('images/team/' . $team->photo)}}" width="100" height="70">
        </div>
      </div>

      {{-- skills --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="skills">{{__('widgetsmodule::widgets.skills')}} : </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" value="{{ $team->skills }}" class="form-control" name="skills">
        </div>
      </div>

      {{-- experience --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="experience">{{__('widgetsmodule::widgets.experience')}} : </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" value="{{ $team->experience }}" class="form-control" name="experience">
        </div>
      </div>

      {{-- phone --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">{{__('widgetsmodule::widgets.phone')}} (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->phone }}" name="phone">
        </div>
      </div>

      {{-- email --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">{{__('widgetsmodule::widgets.email')}} (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->email }}" name="email">
        </div>
      </div>

      {{-- facebook --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">facebook (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->facebook }}" name="facebook">
        </div>
      </div>

      {{-- twitter --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">twitter (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->twitter }}" name="twitter">
        </div>
      </div>

      {{-- youtube --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">youtube (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->youtube }}" name="youtube">
        </div>
      </div>

      {{-- skype --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">skype (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->skype }}" name="skype">
        </div>
      </div>

      {{-- instagram --}}
      <div class="form-group">
        <label class="control-label col-sm-2" for="job">instagram (Not Required): </label>
        <div class="col-sm-8">
          <input type="text" autocomplete="off" class="form-control" value="{{ $team->instagram }}" name="instagram">
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
                  <input type="text" autocomplete="off" value="{{ ValueOf($team, $lang, 'meta_title') }}" class="form-control" name="{{ $lang->lang}}[meta_title]">
                </div>

              </div>
              <div class="form-group">
                {{-- Meta Description --}}
                <label class="control-label col-sm-2" for="title">{{trans('widgetsmodule::widgets.md')}} ({{ $lang->display_lang }}):</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15"
                    rows="3">{{ ValueOf($team, $lang, 'meta_desc') }}</textarea>
                </div>
              </div>
              <div class="form-group">
                {{-- Meta Keywords --}}
                <label class="control-label col-sm-2" for="title">{{trans('widgetsmodule::widgets.tag')}} ({{ $lang->display_lang }}):</label>
                <div class="col-sm-8">
                  <input type="text" autocomplete="off" value="{{ ValueOf($team, $lang, 'meta_keywords') }}" class="form-control" name="{{ $lang->lang }}[meta_keywords]">
                </div>
              </div>
              <!-- TODO: Slug -->
              <div class="form-group">
                  <label class="control-label col-sm-2" for="title">Slug : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" value="{{ ValueOf($team, $lang, 'slug') }}" class="form-control" name="{{ $lang->lang }}[slug]">
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
      <a href="{{url('admin-panel/widgets/team')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
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
