@extends('commonmodule::layouts.master')

@section('title')
 Partner
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
  <h1> Partner </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Partner</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/widgets/partners')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="form-group">
            {{-- Link --}}
            <label class="control-label col-sm-2" for="title">Link :</label>
            <div class="col-sm-8">
              <input type="text" autocomplete="off" class="form-control"
                name="link" required>
            </div>
          </div>
        </div>
        <br>
        {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">Upload Logo:</label>
          <div class="col-sm-8">
            <input data-validation="required" type="file" autocomplete="off" name="photo">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel/widgets/partners')}}" type="button" class="btn btn-default">Cancel &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>

        <button type="submit" class="btn btn-primary pull-right">Submit &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
</section>
@endsection
