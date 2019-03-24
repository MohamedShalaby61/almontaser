@extends('commonmodule::layouts.master')

@section('title')
  {{trans('productmodule::category.pageTitle')}}
@endsection

@section('css')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{ trans('productmodule::category.pageTitle')}}
  </h1>
</section>
@endsection

@section('content')

<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{trans('productmodule::category.pageTitle')}}</h3>
    </div>
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/product-categories')}}" method="POST" enctype="multipart/form-data">
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
                    {{-- Title --}}
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.title')}}
                      ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input id="title{{$lang->id}}" type="text" autocomplete="off" class="form-control"
                             name="{{$lang->lang}}[title]"
                             @if($loop->first) required @endif >
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.desc')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <textarea class="textarea" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
              @endforeach


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <div class="form-group">
          {{-- Parent Category --}}
          <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.parent')}}:</label>
          <div class="col-sm-8">
            <select class="form-control" name="parent_id">
              <option value="0"> Parent Category </option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          {{-- Upload photo --}}
          <label class="control-label col-sm-2" for="img">{{trans('productmodule::category.pic')}}</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" class="" name="photo">
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
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.mt')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                        <input id="countTitleLettrs{{$lang->id}}" type="text" autocomplete="off" class="form-control" name="{{ $lang->lang}}[meta_title]">
                        <span id="titleSpan{{$lang->id}}"></span>
                    </div>

                  </div>
                  <div class="form-group">
                    {{-- Meta Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.md')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                        <textarea id="countDescLettrs{{$lang->id}}" class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15" rows="2"></textarea>
                        <span id="descSpan{{$lang->id}}"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    {{-- Meta Keywords --}}
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.tag')}}
                      ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input type="text" autocomplete="off" class="form-control"
                             name="{{ $lang->lang }}[meta_keywords]">
                    </div>
                  </div>

                  <!-- TODO: Slug -->
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="title">{{trans('productmodule::category.slug')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input  type="text" autocomplete="off" class="form-control" name="{{ $lang->lang }}[slug]">
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
        <a href="{{url('/admin-panel/product-categories')}}" type="button" class="btn btn-default">{{trans('productmodule::category.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{trans('productmodule::category.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection

@section('javascript')

{{-- jQuery Count letters --}}
@include('productmodule::category.js')

{{-- jQuery Bind data --}}
@include('productmodule::category.copy')

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5({
      toolbar: {
        "font-styles": true,
        "emphasis": true,
        "lists": true,
        "html": true,
        "link": true,
        "image": false
      }
    });
  });

</script>

<!-- jQuery form validator -->
<script src="{{asset('assets/admin/plugins/jquery_form_validator/jquery.form-validator.min.js')}}"></script>
<script>
  $.validate();
</script>

@endsection
