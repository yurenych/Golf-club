$(document).ready(function(){
  if (!$(".klub, .someClass").length) {
    return null
  }
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


$(document).ready(function(){
  if (!$(".galeria, .galeria").length) {
    return null
  }
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
});

