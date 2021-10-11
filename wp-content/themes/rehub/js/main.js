
$(document).ready(function(){
	$('.variable-width').slick({
		dots: true,
		nav:false,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		centerMode: false,
		variableWidth: true,
		autoplay: true,
	  	autoplaySpeed: 2000,
	});
	$('.hs6-tabs-nav li,.as2-nav li').click(function(){
		var tabNav = $(this).data('nav');
		var tabClass = '.item'+tabNav;
		$('.hs6-tabs-nav li,.as2-nav li').removeClass('active');
		$(this).addClass('active');
		console.log(tabClass);
		$('.hs6-tabs-content > div,.as2-content').hide();
		$(tabClass).show();
	});
	$('.op3-accordion h4').click(function(){
		$(this).parent().children('.op3-accordion-content').slideToggle();
	});
	$('.menu-item-has-children > a').removeAttr('href');
	$('.mob-btn').click(function(){
		$('header nav').toggleClass('active');
	});
	

});
$('.testimonials').slick({
  centerMode: true,
  slidesToShow: 2,
  dots:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '10px',
      }
    }
 ]
});