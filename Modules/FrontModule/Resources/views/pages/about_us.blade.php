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
                       <h2>@lang('frontmodule::front.about_us')</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">@lang('frontmodule::front.home')</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">@lang('frontmodule::front.about_us')</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start About Area-->
<section class="about-area home2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-image-holder wow fadeInLeft" data-wow-delay="900ms">
                    <img src="{{url('/')}}/images/about.jpg" alt="Awesome Image">
                </div>    
            </div>
            <div class="col-xl-6">
                <div class="inner-content">
                    <div class="sec-title">
                        <h3>@lang('frontmodule::front.about_us')</h3>
                        <h1>@lang('frontmodule::front.about_us_message')</h1>
                    </div>
                    <div class="about-text-holder">
                        {!! $config['about_index'] !!}
                        <div class="author-box fix">
                            <div class="img-box">
                            </div>
                            <div class="text-box">
                                @if($doctor !== null)
                                <h3>@lang('frontmodule::front.dr'). {{ $doctor->name }}</h3>
                                <span>@lang('frontmodule::front.dr'). {{ $doctor->job_title }}</span>
                                @endif
                            </div>
                            <div class="signatire-box">
                            </div>
                        </div>
                        <div class="read-more">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>@lang('frontmodule::front.about_us')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Area-->

<section class="choose-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>@lang('frontmodule::front.why_us')</h3>
            <h1>@lang('frontmodule::front.feature_why_us')</h1>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="choose-carousel owl-carousel owl-theme" style="background-image: url({{ url('/images/choose.jpg') }});width:590px;height:295px">
                    @foreach($blogs as $blog)
                        <div class="single-choose-item text-center">
                            <h6>{{$blog->created_at->format('Y-m-d')}}</h6>
                            <h3>{{$blog->title}}</h3>
                            {!! substr($blog->description,0,100) !!}
                        </div>
                    @endforeach
                </div>
            </div>
            @if($video !== null)
            <div class="col-xl-6">
                <div class="video-holder-box" style="background-image: url({{ url('/images/choose2.jpg') }});">
                    <div class="icon-holder">
                        <div class="icon">
                            <div class="inner">
                                <a class="html5lightbox" title="Dento Video Gallery" href="{{ $video->link }}">
                                    <span class="flaticon-multimedia"></span>
                                </a>
                            </div>   
                        </div>
                    </div>    
                </div>
            </div>
            @endif
        </div>
    </div>
</section> 

<section class="team-area">
    <div class="container">
        <div class="sec-title text-center">
            <h3>@lang('frontmodule::front.special_doctors')</h3>
            <h1>@lang('frontmodule::front.highly_doctors')</h1>
        </div> 
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="team-carousel owl-carousel owl-theme">
                   @if($doctors->count() > 0)
                       @foreach($doctors as $doctor)
                        <!--Start single item member-->
                        <div class="single-team-member">
                            <div style="width: 370px;height: 420px;" class="img-holder">
                                @if($doctor->photo != null)
                                <img src="{{ url('/') }}/images/team/{{$doctor->photo}}" alt="Awesome Image">
                                @else
                                <img src="{{ url('/') }}/images/doctor.png" alt="Awesome Image">    
                                @endif
                                <div class="overlay-style-one"></div>
                                <div class="text-holder text-center">
                                    <h3>@lang('frontmodule::front.dr') {{ $doctor->name }}</h3>
                                    <span>{{$doctor->job_title}}</span>
                                    <div class="button">
                                        <a class="btn-one" href="#">@lang('frontmodule::front.more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single item member-->
                        @endforeach
                    @endif
                    <!--Start single item member-->
                    <!--End single item member-->
                    
                </div>
            </div>
        </div>
    </div>
</section>
 

@endsection