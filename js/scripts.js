var t = $('#headerNav').offset().top - 0;


$(function(){

	console.log("It's working");

	// Flickity for Homepage Featured Posts Gallery
	$('.featured-posts-gallery').flickity({
	  // options
	  cellAlign: 'left',
	  wrapAround: true,
	  setGallerySize: false,
	  // autoPlay: true,
	  pageDots: false
	});

	$("#headerNav").sticky({
		topSpacing: 0
	});

	$(document).scroll(function(){
	    if($(this).scrollTop() > t)
	    {   
	        $('#headerNav').css({"border-bottom":"1px solid #EEEEEE"});
	    } 
	});

	$(document).scroll(function(){
	    if($(this).scrollTop() < t)
	    {   
	        $('#headerNav').css({"border":"none"});
	    } 
	});


});

