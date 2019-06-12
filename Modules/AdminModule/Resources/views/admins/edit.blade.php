@extends('commonmodule::layouts.master')

@section('title')
 {{ trans('adminmodule::admin.admins') }}
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
  <h1> {{ trans('adminmodule::admin.admins') }} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('adminmodule::admin.admins') }}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/admins')}}/{{ $admin->id }}" method="POST" >
        {{ method_field('PUT') }}
        {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">

          <div class="form-group">
            <label class="control-label col-sm-2" > {{ trans('adminmodule::admin.name') }} :</label>
            <div class="col-sm-6">
              <input type="text"  class="form-control"
                placeholder="Enter Name" name="name"  value="{{ $admin->name }}" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" > {{ trans('adminmodule::admin.username') }} :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control"
                     placeholder="Enter Username" name="username" value="{{ $admin->username }}" >
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" > {{ trans('adminmodule::admin.email') }} :</label>
            <div class="col-sm-6">
              <input type="text"  class="form-control"
                     placeholder="Enter Email" name="email" value="{{ $admin->email }}" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" > {{ trans('adminmodule::admin.password') }} :</label>
            <div class="col-sm-6">
              <input type="password"  class="form-control"
                     placeholder="@lang('adminmodule::admin.pass_message')" name="password" >
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="role"> {{ trans('adminmodule::admin.acl') }}:</label>
            <div class="col-sm-6">
              <select class="form-control" name="role">
                @foreach ($roles as $key => $value)
                    <option value="{{ $key }}" @if($key == $admin->roles[0]->id) selected @endif>{{ $value }}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
        <br>


      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('/admin-panel/admins/')}}" type="button" class="btn btn-default">Cancel
          <i class="fa fa-remove" aria-hidden="true"></i>
        </a>

        <button type="submit" class="btn btn-primary pull-right">تعديل  &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection
