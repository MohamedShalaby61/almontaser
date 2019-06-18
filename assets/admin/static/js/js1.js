$(document).ready(function(){
		
 	  //scroll to top
  var btn = $('.btn-top');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show'); 
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '2000');
});
	//end scroll
	
	$('.carousel').carousel({
  interval: 3000
});
	//start show content login
	$('#btn-login').click(function() {   
    $('#content-login').animate({width:'toggle'},400);
});
		$('.fa-times').click(function() {   
    $('#content-login').animate({width:'toggle'},400);
});
	//end show content login
	
		//start fixed navbr
    $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if(scroll > 10){
			$('.navbar').css({
				background:"rgba(0,0,0,0.7)"
			})
		}else{
			$('.navbar').css({
				background:"transparent"
			})
		}
	});
	//end fixed navbar
	
});