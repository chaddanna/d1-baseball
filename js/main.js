$(function() {
  retinajs();

  $("#sticker").sticky({
    topSpacing: 105
  }).on('sticky-end', function() {
    //$("#sticker").addClass("sticky-end");
    //setTimeout(function(){
    //  $("#sticker").removeClass("sticky-end");
    //}, 1000);
  });

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
