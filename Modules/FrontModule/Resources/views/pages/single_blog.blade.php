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
                            <h2>{{$blog->title}}</h2>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="{{url('/')}}">@lang('frontmodule::front.home')</a></li>
                                @if(App()->getLocale() == 'ar')
                                    <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                @else
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                @endif
                                <li class="active">@lang('frontmodule::front.blogs')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
    <!--Start blog area-->
    <section id="blog-area" class="blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="blog-post">
                        <!--Start Single blog Post-->
                        <div class="single-blog-post single_post">
                            <div class="top-box">
                                <div class="left post-info-style1">
                                    <h3>{{ $blog->created_at->format('D') }}</h3>
                                    <div class="borders"></div>
                                    <p>{{ $blog->created_at->format('M') }}</p>
                                </div>
                                <div class="right">
                                    <div class="title-holder">
                                        <h3 class="blog-title">{{ $blog->title }}</h3>
                                    </div>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li><a href="#"><span class="flaticon-pencil"></span>{{ $blog->admin->name }}</a></li>
                                            <li><a href="#"><span class="flaticon-document"></span>{{ $blog->categories->first()->title }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-image">
                                <div class="image-box">
                                    <img src="{{ asset('') }}/images/blog/{{ $blog->photo }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box1">
                                {!! $blog->description !!}
                            </div>
                            </div>
                        </div>
                        <!--End Single blog Post-->

                    </div>
                <!--Start sidebar Wrapper-->
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sidebar-title">
                                <h3>{{ __('frontmodule::front.categories') }}</h3>
                            </div>
                            <ul class="categories clearfix">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('categories',$category->id) }}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sidebar-title">
                                <h3>{{ __('frontmodule::front.recent_posts') }}</h3>
                            </div>
                            <ul class="recent-post">
                                @foreach($blogs as $blog)
                                    <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('') }}/images/blog/{{ $blog->photo }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <p><span class="icon-date"></span>{{ $blog->created_at->format('d-m-y') }}</p>
                                        <h5 class="post-title"><a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">{{ $blog->title }}</a></h5>
                                        <a class="readmore" href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">{{__('frontmodule::front.con_read')}}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End single-sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
                </div>

            </div>
        </div>
    </section>
    <!--End blog area-->
@endsection
