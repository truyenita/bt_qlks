$(document).ready(function(){
    $("nav#menu-mobile").mmenu();

    $('ul.slick-sv').slick({
	    dots: false,
	    swipe: false,
	    infinite: true,
	    arrows: true,
	    speed: 1000,
	    autoplay: false,
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    responsive: [{
			breakpoint: 990,
			settings: {
				slidesToShow: 3,
			}
		},{
			breakpoint: 630,
			settings: {
				slidesToShow: 2,
			}
		},{
			breakpoint: 430,
			settings: {
				slidesToShow: 1,
			}
		}]
	});
    $('ul.slick-handbook').slick({
	    dots: false,
	    swipe: false,
	    infinite: true,
	    arrows: true,
	    speed: 1000,
	    autoplay: false,
	    slidesToShow: 3,
	    slidesToScroll: 1,
	    responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
			}
		},{
			breakpoint: 990,
			settings: {
				slidesToShow: 3,
			}
		},{
			breakpoint: 680,
			settings: {
				slidesToShow: 2,
			}
		},{
			breakpoint: 430,
			settings: {
				slidesToShow: 1,
			}
		}]
	});
});

