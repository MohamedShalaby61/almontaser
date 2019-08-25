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
        <div class="offer-box text-center" style="background-image: url({{ url('images/resources/offer-box.jpg') }});">
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
                       <h2>@lang('frontmodule::front.contact_us')</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">@lang('frontmodule::front.home')</a></li>
                            @if(App()->getLocale() == 'ar')
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                            @else
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            @endif
                            <li class="active">@lang('frontmodule::front.contact_us')</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="contact-title">
                        <h2>@lang('frontmodule::front.contact_us')</h2>
                        <p>@lang('frontmodule::front.contact_us_message')</p>
                    </div>
                    <form class="default-form" action="{{ route('send_contact_us') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">
                                    <input type="text" name="name" value="" placeholder="{{ __('frontmodule::front.name') }}*" required="">
                                </div>
                                <div class="input-box">
                                    <input type="email" name="email" value="" placeholder="{{ __('frontmodule::front.email') }}*" required="">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="phone" value="" placeholder="{{ __('frontmodule::front.phone') }}*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-box">
                                    <textarea name="message" placeholder="{{ __('frontmodule::front.your_message') }}*" required=""></textarea>
                                </div>
                                <div class="button-box">
                                    <input  class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" >@lang('frontmodule::front.send')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End contact form area-->

@include('commonmodule::includes.swal')
@endsection
@push('css')
    <style>
        .modal {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 )
            url('http://i.stack.imgur.com/FhHRx.gif')
            50% 50%
            no-repeat;
        }

        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading .modal {
            overflow: hidden;
        }

        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal {
            display: block;
        }
    </style>
@endpush
