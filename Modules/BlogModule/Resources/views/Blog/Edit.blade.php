@extends('commonmodule::layouts.master')

@section('title')
 {{trans('blog::blog.edit')}}
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">

{{-- Metro CSS --}}
<link rel="stylesheet" href="{{asset('assets/admin/treeview.css')}}" >
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{trans('blog::blog.edit')}}
  </h1>

</section>
@endsection

@section('content')

<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{trans('blog::blog.edit')}}</h3>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif
    <!-- /.box-header -->
    <form class="form-horizontal" id="createform" action="{{url('admin-panel/blogs/' . $blog->id)}}" method="post" enctype="multipart/form-data">
      {{ method_field('put') }}
      {{ csrf_field() }}

      <div class="box-body">
        <input type="hidden" name="id" value="{{$blog->id}}">
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
              @foreach($activeLang as $key=>$lang)
                <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                  <div class="form-group">
                    {{-- Title --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.title')}}({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input id="title{{$lang->id}}" type="text" autocomplete="off"
                      value="{{ ValueOf($blog,$lang,'title') }}" class="form-control"
                             name="{{$lang->lang}}[title]" @if($loop->first) required @endif>
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.desc')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <textarea id="editor2{{$lang->id}}" class="textarea" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($blog,$lang,'description') }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- Short Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.shortdisc')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <textarea id="shortDesc{{$lang->id}}" class="textarea" name="{{$lang->lang}}[short_desc]"
                        style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($blog,$lang,'short_desc') }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- tags --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.tags')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <input id="tags{{$lang->id}}" type="text" value="{{ ValueOf($blog,$lang,'tags') }}" autocomplete="off" class="form-control" name="{{$lang->lang}}[tags]">
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
          <label class="control-label col-sm-2">{{__('blog::blog.category')}}  : </label>
          <div class="col-sm-4">
            <ul data-role="treeview-metro">
              @foreach($categories as $cat)
                <li>
                    <input class="intree" @if(in_array($cat->id, $selected_categ_ids)) checked @endif type="checkbox" data-validation="checkbox_group" data-validation-qty="min1" data-role="checkbox" value="{{ $cat->id  }}" name="blog_category_id[]" data-caption="{{ $cat->title  }}" title="">
                    @if(count($cat->child)>0)
                        <ul>
                            @foreach($cat->child as $child)
                                <li><input type="checkbox"  @if(in_array($child->id, $selected_categ_ids)) checked @endif selected data-role="checkbox" value="{{ $child->id  }}"  name="blog_category_id[]" data-caption="{{ $child->title  }}" title=""></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="form-group">
          {{-- Upload photo --}}
          <label class="control-label col-sm-2" for="img">{{trans('blog::blog.photo')}}</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" class="" name="photo">
            @if($blog->photo)
              <img src="{{asset('/images/blog/' . $blog->photo)}}" style="margin-top: 5px;" height="70" width="100">
            @else
              <br>
              "<strong>No Photo</strong>"
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('blog::blog.feature')}}</label>

          <div class="col-lg-3">
            <label><input type="radio" name="is_featured" value="1" @if($blog->is_featured == 1) checked @endif> Yes</label>
            <label><input type="radio" name="is_featured" value="0" @if($blog->is_featured != 1) checked @endif> No</label>
          </div>
        </div>

        <div class="form-group">
          <div class="box-header with-border">
            <h4>SEO Colms : </h4>
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
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.mt')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input id="countTitleLettrs{{$lang->id}}" type="text" autocomplete="off" value="{{ ValueOf($blog,$lang,'meta_title') }}" class="form-control" name="{{$lang->lang}}[meta_title]">
                      <span id="titleSpan{{$lang->id}}"></span>
                    </div>

                  </div>
                  <div class="form-group">
                    {{-- Meta Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.md')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <textarea id="countDescLettrs{{$lang->id}}" class="form-control" name="{{ $lang->lang}}[meta_desc]" cols="15" rows="3">{{ ValueOf($blog,$lang,'meta_desc') }}</textarea>
                      <span id="descSpan{{$lang->id}}"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    {{-- Meta Keywords --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.tag')}} ({{ $lang->display_lang }}):</label>
                    <div class="col-sm-8">
                      <input id="metatags{{$lang->id}}" type="text" autocomplete="off" class="form-control" value="{{ ValueOf($blog,$lang,'meta_keywords') }}"  name="{{ $lang->lang }}[meta_keywords]">
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- Slug --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::blog.slug')}}:</label>
                    <div class="col-sm-8">
                      <input type="text" autocomplete="off" class="form-control" value="{{ ValueOf($blog,$lang,'slug') }}" name="{{$lang->lang}}[slug]">
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
      <div class="box-footer">
        <a href="{{url('admin-panel/blogs')}}" type="button" class="btn btn-default"> {{trans('blog::blog.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i>  </a>
        <button type="submit" class="btn btn-primary pull-right"> {{trans('blog::blog.submit')}} &nbsp; <i class="fa fa-save"></i> </button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection

@section('javascript')

{{-- Treeview --}}
<script  src="{{asset('assets/admin/metro.js')}}" > </script>

{{-- jQuery Count letters --}}
@include('blog::Blog.js')

{{-- jQuery Bind data --}}
@include('blog::Blog.copy')
<script type="text/javascript" src="{{asset('assets/admin/bower_components/ckeditor/ckfinder/ckfinder.js')}}"></script>

<script src="{{asset('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
    CKFinder.setupCKEditor();
</script>
@foreach ($activeLang as $lang)
<script>
  $(function () {
    CKEDITOR.replace('editor2' + '{{$lang->id}}');
  });

</script>
@endforeach


<!-- jQuery form validator -->
<script src="{{asset('assets/admin/plugins/jquery_form_validator/jquery.form-validator.min.js')}}"></script>
<script>
    $.validate({
        form : '#createform',
    onError : function($form) {
        alert('Error, Make sure of your Data, Validation failed!');
        return false;
    },
    // onSuccess : function($form) {
    //     alert('The form'+' is valid!');
    //     return false; // Will stop the submission of the form
    // },
    // onValidate : function($form) {
    //     return {
    //         element : $('#some-input'),
    //         message : 'This input has an invalid value for some reason'
    //     }
    // },
    // onElementValidate : function(valid, $el, $form, errorMess) {
    //     console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
    // }
});
</script>
<script src="{{ asset('assets/admin/bower_components/select2/dist/js/select2.min.js')}}"></script>

<script>
  $('.select2').select2()
</script>

@endsection
