<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website Title -->
		<title>{{$config['title'] }} </title>
		<!-- Website Description & Keywords -->
		<meta name="description" content="{{$config['meta_desc'] }}">
		<meta name="keywords" content="{{$config['meta_keywords'] }}">
		<meta name="robots" content="index, follow">
	<meta name="_token"  content="{{csrf_token()}}">
		<!-- Website Fonts -->
		<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="{{asset('assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
		<!-- CSS Links -->
		<link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/front/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/front/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
		<!-- Website Favicon -->
		<link href="favicon.ico" rel="icon">
		<link href="favicon.ico" rel="shortcut icon">
		<!-- HTML5 Scripts For IE -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target="#navbar" data-offset="70">

		<!-- Navbar Start -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand" href="#"><img src="{{asset('assets/front/img/logo.jpeg')}}"  alt="Logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-left">
					<li class="active"><a href="#slider"> {{  trans('frontmodule::index.home')}}</a></li>
					<li><a data-scroll href="#about">{{trans('frontmodule::index.aboutcompany')}}</a></li>
						<li><a data-scroll href="#portfolio">{{trans('frontmodule::index.products')}} </a></li>
					<li><a data-scroll href="#services">{{trans('frontmodule::index.services')}}</a></li>
					<li><a data-scroll href="#testimonials">{{ trans('frontmodule::index.clients') }}</a></li>
					<li><a data-scroll href="#contact">{{ trans('frontmodule::index.contact us') }}</a></li>
					<li><a data-scroll href="{{ url('locale/ar') }}">{{ trans('frontmodule::index.arabic') }}</a></li>
					<li><a data-scroll href="{{ url('locale/en') }}">{{ trans('frontmodule::index.english') }}</a></li>
						<!--  -->
					</ul>
				</div>

			</div>
		</nav>
		<!-- Navbar End -->

		<!-- Header Start -->
		<header class="header" id="header">

			<div class="overlay"></div>

			<div id="header-carousel" class="carousel slide" data-ride="carousel">
				
				<ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#header-carousel" data-slide-to="1" ></li>
					<li data-target="#header-carousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
						@foreach ($sliders as $item)
                    <div class="item active">
                    <img src="{{url('public/images/sliders/') }}/{{$item->photo}}" alt="Slide">
							<div class="carousel-caption">
								<h2> {{$item->title}} </h2>
								<p>
								{{$item->description}}
								</p>
							</div>
                        </div>
                        @endforeach

						
				</div>

				<a class="left carousel-control" href="#header-carousel" role="button" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>

				<a class="right carousel-control" href="#header-carousel" role="button" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>

		</header>
		<!-- Header End -->

		<!-- About Start -->
		<div class="about text-center" id="about">
		<h3 class="maintitle"> {{ trans('frontmodule::index.who we ?') }}</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-content">
						<h3 class="contenttitle">{{$config['meta_title']}}</h3>
							<p>{{$config['about_index'] }} </p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="about-content">
							<img src="{{asset('assets/front/img/about-img.jpg')}}" alt="عن شركه فيردى">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About End -->

	

		<!-- Portfolio Start -->
		<div class="portfolio text-center" id="portfolio">
			<h3 class="maintitle"> {{ trans('frontmodule::index.products') }} </h3>
			<div class="container">
				<ul class="port-controls">
				<li class="filter active" data-filter="all">{{ trans('frontmodule::index.all') }}</li>
					@foreach ($categs as $item)
						
					
				<li class="filter" data-filter=".filter1">{{$item->title}}</li>
					@endforeach
				</ul>

				<ul class="port-list">
                    @foreach ($products as $item)
                        
                   
					<li class="mix filter1">
                    <img src="{{  url('public/images/products/') }}/{{$item->photo}}" alt="Port 1">
						<div class="overlay">
							<div class="links">
								<a href="#"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</div>
						</div>
                    </li>
                    @endforeach

					

				</ul>

			<a class="linkstyle" href="#">{{ trans('frontmodule::index.more products') }}</a>
			</div>
		</div>
		<!-- Portfolio End -->

		<!-- Services Start -->
		<div class="services text-center" id="services">
		<h3 class="maintitle">{{ trans('frontmodule::index.services') }}</h3>

			<div class="container">
				<div class="row">

					@foreach ($categories as $item)
                        
                   
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div><i class="fa fa-paint-brush"></i></div>
							<h4> {{$item->title}} </h4>
							<p>
									{{$item->description}}

							</p>
						</div>
                    </div>
                    @endforeach

				</div>
			</div>
		</div>
		<!-- Services End -->

		<!-- Info Start -->
		<div class="info text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<h3 class="maintitle">فيرداى والتنميه </h3>
					<p>{{$config['about'] }}</p>
								
					<a data-scroll class="linkstyle" href="#contact"> {{ trans('frontmodule::index.contact us') }}</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Info End -->



		<!-- Testimonials Start -->
		<div class="testimonials text-center" id="testimonials">
		<h3 class="maintitle">{{ trans('frontmodule::index.client opinion') }}</h3>
			<div class="container">
				<div class="col-lg-12">
					<div class="carousel">
						@foreach ($monial as $item)
							
						
						<div class="item">
							<img src="{{  url('public/images/testimonials/') }}/{{ $item->photo }}" alt="Face 1">
							<span>{{$item->name}}</span>
						<hr>
							<span>{{$item->quote}}</span>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials End -->

	
		<!-- Contact Start -->
		<div class="contact text-center" id="contact">
		<h3 class="maintitle">{{ trans('frontmodule::index.contact us') }}</h3>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form id="contactform"  >
							
							<input type="text" name="contactname" id="name" placeholder="الاسم ...">
							<input type="email" name="contactemail"  id="email" placeholder="البريد الالكتروني ..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							<textarea name="contactmessage" id="message" placeholder="الرسالة ..."></textarea>
							<input type="submit" id="submit" name="contactsubmit" value="إرسال">
						</form>
						<p class="rep"></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact End -->

		<!-- Footer Start -->
		<div class="footer text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="links">
							<a href="{{$config['fb_link'] }}" data-sn="facebook"><i class="fa fa-facebook"></i></a>
							<a href="{{$config['tw_link'] }}" data-sn="twitter"><i class="fa fa-twitter"></i></a>
							<a href="{{$config['g+_link'] }}" data-sn="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="{{$config['youtube'] }}" data-sn="youtube"><i class="fa fa-youtube"></i></a>
							<a href="{{$config['be_link'] }}" data-sn="behance"><i class="fa fa-behance"></i></a>
						</div>

						<ul class="nav nav-pills">
							<li role="presentation"><a href="#">شروط الاستخدام</a></li>
							<li role="presentation" class="active"><a data-scroll href="#header"><i class="fa fa-angle-up"></i></a></li>
							<li role="presentation"><a href="#">سياسة الخصوصية</a></li>
						</ul>

						<div class="hr"></div>
						<div class="rights">
							جميع الحقوق محفوظة &copy; 2018
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Load Start -->
		<div class="load">
			<div class="spinner">
				<div class="part"></div>
				<div class="part"></div>
			</div>
		</div>
		<!-- Load End -->
		<script>
				jQuery(document).ready(function(){
				jQuery('#submit').click(function(e){
				  e.preventDefault();
				   $.ajaxSetup({
							headers: {
						  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					  }
				  });
				   jQuery.ajax({
					  url: "{{ url('/fornt_panel/home') }}",
					  method: 'post',
					  data: {
						 name: jQuery('#name').val(),
						 email: jQuery('#email').val(),
						 message: jQuery('#message').val()
					  },
					  success: function(result){
						 jQuery('.alert').show();
						 jQuery('.alert').html(result.success);
					  }});
				   })
				});
		  </script>
		

		<!-- Scripts -->
		<script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/front/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('assets/front/js/jquery.mixitup.min.js')}}"></script>
		<script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('assets/front/js/jquery.nicescroll.min.js')}}"></script>
		<script src="{{asset('assets/front/js/smooth-scroll.min.js')}}"></script>
		<script src="{{asset('assets/front/js/custom.js')}}"></script>
	
	
	</body>
</html>