@extends('commonmodule::layouts.master')

@section('title')
  {{$category->title}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">

<style>
  .wordLi{
    margin: 4%;
    font-size: large;
  }
</style>

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{trans('productmodule::category.show')}}

  </h1>
</section>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">{{trans('productmodule::category.category')}} <strong>{{$category->title}}&nbsp;:</strong></h3>

          <a href="{{url('/admin-panel/product-categories')}}" style="margin-right: 5px;" type="button" class="btn btn-default pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; {{trans('productmodule::category.back')}}</a>

          @role('admin|superadmin')
            <a title="Edit" href="{{url('/admin-panel/product-categories/' . $category->id . '/edit')}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> {{trans('productmodule::category.edit')}}</a>
          @endrole
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-7">
            <h3><strong>{{trans('productmodule::category.pic')}}:</strong></h3><br>
              @if ($category->photo)
              <img style="margin: 4%; padding-left: 10px;" src="{{asset('public/images/category/' . $category->photo)}}" width="400" height="250">
              @else
                <pre><strong>No Photo</strong></pre>
              @endif

            <div class="box-body" style="word-wrap: break-word;">
              <h3><strong>{{trans('productmodule::category.desc')}}</strong></h3><br> {!! $category->description !!}
            </div>
          </div>
          <div class="col-md-5 pull-right" >
            <ul>
              <li class="wordLi">{{trans('productmodule::category.id')}}:&nbsp; <strong>{{$category->id}}</strong> <br></li>
              <li class="wordLi">{{trans('productmodule::category.title')}}:&nbsp; <strong>{{$category->title}}</strong> <br></li>
              <li class="wordLi">{{trans('productmodule::category.parent')}}:&nbsp; <strong>{{$category->parent_id}}</strong> <br></li>
              <li class="wordLi">{{trans('productmodule::category.slug')}}:&nbsp; <strong>{{$category->slug}}</strong> <br></li>
              <li class="wordLi">{{trans('productmodule::category.tag')}}:&nbsp; <strong>{{$category->meta_keywords}}</strong> <br></li>
            </ul>
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
