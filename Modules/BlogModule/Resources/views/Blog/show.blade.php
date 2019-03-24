@extends('commonmodule::layouts.master')

@section('title')
  {{$blog->title}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

<style>
  .wordLi{
    margin: 4%;
    font-size: large;
  }
</style>

@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{trans('blog::blog.show')}}
  </h1>

</section>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">{{trans('blog::blog.show')}} <strong>{{$blog->name}}&nbsp;:</strong></h3>
          <a href="{{url('admin-panel/blogs')}}" style="margin-right: 5px;" type="button" class="btn btn-default pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; {{trans('blog::blog.back')}}</a>

          @role('admin|superadmin')
            <a title="Edit" href="{{url('/admin-panel/blogs/' . $blog->id . '/edit')}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> {{trans('blog::blog.edit')}}</a>
          @endrole
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-7">
            <h3><strong>{{trans('blog::blog.pic')}}:</strong></h3><br>
            @if ($blog->photo)
                <img style="margin: 4%; padding-left: 10px;" src="{{asset('public/images/blog/' . $blog->photo)}}" width="400" height="250">
            @else
            <pre><strong>No Photo</strong></pre>
            @endif
            <div class="box-body">
              <h3><strong>{{trans('blog::blog.desc')}}</strong></h3><br> {!! $blog->description !!}
              <h3><strong>{{trans('blog::blog.shortdisc')}}</strong></h3><br> {!! $blog->short_desc !!}
              <h3><strong>{{trans('blog::blog.tags')}}</strong></h3><br> {!! $blog->tags !!}
              <h3><strong>{{trans('blog::blog.category')}}</strong><br></h3>
                  <ul>
                    @foreach($blog->categories as $item)
                      <li>{{$item->title}}</li>
                    @endforeach
                  </ul>
            </div>
          </div>
          <div class="col-md-5 pull-right" >
            <ul>
              <li class="wordLi">{{trans('blog::blog.id')}}:&nbsp; <strong>{{$blog->id}}</strong> <br></li>
              <li class="wordLi">{{trans('blog::blog.title')}}:&nbsp; <strong>{{$blog->title}}</strong> <br></li>

              <li class="wordLi">{{trans('blog::blog.slug')}}:&nbsp; <strong>{{$blog->slug}}</strong> <br></li>
              <li class="wordLi">{{trans('blog::blog.num')}}:&nbsp; <strong>{{$blog->num_of_view}}</strong> <br></li>
              <li class="wordLi">{{trans('blog::blog.feature')}}:&nbsp;
                @if($blog->is_featured == 1)
                  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                @else
                  <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                @endif
                <br>
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
