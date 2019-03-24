@extends('commonmodule::layouts.master')

@section('title')
 {{__('widgetsmodule::widgets.content')}}
@endsection

@section('content-header')
<section class="content-header">
  <h1> {{__('widgetsmodule::widgets.content')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">{{__('widgetsmodule::widgets.content')}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="word-wrap: break-word;">
          <div class="col-md-8">
            <h3><strong>{{__('widgetsmodule::widgets.content')}} :</strong></h3><br> {!! $page->content !!}
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


