<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{__('commonmodule::sidebar.mainnav')}}</li>

            <!-- Common Module -->
            <li>
                <a href="{{url('/admin-panel')}}">
                    <i class="fa fa-home"></i> <span>{{__('commonmodule::sidebar.home')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>

            @if(in_array('service_app',$activeApps))
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-wrench"></i> <span>{{__('commonmodule::sidebar.service')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- Categories -->
                        <li><a href="{{ url('admin-panel/servicemodule/category') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.servicecateg')}}</a>
                        </li>

                        <!-- Service -->
                        <li><a href="{{ url('admin-panel/servicemodule/service') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.service')}}</a></li>
                    </ul>
                </li>
            @endif

            @if(in_array('project_app',$activeApps))
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-briefcase"></i> <span>{{__('commonmodule::sidebar.portfolio')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- Categories -->
                        <li><a href="{{ url('admin-panel/portfoliomodule/category') }}"><i
                                        class="fa fa-circle-o"></i>{{__('commonmodule::sidebar.portfoliocateg')}}</a>
                        </li>

                        <!-- projects -->
                        <li><a href="{{ url('admin-panel/portfoliomodule/project') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.portfolio')}}</a></li>
                    </ul>
                </li>
            @endif
            @if(in_array('product_app',$activeApps))

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>{{__('commonmodule::sidebar.product')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- Categories -->
                        <li><a href="{{ url('admin-panel/product-categories') }}"><i
                                        class="fa fa-circle-o"></i>{{__('commonmodule::sidebar.productcateg')}}</a></li>

                        <!-- Products -->
                        <li><a href="{{ url('admin-panel/product') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.product')}}</a></li>
                    </ul>
                </li>
            @endif
            @if(in_array('blog_app',$activeApps))

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span>{{__('commonmodule::sidebar.blog')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- Categories -->
                        <li><a href="{{ url('admin-panel/blog-categories') }}"><i
                                        class="fa fa-circle-o"></i>{{__('commonmodule::sidebar.blogcateg')}}</a></li>

                        <!-- Blog -->
                        <li><a href="{{ url('admin-panel/blogs') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.blog')}}</a></li>
                    </ul>
                </li>
            @endif

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i> <span>{{__('commonmodule::sidebar.widgets')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                @if(in_array('slider_app',$activeApps))
                    <!-- Slider -->
                        <li><a href="{{ url('admin-panel/widgets/slider') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.slider')}}</a>
                        </li>
                @endif

                @if(in_array('slider_app',$activeApps))
                <!-- acheive -->
                    <li><a href="{{ url('admin-panel/widgets/acheive') }}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.acheive')}}</a>
                    </li>
            @endif
                @if(in_array('bookings_app',$activeApps))

                    <!-- Booking -->
                        <li><a href="{{ url('admin-panel/widgets/booking') }}"><i
                                        class="fa fa-circle-o"></i> {{__('widgetsmodule::widgets.bookingpagetitle')}}
                            </a>
                        </li>
                @endif
                @if(in_array('partner_app',$activeApps))

                    <!-- Partner -->
                        <li><a href="{{ url('admin-panel/widgets/partners') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.partner')}}</a></li>
                @endif
                @if(in_array('testimonial_app',$activeApps))

                    <!-- Testimonial -->
                        <li><a href="{{ url('admin-panel/widgets/testimonials') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.monial')}}</a></li>
                @endif
                @if(in_array('team_app',$activeApps))

                    <!-- Team -->
                        <li><a href="{{ url('admin-panel/widgets/team') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.team')}}</a></li>
                @endif
                @if(in_array('contactus_app',$activeApps))

                    <!-- contact -->
                        <li><a href="{{url('admin-panel/widgets/contact_us')}}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.contact')}}</a></li>
                @endif
{{--                @if(in_array('why_us_app',$activeApps))--}}

                    <!-- contact -->
                        <li><a href="{{url('admin-panel/widgets/why_us')}}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.why_us')}}</a>
                        </li>
{{--                @endif--}}
                @if(in_array('subscribe_app',$activeApps))

                    <!-- subscribe -->
                        <li><a href="{{url('admin-panel/widgets/subscripe')}}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.subs')}}</a></li>
                @endif
                @if(in_array('pages_app',$activeApps))

                    <!-- pages -->
                        <li><a href="{{url('admin-panel/widgets/page')}}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.pages')}}</a></li>
                @endif
                @if(in_array('workhours_app',$activeApps))

                    <!-- work hours -->
                        <li><a href="{{url('admin-panel/widgets/hours')}}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.hours')}}</a></li>
                    @endif
                </ul>
            </li>

            @if(in_array('video_app',$activeApps))

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                        <span>{{__('commonmodule::sidebar.video')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('admin-panel/videos/videocategory') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.vidcateg')}}</a></li>

                        <li><a href="{{ url('admin-panel/videos/video') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.video')}}</a></li>
                    </ul>
                </li>
            @endif
            @if(in_array('photo_app',$activeApps))

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-photo" aria-hidden="true"></i>
                        <span>{{__('commonmodule::sidebar.photo')}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('admin-panel/photos/photocategory') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.photocateg')}}</a>
                        </li>

                        <li><a href="{{ url('admin-panel/photos/photo') }}"><i
                                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.photo')}}</a>
                        </li>
                    </ul>
                </li>
            @endif


            @role('admin|superadmin|owner')
            <li>
                <a href="{{ url('admin-panel/config-module') }}">
                    <i class="fa fa-cog" aria-hidden="true"></i><span>{{__('commonmodule::sidebar.config')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endrole

            @role('superadmin|owner')
            <li>
                <a href="{{ url('admin-panel/admins') }}">
                    <i class="fa fa-user" aria-hidden="true"></i><span>{{__('commonmodule::sidebar.admins')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endrole

            @role('owner')
            <li>
                <a href="{{ url('/admin-panel/commonmodule/activate-lang') }}">
                    <i class="fa fa-language" aria-hidden="true">
                    </i>
                    <span>
                        {{__('commonmodule::sidebar.langs')}}
                    </span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            @endrole

            @role('owner')
            <li>
                <a href="{{ url('admin-panel/commonmodule/settings/apps') }}">
                    <i class="fa fa-window-restore" aria-hidden="true"></i>
                    </i>
                    <span>
                        {{__('commonmodule::sidebar.apps')}}
                    </span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            @endrole
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
