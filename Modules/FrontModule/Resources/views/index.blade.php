{{--{{ dd($sliders) }}--}}
@extends('frontmodule::layouts.app')

@section('content')
    <section class="main-slider">
                <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
                    <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                        <ul>
                            @include('frontmodule::pages.slide')
                        </ul>
                    </div>
                </div>
            </section>


<!--Start fact counter area-->
<!--Start Welcome area-->
<section class="welcome-area sec-pd1">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>@lang('frontmodule::front.welcome_message')</h3>
            <h1>@lang('frontmodule::front.website_words')</h1>
        </div>
        <div class="row">
            <!--Start Single Welcome Box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-welcome-box text-center">
                    <div class="icon-holder">
                        <img src="{{url('assets/front')}}/images/icon/icon-1.png" alt="Icon">
                    </div>
                    <div class="text-holder">
                        <h3>Advanced Dentistry</h3>
                        <p>Denouncing pleasure & praising pain was born and wewill give you a complete account of the system.</p>
                        <a class="btn-one" href="#">Services</a>
                    </div>    
                </div>   
            </div>
            <!--End Single Welcome Box-->
            <!--Start Single Welcome Box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-welcome-box text-center">
                    <div class="icon-holder">
                        <img src="{{url('assets/front')}}/images/icon/icon-2.png" alt="Icon">
                    </div>
                    <div class="text-holder">
                        <h3>Quality Equipment</h3>
                        <p>Know how pursue pleasure rationally encounter consequences that extremely anyone loves pursues.</p>
                        <a class="btn-one" href="#">Buy Now</a>
                    </div>    
                </div>   
            </div>
            <!--End Single Welcome Box-->
            <!--Start Single Welcome Box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-welcome-box text-center">
                    <div class="icon-holder">
                        <img src="{{url('assets/front')}}/images/icon/icon-3.png" alt="Icon">
                    </div>
                    <div class="text-holder">
                        <h3>Comfortable Clinic</h3>
                        <p>To take a trivial example, which us ever undertakes laborious physical exercise, to obtain some advantage.</p>
                        <a class="btn-one" href="#">Prices</a>
                    </div>    
                </div>   
            </div>
            <!--End Single Welcome Box-->
        </div>
    </div>
</section>
<!--End Welcome area-->
<!--End fact counter area-->
<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image: url(images/parallax-background/fact-counter-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <ul class="clearfix">
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-tooth-3"></span>    
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="4257" data-speed="5000" data-refresh-interval="50">4257</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('frontmodule::front.project_complete')</h3>
                            </div>
                            <div class="text">
                                <p>@lang('frontmodule::front.complete_message')</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="600ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-doctor-1"></span>    
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="18" data-speed="5000" data-refresh-interval="50">18</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('frontmodule::front.expert_dentists')</h3>
                            </div>
                            <div class="text">            
                                <p>@lang('frontmodule::front.expert_message')</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="900ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-hospital"></span>    
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="6" data-speed="5000" data-refresh-interval="50">6</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('frontmodule::front.branches_in_city')</h3>
                            </div>
                            <div class="text">
                                <p>@lang('frontmodule::front.branches_message')</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End fact counter area-->
<!--Start About Area-->
<section class="about-area home2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-image-holder">
                    <img src="{{ url('images/config') }}/{{ $config['logo'] }}" alt="Awesome Image">
                </div>    
            </div>
            <div class="col-xl-6">
                <div class="inner-content">
                    <div class="sec-title">
                        <h3>{{ __('frontmodule::front.about_us') }}</h3>
                        <h1>{{ $config['about'] }}</h1>
                    </div>
                    <div class="about-text-holder">
                        {!! $config['about_index'] !!}
                        <div class="author-box fix">
                            <div class="img-box">
                                <img src="{{ url('/') }}/images/doctor.png" alt="Awesome Image">
                            </div>
                            <div class="text-box">
                                @if($doctor !== null)
                                <h3>@lang('frontmodule::front.dr'). {{ $doctor->name }}</h3>
                                <span>{{ $doctor->job_title }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="read-more">
                            <a class="btn-two" href="#"><span class="flaticon-next"></span>@lang('frontmodule::front.more_about')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Area-->

<!--Start services style2 area-->
<section class="services-style2-area sec-pd1">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>@lang('frontmodule::front.specialities')</h3>
            <h1>@lang('frontmodule::front.specialities_message')</h1>
            <p>@lang('frontmodule::front.specialities_message2')</p>
        </div>
        @if($features->count() == 6)
            <div class="row">
                @foreach($features as $feature)
                    <!--Start single solution style1-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-solution-style2 text-center">
                            <div class="icon-holder">
                                <img style="width: 110px;height: 110px" src="{{url('images/service')}}/{{ $feature->photo }}">
                            </div>
                            <div class="text-holder">
                                <h3>{{ $feature->title }}</h3>
                                <p>{!! substr($feature->description,0,101) !!}</p>
                                <div class="readmore">
                                    <a href="#"><span class="flaticon-next"></span></a>
                                    <div class="overlay-button">
                                        <a href="{{ route('single_service',str_replace(' ','-',$feature->title)) }}">@lang('frontmodule::front.more')</a>
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
<!--End services style2 area-->

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
                    <img style="width: 460px;height: 600px;" src="{{ url('/') }}/images/team-2.png" alt="Awesome Image">
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
            <!-- Modal HTML -->
            
        </div>
    </div>    
</section>
<!--End Appointment Area-->

<section class="choose-area">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>@lang('frontmodule::front.why_us')</h3>
            <h1>@lang('frontmodule::front.feature_why_us')</h1>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="choose-carousel owl-carousel owl-theme" style="background-image: url({{ url('/images/choose.jpg') }});">
                    @foreach($blogs as $blog)
                        <div class="single-choose-item text-center">
                            <h6>{{$blog->created_at->format('Y-m-d')}}</h6>
                            <h3>{{$blog->title}}</h3>
                            {!! substr($blog->description,0,100) !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-6">
                <div class="video-holder-box" style="background-image: url({{ url('/images/choose2.jpg') }});">
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
</section> 

<!--Start team area-->
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
                            <div class="img-holder">
                                @if($doctor->photo != null)
                                <img style="" src="{{ url('/') }}/images/team/{{$doctor->photo}}" alt="Awesome Image">
                                @else
                                <img style="" src="{{ url('/') }}/images/doctor.png" alt="Awesome Image">    
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
<!--End team area-->
<div class="modal"><!-- Place at bottom of page --></div>

<!--Start Testimonial Sec style2-->
<section class="testimonial-sec style2">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title max-width text-center">
                    <h3>@lang('frontmodule::front.testimonials')</h3>
                    <h1>@lang('frontmodule::front.say_customers')</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-carousel2 owl-carousel owl-theme">
                    @if($reviews->count() > 0)
                        @foreach($reviews as $review)
                        <!--Start Single Testimonial Item-->
                        <div class="single-testimonial-style2 text-center">
                            <div class="quote-icon">
                                <img src="{{ url('assets/front') }}/images/icon/1.png" alt="Quote Icon">
                            </div>
                            <div class="text-holder">
                                <p>{!! $review->quote !!}</p>
                            </div>
                            <div class="review-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="name">
                                <h3>{{ $review->name }}</h3>
                                <span>{{$review->job_title}}</span>
                            </div>
                            <div class="quote-icon2">
                                <img src="{{ url('assets/front') }}/images/icon/2.png" alt="Quote Icon">
                            </div>    
                        </div>
                        @endforeach
                    @endif
                </div> 
            </div>
        </div>  
    </div>    
</section>
<!--End Testimonial Sec style2-->
<!--Start latest blog area-->
<section class="latest-blog-area sec-pd1 pd-btm60">
    <div class="container inner-content">
        <div class="sec-title max-width text-center">
            <h3>{{__('frontmodule::front.news_tips')}}</h3>
            <h1>{{__('frontmodule::front.lastest_blogs')}}</h1>
        </div>
        <div class="row">
        @if($blogs->count() > 0)
            @foreach($blogs as $blog)
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            @if($blog->photo !== null)
                            <img style="height: 243px;width: 370px" src="{{ url('/') }}/images/blog/{{$blog->photo}}" alt="Image">
                            @else
                            <img style="height: 243px;width: 370px" src="{{ url('assets/front') }}/images/blog/lat-blog-1.jpg" alt="
                            Awesome Image">
                            @endif
                            <div class="categorie-button">
                                <a class="btn-one" href="#">{{$blog->categories->first()->title}}</a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <div class="author-thumb">
                                    <img src="{{ url('assets/front') }}/images/blog/auth-1.png" alt="Image">
                                </div>
                                <ul class="meta-info">
                                    <li>{{$blog->admin->name}}</li>
                                    <li><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="blog-single.html">{{$blog->title}}</a></h3> 
                            <div class="text-box">
                                <p>{!! substr($blog->description,0,150) !!}</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="#"><span class="flaticon-next"></span>@lang('frontmodule::front.read_more')</a>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
            @endforeach
        @endif
        </div>
    </div>
</section>
<!--End latest blog area-->
<!--Start Brand area-->  
@include('commonmodule::includes.swal')
<!--End Brand area--> 
@stop
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
