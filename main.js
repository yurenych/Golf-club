$(document).ready(function(){
  if (!$(".klub").length) {
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
    autoplay: true,
    arrows: false,
    fade: true,
    infinite: true,
    asNavFor: '.slider-nav',
    arrows: true,
    prevArrow: '.buttonPrev',
    nextArrow: '.buttonNext'
  });
  $('.slider-nav').slick({
    autoplay: true,
    speed: 600,
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
  });
});

