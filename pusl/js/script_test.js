$(document).ready(function(){
    $('.carousel__inner').slick({
        speed: 1200,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://massage-22/templates/pusl/icons/left.svg" alt="slide"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://massage-22/templates/pusl/icons/right.svg"></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
    
    $('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
        jQuery(this)
          .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
          .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq(jQuery(this).index()).addClass('catalog__content_active');
    });

    function toggleSlide(item) {
        $(item).each(function(i) {
            $(this).on('click', function(e) {
                e.preventDefault();
                jQuery('.catalog-item__content').eq(i).toggleClass('catalog-item__content_active');
                jQuery('.catalog-item__list').eq(i).toggleClass('catalog-item__list_active');
            })
        });
    };

    toggleSlide('.catalog-item__link');
    toggleSlide('.catalog-item__back');
        // Modal

    $('[data-modal=consultation]').on('click', function() {
        jQuery('.overlay, #consultation').fadeIn('slow');
    });
    $('.modal__close').on('click', function() {
        jQuery('.overlay, #consultation, #thanks, #order').fadeOut('slow');
    });

    $('.button_mini').each(function(i) {
        $(this).on('click', function() {
            jQuery('#order .modal__descr').text(jQuery('.catalog-item__subtitle').eq(i).text());
            jQuery('.overlay, #order').fadeIn('slow');
        })
    });

        function validateForms(form){
        $(form).validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: "required",
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                name: {
                    required: "Пожалуйста, введите свое имя",
                    minlength: jQuery.validator.format("Введите {0} символа!")
                  },
                phone: "Пожалуйста, введите свой номер телефона",
                email: {
                  required: "Пожалуйста, введите свою почту",
                  email: "Неправильно введен адрес почты"
                }
            }
        });
    };

    validateForms('#consultation-form');
    validateForms('#consultation form');
    validateForms('#order form');

    $('input[name=phone]').mask("+7 (999) 999-99-99");

    $('form').submit(function(e) {
        e.preventDefault();

        jQuery(function($) {
        $.ajax({
            type: "POST",
            url: "mailer/smart.php",
            data: jQuery(this).serialize()
        }).done(function() {
            jQuery(this).find("input").val("");
            jQuery('#consultation, #order').fadeOut();
            jQuery('.overlay, #thanks').fadeIn('slow');

            $('form').trigger('reset');
        });
    });
        return false;
    });

    // Скрипт для form_new
    jQuery(".userInput").focus(function() {
        jQuery(this).parent().addClass("focus");
    }).blur(function() {
        if(jQuery(this).val()===''){
            jQuery(this).parent().removeClass("focus")
        }
    });

// hamburger
    
// window.addEventListener('DOMContentLoaded', () => {
//         const menu = document.querySelector('.menu_test'),
//         menuItem = document.querySelectorAll('.menu_test__item'),
//         hamburger = document.querySelector('.hamburger');
    
//         hamburger.addEventListener('click', () => {
//             hamburger.classList.toggle('hamburger_active');
//             menu.classList.toggle('menu_test_active');
//         });
    
//         menuItem.forEach(item => {
//             item.addEventListener('click', () => {
//                 hamburger.classList.toggle('hamburger_active');
//                 menu.classList.toggle('menu_active');
//             })
//         })
//     })

    // Smooth scroll and pageup

    $(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1600) {
            jQuery('.pageup').fadeIn();
        } else {
            jQuery('.pageup').fadeOut();
        }
    });

    $("a[href=#up]").click(function(){
        const _href = jQuery(this).attr("href");
        jQuery("html, body").animate({scrollTop: jQuery(_href).offset().top+"px"});
        return false;
    }); 

    new WOW().init();

});