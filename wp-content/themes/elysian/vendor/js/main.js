jQuery(document).ready(function () {
  AOS.init();
  window.addEventListener('load', function() {
    AOS.refresh();
  });
  console.log("ready!");
  jQuery(".section--partners__our--partners__items").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 2,
    autoplay: false,
    autoplaySpeed: 1500,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 580,
        settings: {
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });

  jQuery(".section--testimonial__items").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  jQuery(".btn-more").click(function(){
    console.log('hello');
    jQuery(".moretext").css("display", "block");
    jQuery(".btn-less").css("display", "block");
    jQuery(this).css("display", "none");
  })

  jQuery(".btn-less").click(function(){
    console.log('hello');
    jQuery(".moretext").css("display", "none");
    jQuery(".btn-more").css("display", "block");
    jQuery(this).css("display", "none");
  })
});
