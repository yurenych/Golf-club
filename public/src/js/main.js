$(document).ready(function(){
  if (!$(".klub").length) {
    return null
  }
	$('.slider').slick( {
		autoplay: true,
  	slidesToShow: 2,
  	slidesToScroll: 1,
  	speed: 600,
    arrows: true,
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

$(document).ready( function () {
  if (!$(".turnieje").length) {
    return null
  }
    $('#table_id').DataTable({
      responsive: true,
      "searching": false,
      "info": false,
      "paging": false,
    });
} );

$(document).ready( function () {
  $(".videoContainer").click(function(e){
    $(".dark-body").css("display","block");
    $(".viewVideoContainer").addClass('visible');
    $('body').addClass('stop-scrolling');
  });
  $(".dark-body, .closeButton").click(function(e){
    $(".dark-body").css("display","none");
    $(".viewVideoContainer").removeClass('visible');
    $('body').removeClass('stop-scrolling');
  });
})