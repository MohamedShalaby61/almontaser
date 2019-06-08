@extends('commonmodule::layouts.master')
@section('title') {{__('main.home')}}
@endsection

@section('content')

    <section class="content-header">
        <h1>
        {{trans('adminmodule::admin.controll keybroad')}}
            <small> {{trans('adminmodule::admin.home')}}</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            @if(in_array('service_app',$activeApps))
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-wrench"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{trans('adminmodule::admin.services')}}</span>
                            <span class="info-box-number">{{ $services }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endif
        <!-- /.col -->
            @if(in_array('product_app',$activeApps))
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{trans('adminmodule::admin.products')}}</span>
                            <span class="info-box-number">{{ $products }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endif


            @if(in_array('project_app',$activeApps))

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-briefcase"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">{{ trans('adminmodule::admin.projects') }}</span>
                            <span class="info-box-number">{{ $projects }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endif
            @if(in_array('blog_app',$activeApps))

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-pencil-square-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ trans('adminmodule::admin.blogs') }}</span>
                            <span class="info-box-number">{{ $blogs }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
        @endif

        <!-- /.col -->
        </div>


        <div class="row">
            @if(in_array('service_app',$activeApps))
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <h3 class="widget-user-username">{{ trans('adminmodule::admin.services') }}</h3>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="{{ url('admin-panel/servicemodule/category') }}">{{ trans('adminmodule::admin.servicescategory') }} </a></li>
                                <li><a href="{{ url('admin-panel/servicemodule/service') }}">{{ trans('adminmodule::admin.services') }} </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            @endif
            @if(in_array('blog_app',$activeApps))

                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">{{ trans('adminmodule::admin.blogs') }}</h3>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="{{ url('admin-panel/blog-categories') }}">{{ trans('adminmodule::admin.blog-categories') }}</a></li>
                                <li><a href="{{ url('admin-panel/blogs') }}">{{ trans('adminmodule::admin.blogs') }} </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            @endif
            @if(in_array('project_app',$activeApps))

                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username"> {{ trans('adminmodule::admin.projects') }} </h3>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="{{ url('admin-panel/portfoliomodule/category') }}">{{ trans('adminmodule::admin.category') }} </a>
                                </li>
                                <li><a href="{{ url('admin-panel/portfoliomodule/project') }}">{{ trans('adminmodule::admin.project') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            @endif
            @if(in_array('product_app',$activeApps))

                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">{{ trans('adminmodule::admin.product') }} </h3>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="{{ url('admin-panel/product-categories') }}">{{ trans('adminmodule::admin.product-categories') }} </a></li>
                                <li><a href="{{ url('admin-panel/product') }}">{{ trans('adminmodule::admin.product') }}  </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            @endif

        </div>

        <br>
        <br>

        <!-- Main row -->
        <div class="row">
        @if(in_array('contactus_app',$activeApps))
            <!-- Left col -->
                <div class="col-md-6">

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                        <h3 class="box-title">{{trans('adminmodule::admin.contact us')}} </h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>{{__('widgetsmodule::widgets.id')}}</th>
                                        <th>{{__('widgetsmodule::widgets.name')}}</th>
                                        <th>{{__('widgetsmodule::widgets.email')}}</th>
                                        <th>{{__('widgetsmodule::widgets.phone')}}</th>
                                        <th>{{__('widgetsmodule::widgets.message')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td> {{$item->id}} </td>

                                            <td> {{$item->name}} </td>

                                            <td> {{$item->email}} </td>

                                            <td>{{$item->phone}}</td>

                                            <td>
                                                <a href="{{url('admin-panel/widgets/contact_us')}}/{{$item->id}}">
                                                    {!!substr($item->message, 0, 30)!!}
                                                    ...</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
        @endif
        @if(in_array('bookings_app',$activeApps))

            <!-- Left col -->
                <div class="col-md-6">

                    <!-- TABLE: LATEST Bookings -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                        <h3 class="box-title">{{trans('adminmodule::admin.booking')}}</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>{{__('widgetsmodule::widgets.id')}}</th>
                                        <th>{{__('widgetsmodule::widgets.name')}}</th>
                                        <th>{{__('widgetsmodule::widgets.phone')}}</th>
                                        <th>{{__('widgetsmodule::widgets.message')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bookings as $item)
                                        <tr>
                                            <td> {{$item->id}} </td>

                                            <td> {{$item->name}} </td>

                                            <td>{{$item->phone}}</td>

                                            <td>
                                                <a href="{{url('admin-panel/widgets/booking')}}/{{$item->id}}">
                                                    {!!substr($item->message, 0, 30)!!}
                                                    ...</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            @endif

        </div>


    </section>


@stop
