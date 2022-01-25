jQuery(document).ready(function ($) {
    $('.slick-header').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
		pauseOnHover:false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
            }
        }]
    });
    $('.slick-header-mobile').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
            }
        }]
    });

    $('.slick-cases').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
            }
        }]
    });
    $('.slick-clientes').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
    });

    $('.slide-servico').slick({
        dots: false,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: false,
        responsive: [{
            breakpoint: 1024,
			settings: {
				slidesToShow: 2,
			}
        }]
    });
	$('.slide-servico-mobile-itens').slick({
        dots: false,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1024,
			settings: {
				slidesToShow: 1,
			}
        }]
    });

    $('.timeline').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 200,
        cssEase: 'linear',
        autoplay: false,
        slidesToShow: 3,
        adaptiveHeight: false,
        centerMode: true,
		initialSlide:1,
		
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
					centerMode: false,
		initialSlide:0,
                }
            },
        ],
    });
	

	
	

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.doc__header').addClass("lazy-head");
        } else {
            $('.doc__header').removeClass("lazy-head");
        }
    });

    $(window).scroll(function () {
        setTimeout(function () {
            if ($(this).scrollTop() > 50) {

                $(".doc__header").addClass("show-down");

            } else {
                $('.doc__header').removeClass("show-down");
            }
        }, 750);
    });

    $('.number-1').counterUp({
        delay: 10,
        time: 1000
    });
    $('.number-2').counterUp({
        delay: 10,
        time: 1000
    });
    $('.number-3').counterUp({
        delay: 10,
        time: 1000
    });
    $('.number-4').counterUp({
        delay: 10,
        time: 1000
    });
    $('.number-5').counterUp({
        delay: 10,
        time: 1000
    });



    $('.menu-mobile').on('click', function (e) {
        $('.nav__main').addClass("--mobile"); //you can list several class names 
        e.preventDefault();
    });


    $(document).click(function (event) {
        var $target = $(event.target);
        if (!$target.closest('.menu-mobile').length &&
            $('.menu-mobile').is(":visible")) {
            $('.nav__main').removeClass('--mobile');
			$('.nav__main a').removeClass('--mobile');
        }
    });

		var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top-100
    }, 750);
    return false;
});


});