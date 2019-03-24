@extends('commonmodule::layouts.master')

@section('title')
  {{__('productmodule::product.pagetitle')}}
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">

{{-- Metro CSS --}}
<link rel="stylesheet" href="{{asset('assets/admin/treeview.css')}}" >
@endsection

@section('content-header')
<section class="content-header">
  <h1> {{__('productmodule::product.pagetitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('productmodule::product.pagetitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" id="editform" action="{{url('/admin-panel/product')}}/{{$product->id}}" method="POST" enctype="multipart/form-data">
      {{ method_field('PUT') }}
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
                  <label class="control-label col-sm-2" for="title">{{__('productmodule::product.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" class="form-control"
                      value="{{ ValueOf($product,$lang,'title') }}" name="{{$lang->lang}}[title]" @if($loop->first) required @endif>
                  </div>
                </div>

                <div class="form-group">
                  {{-- Description --}}
                  <label class="control-label col-sm-2" for="title">{{__('productmodule::product.desc')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($product,$lang,'description') }}
                    </textarea>
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
          <label class="control-label col-sm-2" for="photo">{{__('productmodule::product.photo')}} :</label>
          <div class="col-sm-8">
              <input type="file" autocomplete="off" name="photo">
              @if ($product->photo)
                  <br>
                  <img src="{{asset('public/images/products/thumb/' . $product->photo)}}" style="margin-top: 5px;">
              @else
                  <br>
                  "<strong>No Photo</strong>"
              @endif

          </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label class="control-label col-sm-2">{{__('productmodule::product.price')}}  : </label>
                <div class="col-sm-3">
                    <input type="text" value="{{ $product->price }}" data-validation="number" data-validation-allowing="float" autocomplete="off" class="form-control"  name="price" required>
                </div>

                <label class="control-label col-sm-2">{{__('productmodule::product.quantity')}}  : </label>
                <div class="col-sm-3">
                    <input type="text" value="{{ $product->quantity }}" data-validation="number" autocomplete="off" class="form-control" placeholder="0"  name="quantity" required>
                </div>
            </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">{{__('productmodule::product.categs')}}  : </label>
          <div class="col-sm-4">
            <ul data-role="treeview-metro">
              @foreach($categories as $cat)
                <li>
                    <input class="intree" @if(in_array($cat->id, $selected_categ_ids)) checked @endif data-validation="checkbox_group" data-validation-qty="min1" type="checkbox" data-role="checkbox" value="{{ $cat->id  }}" name="product_categ[]" data-caption="{{ $cat->title  }}" title="">
                    @if(count($cat->child)>0)
                        <ul>
                            @foreach($cat->child as $child)
                                <li><input type="checkbox" @if(in_array($child->id, $selected_categ_ids)) checked @endif selected data-role="checkbox" value="{{ $child->id  }}"  name="product_categ[]" data-caption="{{ $child->title  }}" title=""></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
              @endforeach
            </ul>
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
                  <label class="control-label col-sm-2" for="title"> {{__('productmodule::product.mt')}}
                      ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input type="text" value="{{ ValueOf($product,$lang,'meta_title') }}" autocomplete="off"
                           class="form-control"
                           name="{{ $lang->lang}}[meta_title]" >
                  </div>

                </div>

                <div class="form-group">
                  {{-- Meta Description --}}
                  <label class="control-label col-sm-2" for="desc"> {{__('productmodule::product.md')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input autocomplete="off" class="form-control" value="{{ ValueOf($product,$lang,'meta_desc') }}" name="{{ $lang->lang}}[meta_desc]">
                  </div>
                </div>

                <div class="form-group">
                  {{-- Meta Keywords --}}
                  <label class="control-label col-sm-2" for="tags"> {{__('productmodule::product.tags')}}  ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input autocomplete="off" class="form-control" value="{{ ValueOf($product,$lang,'meta_keywords') }}" name="{{ $lang->lang}}[meta_keywords]">
                  </div>
                </div>

                <!-- Slug -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="slug">Slug : </label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ ValueOf($product,$lang,'slug') }}" autocomplete="off" class="form-control" name="slug">
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
        <a href="{{url('/admin-panel/product')}}" type="button" class="btn btn-default">{{__('productmodule::product.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('productmodule::product.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection

@section('javascript')

{{-- Treeview --}}
<script  src="{{asset('assets/admin/metro.js')}}" > </script>

<!-- CK Editor -->
<script src="{{asset('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('assets/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
// Initialize Select2 Elements
$('.select2').select2();
</script>

@foreach ($activeLang as $lang)
<script>
$(function () {
    CKEDITOR.replace('editor' + "{{$lang->id}}");
});
</script>
@endforeach

<script>
    // setting checked for checkbox.
    @if(in_array($cat->id, $selected_categ_ids))
        $('.intree').prop('checked', true);
    @endif
</script>

<!-- jQuery form validator -->
<script src="{{asset('assets/admin/plugins/jquery_form_validator/jquery.form-validator.min.js')}}"></script>
<script>
    $.validate({
        form : '#editform',
    onError : function($form) {
        alert('Error, Make sure of your Data, Validation failed!');
        return false;
    },

  });
</script>

@endsection
