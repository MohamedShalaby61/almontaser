@extends('commonmodule::layouts.master')

@section('title')
 {{ trans('adminmodule::admin.admins') }}
@endsection

@section('css')
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
    <form class="form-horizontal" action="{{url('admin-panel/admins')}}" method="POST" >
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> {{ trans('adminmodule::admin.name') }}:</label>
            <div class="col-sm-6">
              <input type="text" autocomplete="off" class="form-control"
                placeholder="Enter name" name="name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> {{ trans('adminmodule::admin.username') }}:</label>
            <div class="col-sm-6">
              <input type="text"  class="form-control" placeholder="Enter Username" name="username" >
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> {{ trans('adminmodule::admin.email') }}:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> {{ trans('adminmodule::admin.password') }}:</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="role"> {{ trans('adminmodule::admin.acl') }}:</label>
            <div class="col-sm-6">
              <select class="form-control" name="role">
                  <option value="3">Writer</option>
                  <option value="2">Admin</option>
                  <option value="1">Super Admin</option>
              </select>
            </div>
          </div>

        </div>
        <br>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('/admin-panel/admins/')}}" type="button" class="btn btn-default">{{ trans('adminmodule::admin.cancel') }} &nbsp;
          <i class="fa fa-remove" aria-hidden="true"></i>
        </a>

        <button type="submit" class="btn btn-primary pull-right">{{ trans('adminmodule::admin.save') }} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection
