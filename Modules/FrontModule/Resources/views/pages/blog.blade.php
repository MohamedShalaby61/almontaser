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
            <div class="offer-box text-center" style="background-image: url({{ url('assets/front/images/resources/offer-box.jpg') }});">
                <div class="big-title">50% <span>Offer</span></div>
                <h3>5 Years Warranty</h3>
                <a class="btn-one" href="#">Pricing Plans</a>
            </div>
            <div class="copy-right-text">
                <p>© Dento 2018, All Rights Reserved.</p>
            </div>
        </div>
    </section>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ url('/images/about_us.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title float-left">
                            <h2>@lang('frontmodule::front.blog')</h2>
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
    <section id="blog-area" class="blog-default-area">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img style="height: 243px;width: 370px" src="{{ asset('') }}/images/blog/{{ $blog->photo }}" alt="Awesome Image">
                                <div class="categorie-button">
                                    <a class="btn-one" href="{{ route('categories',$blog->categories->first()->id) }}">{{$blog->categories->first()->title}}</a>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><a href="#">{{ $blog->admin->name }}</a></li>
                                        <li><a href="#">{{ $blog->created_at->diffForHumans() }}</a></li>
                                    </ul>
                                </div>
                                <h3 class="blog-title"><a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">{{ $blog->title }}</a></h3>
                                <div style="width:300px;height:48px;" class="text-box">
                                    {!! substr($blog->description,0,150) !!}
                                </div>
                                <div class="readmore-button">
                                    <a class="btn-two" href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}"><span class="flaticon-next"></span>{{ __('frontmodule::front.con_read') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="post-pagination text-center">
                        <li class="text-center">{{ $blogs->links() }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End blog area-->




@endsection
