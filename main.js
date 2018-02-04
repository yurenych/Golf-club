$(document).ready(function(){
	$('.slider').slick( {
		autoplay: true,
  	slidesToShow: 2,
  	slidesToScroll: 1,
  	speed: 600,
  	responsive: [
  		{
  			breakpoint: 992,
  			settings: {
        	arrows: false,
        	slidesToShow: 1,
        	speed: 300
      	}
      }	
  	]
	});
});

$(document).ready(function(){
	$.fatNav();
});