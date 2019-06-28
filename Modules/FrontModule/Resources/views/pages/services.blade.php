{{--{{ dd($sliders) }}--}}
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
                       <h2>@lang('frontmodule::front.services')</h2>
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

<section class="services-style1-area spec-page">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>@lang('frontmodule::front.services')</h3>
            <h1>@lang('frontmodule::front.services_here')</h1>
        </div>
        @if($services->count() == 6)
            <div class="row">
                @foreach($services as $service)
                    <!--Start single solution style1-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-solution-style2 text-center">
                            <div class="icon-holder">
                                <img style="width: 110px;height: 110px" src="{{url('images/service')}}/{{ $service->photo }}">
                            </div>
                            <div class="text-holder">
                                <h3>{{ $service->title }}</h3>
                                <p>{!! substr($service->description,0,101) !!}</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">@lang('frontmodule::front.more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single solution style1-->
                @endforeach    
        </div>
        @endif
    </div>
</section>

@endsection
