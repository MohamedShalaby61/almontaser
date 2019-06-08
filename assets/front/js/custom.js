$(function(){

	// Disable # Links
	$("a[href='#']").click(function(e){
		e.preventDefault();
	});

	// Change Navbar In Scrolling
	$(window).on("load scroll",function(){
		if($(this).scrollTop() > 0){
			$(".navbar").css("padding","10px 0");
		}else {
			$(".navbar").css("padding","20px 0");
		}
	});

	// Running Header Carousel
	$(".header .carousel").carousel({
		interval: 6000
	});

	// Make Skills Circles
	$(".skill").circleProgress({
		size: 200,
		emptyFill: "#FFF",
		startAngle: 4.7,
		thickness: "20",
		fill: {
			color: "#2ECC71"
		}
	});

	// Running Portfolio
	$(".portfolio").mixItUp();

	// Running Counter
	$(".counter").counterUp({
		delay: 50,
		time: 3000
	});

	// Running Testimonials Carousel
	$(".testimonials .carousel").owlCarousel({
		items: 1,
		rtl: true,
		loop: true,
		nav: true,
		navRewind: false,
		dots: false,
		autoplay: true,
		smartSpeed: 2000,
		navText: ["<i class=\"fa fa-angle-right\"></i>","<i class=\"fa fa-angle-left\"></i>"]
	});

	// Running Clients Carousel
	$(".clients").owlCarousel({
		items: 4,
		rtl: true,
		loop: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		responsive: {
			0: {
				items: 2
			},
			768: {
				items: 4
			}
		}
	});

	// Change Scroll
	$("html").niceScroll({
		cursorcolor: "#2ECC71",
		cursoropacitymin: 1,
		cursorwidth: "10px",
		cursorborder: "0 none",
		cursorborderradius: "0",
		zindex: 999999,
		smoothscroll: false
	});

	// Running Smooth Scroll
	smoothScroll.init({offset: 70});

	// Running Contact Form
/*	 $("#contactform").submit(function(){
	 $.ajaxSetup({
				headers: {
			  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					  } });
		$.ajax({
	 		url: "/front_panel/home",
			type: "post",
	 		data: $("#contactform").serialize(),
	 		success: function(data){
	 			$(".rep").html(data);
	 		},
	 		error: function(){
	 			$(".rep").html("خطأ!, أعد تحديث الصفحة");
			}
	 	});
	 	return false;
	 });*/

	// Remove Load Section
	$(window).load(function(){
		$(".load").fadeOut(1000,function(){
			$(this).remove();
		});
	});

});