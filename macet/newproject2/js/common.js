 $(document).ready(function() {
 	$('.client_comment').slick({
    infinite: true,
    slidesToShow: 2,
    dots: true,
    prevArrow: '<div class="arrowleft"><i class="fas fa-angle-left"></i></div>',
  	nextArrow: '<div class="arrowright"><i class="fas fa-angle-right"></i></div>',
    slidesToScroll: 1,
    autoplay: true,
  	autoplaySpeed: 2000
  });
 });