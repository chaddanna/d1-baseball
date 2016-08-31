$(function() {
  $('.slick-slider').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 5,
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

  $('.next').click(function(){
    $(".slick-slider").slick('slickNext');
  });
});
