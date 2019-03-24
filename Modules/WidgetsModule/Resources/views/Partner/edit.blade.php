@extends('commonmodule::layouts.master') 

@section('title')
 {{__('widgetsmodule::widgets.partnerpagetitle')}}
@endsection
 
@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
 
@section('content-header')
<section class="content-header">
  <h1> {{__('widgetsmodule::widgets.partnerpagetitle')}} </h1>

</section>
@endsection
 
@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('widgetsmodule::widgets.partnerpagetitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach 
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/widgets/partners')}}/{{$partner->id}}" method="POST" enctype="multipart/form-data">
      {{method_field('PUT')}}
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="form-group">
            {{-- Link --}}
            <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.link')}} :</label>
            <div class="col-sm-8">
              <input data-validation="length alphanumeric" value="{{$partner->link}}" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                placeholder="Enter Link" name="link" required data-validation="alphanumeric">
            </div>
          </div>
        </div>
        <br> {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('widgetsmodule::widgets.photo')}}:</label>
          <div class="col-sm-8">
            <input data-validation="required" type="file" autocomplete="off" name="photo">
            <br>
            <img src="{{asset('public/images/partners/' . $partner->photo)}}" width="100" height="70">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('widgetsmodule::widgets.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection
