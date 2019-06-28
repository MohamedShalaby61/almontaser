@extends('frontmodule::layouts.app')

@section('content')
<!-- Hidden Navigation Bar -->
<section class="hidden-bar right-align">
    <div class="hidden-bar-closer">
        <button><span class="flaticon-remove"></span></button>
    </div>
    <div class="hidden-bar-wrapper">
        <div class="logo">
            <a href="index.html"><img src="images/resources/logo-3.png" alt=""/></a>
        </div>
        <div class="contact-info-box">
            <h3>Contact Info</h3>
            <ul>
                <li>
                    <h5>Address</h5>
                    <p>Romanian  9520 Faires Farm Road,<br> Carlsbad, NC 28213.</p>
                </li>
                <li>
                    <h5>Phone</h5>
                    <p>Phone 1: +1 555-7890-123</p>
                </li>
                <li>
                    <h5>Email</h5>
                    <p>supportyou@example.com</p>
                </li>
            </ul>
        </div>       
        <div class="newsletter-form-box">
            <h3>Newsletter Subscribe</h3>
            <span>Get healthy tips & latest updates in inbox.</span>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12">
                        <input type="email" name="email" placeholder="Email Address..."> 
                        <button type="submit"><span class="flaticon-arrow"></span></button>    
                    </div>
                </div>
            </form>
        </div>
        <div class="offer-box text-center" style="background-image: url(images/resources/offer-box.jpg);">
            <div class="big-title">50% <span>Offer</span></div>
            <h3>5 Years Warranty</h3>
            <a class="btn-one" href="#">Pricing Plans</a>    
        </div>
        <div class="copy-right-text">
            <p>© Dento 2018, All Rights Reserved.</p>
        </div> 
    </div>
</section>
<!-- End Hidden Bar -->     

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ url('/images/about_us.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>{{$service->title}}</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">@lang('frontmodule::front.home')</a></li>
                            @if(App()->getLocale() == 'ar')
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                            @else
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            @endif
                            <li class="active">@lang('frontmodule::front.services')</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 
<section class="specialities-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="specialities-single-content">
                    <div class="specialities-title fix">
                        <div class="icon-holder">
                            <span class="icon-tooth1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
                            </span>
                        </div>
                        <div class="title-holder">
                            <h2>{{$service->title}}</h2>
                        </div>
                    </div>
                    <div class="specialities-top-content">
                        <div class="specialities-carousel owl-carousel owl-theme">
                            
                            <div class="single-item">
                                <img src="{{ url('assets/front') }}/images/services/service-single/specialities-1.jpg" alt="Awesome Image">    
                            </div>      
                        </div>
                    </div>
                    <div class="what-wedo-content">
                        <div class="top fix">
                            {!! $service->description !!}
                        </div>
                    </div>
                    <div class="transform-smile-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="text-holder">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="video-holder-box2" style="background-image: url(images/services/service-single/video-bg.jpg);">
                                    <div class="icon-holder">
                                        <div class="icon">
                                            <div class="inner">
                                                <a class="html5lightbox" title="Dento Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                    <span class="flaticon-multimedia"></span>
                                                </a>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-7 col-md-9 col-sm-12">
                <div class="specialities-sidebar">
                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <div class="inner">
                            <h3>@lang('frontmodule::front.other_services')</h3>
                            <ul class="specialities-categories">
                                @if($services->count() > 0)
                                    @foreach($services as $service)
                                        <li><a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">{{$service->title}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!--End Single sidebar-->
                    
                    <!--Start Single sidebar-->
                    <div class="single-sidebar text-center">
                        <div class="brochures-sidebar">
                            <h3>@lang('frontmodule::front.branches')</h3>
                            <ul class="our-brochures">
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="icon-word"></span>    
                                        </div>
                                        <div class="title-holder">
                                            <p>@lang('frontmodule::front.first_branche')<br></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="icon-text-file"></span>    
                                        </div>
                                        <div class="title-holder">
                                            <p>@lang('frontmodule::front.second_branche')<br></p>
                                        </div>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <!--End Single sidebar-->
                    
                    <div class="sidebar-appointment-box text-center">
                        <span class="icon-calendar"></span>
                        <h3>@lang('frontmodule::front.ask')</h3>
                        <p>@lang('frontmodule::front.you_ask')</p>    
                        <a class="btn-one" href="{{ route('question') }}">@lang('frontmodule::front.ask')</a>
                    </div>
                    
                </div>    
            </div>
            
        </div>
    </div>
</section>
@endsection
