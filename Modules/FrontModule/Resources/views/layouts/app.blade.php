<!DOCTYPE html>
<html dir="{{ App()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
	<meta charset="UTF-8">
	<title>{{ $config['title'] }}</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	
        <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ url('/assets/front') }}/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ url('/assets/front') }}/css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="{{ url('/assets/front') }}/css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href="{{ url('/assets/front') }}/css/color-themes/default-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/assets/front') }}/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ url('/assets/front') }}/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('/assets/front') }}/images/favicon/favicon-16x16.png" sizes="16x16">
    @if(App()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ url('/assets/front') }}/css/style-ar.css">
        <link rel="stylesheet" href="{{ url('/assets/front') }}/css/responsive-ar.css">
    @endif
    @stack('css')
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="{{ url('assets/front') }}/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="{{ url('assets/front') }}/js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">

<div class="preloader"></div> 

<!-- Start Top Bar style2 area -->  
<section class="topbar-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="top-left-style2 float-left">
                    <ul>
                        <li><span class="icon-clock"></span><b>{{ $work_hour->day }}: </b> {{ $work_hour->from }} {{ __('frontmodule::front.am') }} @lang('frontmodule::front.to') {{ $work_hour->to }}
                        @lang('frontmodule::front.pm')</li>
                        <li><span class="icon-phone"></span><b>@lang('frontmodule::front.contact'): </b>{{ $config['phone'] }}</li>
                    </ul>
                </div>
                <div class="top-right-style2 clearfix float-right">
                    <div class="state-select-box float-left">
                        <select id="dynamic-select" class="selectmenu area_select clearfix">
                            <option {{ App()->getLocale() == 'ar' ? 'selected':'' }} value="{{ url('locale/ar') }}"><a href="">العربية</a></option>
                            <option {{ App()->getLocale() == 'en' ? 'selected':'' }} value="{{ url('locale/en') }}"><a href="">english</a></option>
                        </select>
                    </div>
                    <div class="outer-search-box float-right">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>    
                </div>    
            </div>     
        </div>
    </div>
</section>
<!-- End Top Bar style2 area -->  
 
<!--Start header style2 area-->
@include('frontmodule::includes.navbar') 
<!--End header style2 area-->
  
<!-- Hidden Navigation Bar -->
@include('frontmodule::includes.hide_navbar')

<!-- Start Top Bar style2 area -->  
    @yield('content')
<!--Start footer area-->  
<footer class="footer-area pdtop80">
    <div class="container">
        <div class="row">
           
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="about-us">
                        <div class="footer-logo fix">
                            <a href="{{ route('index_front') }}">
                                <img src="{{ url('/assets/front') }}/images/resources/logo-2.png" alt="Awesome Logo">
                            </a>
                        </div>  
                        <div class="text-box fix">
                            {!! $config['about_index'] !!}
                        </div>
                        <div class="button fix">
                            <a class="btn-one" href="{{ route('about_us') }}">@lang('frontmodule::front.read_more')</a>
                        </div>   
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 marbtm50">
                    <div class="title">
                        <h3>@lang('frontmodule::front.menu')</h3>
                    </div>
                    <ul class="specialities">
                        <li><a href="{{ route('index_front') }}">@lang('frontmodule::front.home')</a></li>
                        <li><a href="{{route('about_us')}}">@lang('frontmodule::front.about_us')</a></li>
                        <li><a href="{{ route('question') }}">@lang('frontmodule::front.ask')</a></li>
                        <li><a href="{{ route('blogs') }}">@lang('frontmodule::front.blogs')</a></li>
                        <li><a href="{{route('services')}}">@lang('frontmodule::front.services')</a></li>
                        <li><a href="{{route('contact')}}">@lang('frontmodule::front.contact_us')</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 marbtm50">
                    <div class="title">
                        <h3>@lang('frontmodule::front.services')</h3>
                    </div>
                    <ul class="specialities">
                        @if($services->count() > 0)
                            @foreach($services as $service)
                                <li><a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">{{ $service->title }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->

            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 pdbtm50">
                    <div class="title">
                        <h3>Facilities</h3>
                    </div>
                    <ul class="facilities">
                        <li><a href="#">Individual Tooth X-Ray</a></li>
                        <li><a href="#">Intensive Care Unit</a></li>
                        <li><a href="#">Blood Bank</a></li>
                        <li><a href="#">Critical Care Areas</a></li>
                        <li><a href="#">Laboratories</a></li>
                        <li><a href="#">Scale and Clean</a></li>
                        <li><a href="#">Fissure Sealants</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->

        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="inner clearfix">
                    <div class="footer-social-links float-left">
                        <ul class="sociallinks-style-one">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright-text text-center">
                        <p>© <a href="#">Dento</a> 2018, All Rights Reserved.</p>
                    </div>
                    <ul class="footer-menu float-right">
                        <li><a href="#">@lang('frontmodule::front.terms_condition')</a></li>
                        <li><a href="#">@lang('frontmodule::front.privacy_policy')</a></li>
                    </ul>
                </div>   
            </div>
        </div>
    </div>    
</section>
<!--End footer bottom area-->   

</div>  

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate navy-color" data-theme-file="css/color-themes/navy-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="css/color-themes/yellow-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-theme.css"></span>
        </div>
    </div>
    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>
</div>
<!-- /.End Of Color Palate -->

    <!-- main jQuery -->
    <script src="{{ url('/assets/front') }}/js/jquery.js"></script>
    <!-- Wow Script -->
    <script src="{{ url('/assets/front') }}/js/wow.js"></script>
    <!-- bootstrap -->
    <script src="{{ url('/assets/front') }}/js/bootstrap.min.js"></script>
    <!-- Slick slider Script -->
    <script src="{{ url('/assets/front') }}/js/slick.js"></script>
    <!-- bx slider -->
    <script src="{{ url('/assets/front') }}/js/jquery.bxslider.min.js"></script>
    <!-- count to -->
    <script src="{{ url('/assets/front') }}/js/jquery.countTo.js"></script>
    <script src="{{ url('/assets/front') }}/js/appear.js"></script>
    <!-- owl carousel -->
    <script src="{{ url('/assets/front') }}/js/owl.js"></script>
    <!-- validate -->
    <script src="{{ url('/assets/front') }}/js/validation.js"></script>
    <!-- mixit up -->
    <script src="{{ url('/assets/front') }}/js/jquery.mixitup.min.js"></script>
    <!-- isotope script-->
    <script src="{{ url('/assets/front') }}/js/isotope.js"></script>
    <!-- Easing -->
    <script src="{{ url('/assets/front') }}/js/jquery.easing.min.js"></script>
    <!-- Gmap helper -->
    <script src="{{ url('/assets/front') }}/http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
    <!--Gmap script-->
    <script src="{{ url('/assets/front') }}/js/gmaps.js"></script>
    <script src="{{ url('/assets/front') }}/js/map-helper.js"></script>
    <!-- jQuery ui js -->
    <script src="{{ url('/assets/front') }}/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <!-- Language Switche  -->
    <script src="{{ url('/assets/front') }}/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <!-- jQuery timepicker js -->
    <script src="{{ url('/assets/front') }}/assets/timepicker/timePicker.js"></script>
    <!-- Bootstrap select picker js -->
    <script src="{{ url('/assets/front') }}/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script> 
    <!-- html5lightbox js -->                              
    <script src="{{ url('/assets/front') }}/assets/html5lightbox/html5lightbox.js"></script>
    <!-- html5lightbox js -->                              
    <script src="{{ url('/assets/front') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--Color Switcher-->
    <script src="{{ url('/assets/front') }}/js/color-settings.js"></script>

    <!--Revolution Slider-->
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ url('/assets/front') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="{{ url('/assets/front') }}/js/main-slider-script.js"></script>

    <!-- thm custom script -->
    <script src="{{ url('/assets/front') }}/js/custom.js"></script>
    <script>
        $('#dynamic-select').bind('change', function () { // bind change event to select
            var url = $(this).val(); // get selected value
            if (url != '') { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    </script>
@if(App()->getLocale() == 'ar')
    
@endif
@stack('js')
</body>
</html>
