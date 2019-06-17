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
                       <h2>@lang('frontmodule::front.ask')</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">@lang('frontmodule::front.home')</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">@lang('frontmodule::front.ask')</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start Appointment Area-->
<section id="appointment" class="appointment-area">
    <div class="appointment-title-box" style="background-image: url(images/parallax-background/appointment-title-bg.jpg);">
        <div class="sec-title text-center">
            <h3>@lang('frontmodule::front.appointment')</h3>
            <h1>@lang('frontmodule::front.online_booking')</h1>
        </div>    
    </div>
    <div class="container appointment-content">
        <div class="row">
           
            <div class="col-xl-6 col-lg-6">
                <div class="appointment-image text-center">
                    <img style="width: 460px;height: 600px;" src="{{ url('/') }}/images/Doctor-PNG-File-Download-Free.png" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="appointment-form">
                    <div class="text">
                        <p>@lang('frontmodule::front.question_message') {{$config['phone']}}. @lang('frontmodule::front.contact') {{ $work_hour->day }} {{ $work_hour->from }} – {{ $work_hour->to }}</p>
                    </div>
                    <form name="appointment-form" id="send_form" action="#" method="get">
                        <input id="_token" name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box">   
                                    <input type="text" id="name" name="name" value="" placeholder="{{__('frontmodule::front.name')}}*" required="">
                                </div>
                                <div class="input-box">   
                                    <input type="text" id="phone" name="phone" value="" placeholder="{{__('frontmodule::front.phone')}}">
                                </div>   
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box"> 
                                    <input type="email" id="email" name="email" value="" placeholder="{{__('frontmodule::front.email')}}*" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-box">    
                                    <textarea name="message" id="message" placeholder="{{__('frontmodule::front.your_message')}}" required=""></textarea>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="button-box">
                                    <button class="btn-one customer_btn" type="submit">@lang('frontmodule::front.send')</button>
                                </div>
                                <div class="modal"><!-- Place at bottom of page --></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>    
</section>
<!--End Appointment Area-->
@include('commonmodule::includes.swal')
@endsection
@push('js')
    <script>
        $('.customer_btn').on('click',function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var message = $('#message').val();
            var _token = $('#_token').val();
            $.ajax({
                'method':'post',
                'data':{_token:_token,name:name,phone:phone,email:email,message:message},
                'url':'{{ route("send_message") }}',
                success:function (data) {
                    $('#send_form').trigger("reset");
                    swal("{{__('commonmodule::swal.good')}}", "{{__('commonmodule::swal.send')}}", "success", { button: "{{__('commonmodule::swal.btn')}}", });

                },
                //error: function(XMLHttpRequest, textStatus, errorThrown){
                //    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                //}
            });
            $body = $("body");

            $(document).on({
                ajaxStart: function() { $body.addClass("loading");    },
                 ajaxStop: function() { $body.removeClass("loading"); }    
            });

            
        })
    </script>
@endpush
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
