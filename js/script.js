$(document).ready(function() {
	$('#youTube_slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		// autoplay: false,
		// autoplaySpeed: 4000,
		dots: false,
		arrows: true,
		responsive: [{
			breakpoint: 850,
				settings: {
					slidesToShow: 2,
				}
			}, {
			breakpoint: 575,
				settings: {
					slidesToShow: 1,
				}
			}]
	});
	$('#main-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		speed: 500,
		fade: true,
		prevArrow: $('.prev-slide'),
		nextArrow: $('.next-slide'),
		responsive: [{
			breakpoint: 480,
			settings: {
				dots: false,
				arrows: true,
			}
		}]
	});

	$('#responsive-menu-button').on('click', function() {
		$('body').toggleClass('open-menu-mob');
	});




	function equalHeight(group) {
        var tallest = 0;
        group.each(function() {
            thisHeight = $(this).height();
            if(thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }
    $(document).ready(function(){
        equalHeight($(".home .screen9 .scientific_articles_item .scientific_articles_content"));
        equalHeight($('.page-parent .block-top .services-items .items-content'));
        equalHeight($('.page-parent .block-bottom .services-items .items-content'));
        equalHeight($('.template-right-menu .services-items .items-content'));
    }); 


    $('#primary-menu .menu-item-has-children .sub-menu').each(function(){
    	$(this).hover(function() {
    		$(this).parent().toggleClass('hover-child');
    	});
    });

});