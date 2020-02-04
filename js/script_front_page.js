$(document).ready(function() {

	$('.scientific_articles').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		// autoplay: false,
		// autoplaySpeed: 4000,
		dots: false,
		arrows: true,
		responsive: [{
			breakpoint: 994,
				settings: {
					slidesToShow: 3,
				}
			}, {
			breakpoint: 850,
				settings: {
					slidesToShow: 2,
				}
			}, {
			breakpoint: 560,
				settings: {
					slidesToShow: 1,
				}
		}]
	}); 

	$('.company').slick({
		infinite: true,
		slidesToShow: 7,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000, 
		dots: false,
		arrows: true,
		responsive: [{
			breakpoint: 994,
				settings: {
					slidesToShow: 5,
				}
			}, {
			breakpoint: 768,
				settings: {
					slidesToShow: 3,
				}
			}, {
			breakpoint: 560,
				settings: {
					slidesToShow: 3,
				}
			}, {
			breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
		}]
	});
 	
});