@extends('commonmodule::layouts.master')

@section('title')
  {{$category->title}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{trans('blog::category.show')}}
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
          <h3 class="box-title">{{trans('blog::category.category')}} <strong>{{$category->title}}&nbsp;:</strong></h3>
          <a href="{{url('admin-panel/blog-categories')}}" style="margin-right: 5px;" type="button" class="btn btn-default pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; {{trans('blog::category.back')}}</a>

        @role('admin|superadmin')
            <a title="Edit" href="{{url('admin-panel/blog-categories/' . $category->id . '/edit')}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> {{trans('blog::category.edit')}}</a>
        @endrole
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-7">
            <h3><strong>{{trans('blog::category.pic')}}:</strong></h3><br>
            @if($category->photo)
              <img style="margin: 4%; padding-left: 10px;" src="{{asset('public/images/category/' . $category->photo)}}" width="400" height="250">
            @else
              <pre><strong>No Photo</strong></pre>
            @endif
            <div class="box-body">
              <h3><strong>{{trans('blog::category.desc')}}</strong></h3><br> {!! $category->description !!}
            </div>
          </div>
          <div class="col-md-5 pull-right" >
            <ul>
              <li>
                <h4 class="inline"><strong>{{trans('blog::category.id')}}</strong></h4>:&nbsp; {{$category->id}} <br><br>
              </li>

              <li>
                <h4 class="inline"><strong>{{trans('blog::category.title')}}</strong></h4>:&nbsp; {{$category->title}} <br><br>
              </li>

              <li>
                <h4 class="inline"><strong>{{trans('blog::category.parent')}}</strong></h4>:&nbsp; {{$category->title}} <br><br>
              </li>

              <li>
                <h4 class="inline"><strong>{{trans('blog::category.slug')}}</strong></h4>:&nbsp; {{$category->slug}} <br><br>
              </li>

              <li>
                <h4 class="inline"><strong>{{trans('blog::category.tag')}}</strong></h4>:&nbsp; {{$category->meta_keywords}} <br><br>
              </li>
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
