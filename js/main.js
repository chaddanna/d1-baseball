$(function() {
  //tabs
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

  //retina
  retinajs();

  //sticky navigation
  $("#sticker").sticky({
    topSpacing: 105
  }).on('sticky-end', function() {
    //$("#sticker").addClass("sticky-end");
    //setTimeout(function(){
    //  $("#sticker").removeClass("sticky-end");
    //}, 1000);
  });

  //slider settings
  $('.slick-slider').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('header .next').click(function(){
    $(".slick-slider").slick('slickNext');
  });

  $('.slick-slider-img').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.slider-container .next').click(function(){
    $(".slick-slider-img").slick('slickNext');
  });

  $('.slider-container .prev').click(function(){
    $(".slick-slider-img").slick('slickPrev');
  });
});
