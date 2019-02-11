jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var menu_toggle = $('.menu-toggle');
    var nav_menu = $('.main-navigation ul.nav-menu');
    var featured_slider = $('.featured-slider-wrapper');
    var testimonial_slider = $('.testimonial-slider-wrapper');
    var posts_height = $('.blog-posts-wrapper article .post-item');

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();  
        if (scroll > 1) {
            $("#masthead").addClass("nav-shrink");
        }
        else {
             $("#masthead").removeClass("nav-shrink");
        }
    });

    menu_toggle.click(function(){
        nav_menu.slideToggle();
    });

    $('.main-navigation .nav-menu .menu-item-has-children > a').after( $('<button class="dropdown-toggle"><i class="fa fa-angle-down"></i></button>') );

    $('button.dropdown-toggle').click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

/*------------------------------------------------
            SLICK SLIDER
------------------------------------------------*/

    featured_slider.slick();
    testimonial_slider.slick({
        responsive: [{
            breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
            breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            },
            {
            breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    
/*------------------------------------------------
            MATCH HEIGHT
------------------------------------------------*/

    posts_height.matchHeight();
    $('#courses article').matchHeight();

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});