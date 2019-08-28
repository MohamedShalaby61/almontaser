@extends('commonmodule::layouts.master')

@section('title')
 {{__('portfoliomodule::portfolio.pagetitle')}}
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{__('portfoliomodule::portfolio.pagetitle')}}
  </h1>

</section>
@endsection

@section('content')

  @if (empty($categs->toArray()))
    <section class="content">
      <br/>
      <h3 class="alert alert-danger">{{__('portfoliomodule::portfolio.fill')}}</h3>
      <br/>
      <a href="{{url('admin-panel/portfoliomodule/category/create')}}" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> {{__('portfoliomodule::portfolio.fillnow')}}</a>
    </section>
  @else
    <section class="content">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">{{__('portfoliomodule::portfolio.pagetitle')}}</h3>
        </div>
        @if (count($errors) > 0) @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
        @endforeach @endif
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{url('admin-panel/portfoliomodule/project')}}" method="POST" enctype="multipart/form-data">
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
                      <label class="control-label col-sm-2" for="title">{{__('portfoliomodule::portfolio.title')}} ({{ $lang->display_lang }}):</label>
                      <div class="col-sm-8">
                        <input id="title{{$lang->id}}" type="text" autocomplete="off" class="form-control"
                                name="{{$lang->lang}}[title]"  @if($loop->first) required @endif>
                      </div>
                    </div>

                    <div class="form-group">
                      {{-- Description --}}
                      <label class="control-label col-sm-2" for="title">{{__('portfoliomodule::portfolio.desc')}} ({{$lang->display_lang}}):</label>
                      <div class="col-sm-8">
                        <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>

            <br>

            {{-- Upload photo --}}
            <div class="form-group">
              <label class="control-label col-sm-2" for="img">{{__('portfoliomodule::portfolio.photo')}} :</label>
              <div class="col-sm-4">
                <input type="file" autocomplete="off" name="photo">
              </div>

              <label class="control-label col-sm-2" for="imgs">{{__('portfoliomodule::portfolio.album')}}:</label>
              <div class="col-sm-4">
                <input type="file" multiple="multiple" name="photos[]" />
              </div>
            </div>

              <div class="form-group">
                  <label class="control-label col-sm-2" for="img">{{__('portfoliomodule::portfolio.cover_photo')}} :</label>
                  <div class="col-sm-4">
                      <input type="file" autocomplete="off" name="cover_photo">
                  </div>
              </div>

            <br>

            {{-- Category --}}
            <div class="form-group">
              <label class="control-label col-sm-2" for="category">{{__('portfoliomodule::portfolio.categ')}} :</label>
              <div class="col-sm-8">
                <select class="form-control" name="portfolio_category_id">
                  @foreach($categs as $cat)
                  <option value="{{ $cat->id }}">
                    {{ $cat->title }}
                  </option>
                  @endforeach
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
                      <label class="control-label col-sm-2" for="title">{{trans('portfoliomodule::portfolio.mt')}} ({{ $lang->display_lang }}):</label>
                      <div class="col-sm-8">
                        <input id="countTitleLettrs{{ $lang->id }}" type="text" autocomplete="off" class="form-control" name="{{ $lang->lang}}[meta_title]">
                        <span id="titleSpan{{$lang->id}}"></span>
                    </div>

                    </div>
                    <div class="form-group">
                      {{-- Meta Description --}}
                      <label class="control-label col-sm-2" for="title">{{trans('portfoliomodule::portfolio.md')}} ({{ $lang->display_lang }}):</label>
                      <div class="col-sm-8">
                        <textarea id="countDescLettrs{{ $lang->id }}" class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15"
                          rows="3"></textarea>
                        <span id="descSpan{{$lang->id}}"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      {{-- Meta Keywords --}}
                      <label class="control-label col-sm-2" for="title">{{trans('portfoliomodule::portfolio.tag')}} ({{ $lang->display_lang }}):</label>
                      <div class="col-sm-8">
                        <input type="text" autocomplete="off" class="form-control" name="{{ $lang->lang }}[meta_keywords]">
                      </div>
                    </div>
                    <!-- TODO: Slug -->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Slug : </label>
                        <div class="col-sm-8">
                            <input type="text" autocomplete="off" class="form-control" name="{{ $lang->lang }}[slug]">
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
            <a href="{{url('admin-panel/portfoliomodule/project')}}" type="button" class="btn btn-default">{{trans('portfoliomodule::portfolio.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
            <button type="submit" class="btn btn-primary pull-right">{{trans('portfoliomodule::portfolio.submit')}} &nbsp; <i class="fa fa-save"></i></button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </section>
  @endif

@endsection

@section('javascript')

{{-- jQuery Count letters --}}
@include('portfoliomodule::Portfolio.js')

{{-- jQuery Bind data --}}
@include('portfoliomodule::Portfolio.copy')

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
