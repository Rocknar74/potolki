//  PRIMARY NAVIGATION
//=================================================================
const PRIMARY_NAVIGATION = $('.main-navigation');

$(window).scroll(() => { // при проматывании страници, обработчик добавляет класс, с прилигающими к нему стилями, к секции навигации. 
    if (scrollY > 100) {
        PRIMARY_NAVIGATION.addClass("window-scroll");
    } else {
        PRIMARY_NAVIGATION.removeClass("window-scroll");
    }
})

const MENU_TOGGLE_BUTTON = $('.menu-toggle');
const MAIN_OVERLAY = $('.main_overlay');

MENU_TOGGLE_BUTTON.click(() => {
    if (PRIMARY_NAVIGATION.hasClass("main-navigation-visible")) {
        PRIMARY_NAVIGATION.removeClass("main-navigation-visible")
        MAIN_OVERLAY.removeClass("overlay");
    } else {
        PRIMARY_NAVIGATION.addClass("main-navigation-visible");
        MAIN_OVERLAY.addClass("overlay");
    }
});

MAIN_OVERLAY.click(() => {
    MAIN_OVERLAY.removeClass("overlay");
    PRIMARY_NAVIGATION.removeClass("main-navigation-visible")
});


// REVIEW WINDOW 
//=================================================================
const FEEDBACK_TABLE = $('.feedback_table');
const FEEDBACK_OVERLAY = $('.feedback_overlay');
const OVERLAY_FEEDBACK_TABLE = $('.overlay');
const FEEDBACK_BUTTON = $('.feedback_button');
const ESC_BUTTON = $('.esc_button');

FEEDBACK_BUTTON.click(() => { // обработчик делает видимым секцию с формой для отзыва
    FEEDBACK_TABLE.addClass("feedback_table-active");
    FEEDBACK_OVERLAY.addClass("overlay");
})
FEEDBACK_OVERLAY.click(() => inactiveFeedbackTable());
ESC_BUTTON.click(() => inactiveFeedbackTable());

function inactiveFeedbackTable() {
    FEEDBACK_TABLE.removeClass("feedback_table-active");
    FEEDBACK_OVERLAY.removeClass("overlay");
}

// NEWS SLIDER LOGIC 
//======================================================
// const CONTAINER_NEWS = $(".container_news");
// const ARRAY_NEWS = Array.from(CONTAINER_NEWS);
// var index_news = 0;

// function move_news() {
//     $(ARRAY_NEWS[index_news]).removeClass('active-news');
//     if (index_news++ == ARRAY_NEWS.length - 1) {
//         index_news = 0
//     };
//     $(ARRAY_NEWS[index_news]).addClass('active-news');
// }

// window.onload = setInterval(() => move_news(), 7000);


// PERSONNEL SLIDER LOGIC 
//======================================================
// const SLIDER_BUTTONS = document.querySelectorAll('.personnel_slider_buttons');
// const CONTAINER_PERSONNEL = $('.container_personnel_slides');
// const PERSONNEL_MAIN = $('.main_personnel_slides');
// const PERSONNEL_LENGTH = document.querySelectorAll('.personnel').length;
// const WIDTH_PERSONNEL = Math.ceil(PERSONNEL_LENGTH / 3) * 100;
// const LAST_CHILD = PERSONNEL_LENGTH - 3;

// var count_personnel = 0;
// var timerId = setTimeout(() => move_direction_slides("right"), 5000);

// PERSONNEL_MAIN.previousElementSibling.innerHTML += `<style type="text/css">
// .main_personnel_slides {width: ${WIDTH_PERSONNEL}%;}
// .personnel {width: ${((CONTAINER_PERSONNEL.offsetWidth / 3) - 20)}px;}
// </style>`;

// SLIDER_BUTTONS.forEach(item => { // кнопки ручного переключения слайдов
//     item.addEventListener("click", () => {
//         clearTimeout(timerId);
//         move_direction_slides(`${item.value}`);
//     });
// });

// function move_direction_slides(move_direction) { //выбор направления переключения слайдов
//     switch (move_direction) {
//         case ("right"):
//             count_personnel++;
//             break;
//         case ("left"):
//             count_personnel--;
//             break;
//     };

//     if (count_personnel < 0) {
//         count_personnel = LAST_CHILD;
//     } //проверка на минимум слайдов
//     if (count_personnel > LAST_CHILD) {
//         count_personnel = 0;
//     } //проверка на максимум слайдов
//     PERSONNEL_MAIN.style = `margin-left: -${count_personnel * 33.3333}%` //сдвиг окна слайдеров

//     timerId = setTimeout(() => move_direction_slides("right"), 5000);
// };
// function auto_switch_slides(move_direction) { // засцикливание авто преключение слайдов
//     timerId = setTimeout(() => move_direction_slides(move_direction), 5000);
// }

// CONSULTATION SECTION
//======================================


// PHONE MASK //
let $selector = $('input[type=tel]');
$(document).ready(function () {
    $selector.inputmask('+7 (999) 999-99-99');
})

// CUSTOM PLAGIN "STRONG TESTIMONIALS"
//=====================================
$(document).ready(function () {
    $testimonialsImg = $('.testimonial img');
    $testimonialsImg.css({
        display: 'block'
    })
    $testimonialsContent = $('.testimonial-content');
    $testimonialsContent.addClass('dotted_bg')
});

//SLIDER REVIEWS
//======================================
const HTML = $('html');
const REVIEWS = $('.strong-content');
const REVIEWS_SLIDER_BUTTONS = $('.reviews_slider_button');
const REVIEWS_SLIDER_BUTTON_LEFT = $('.reviews_slider_button_left');
const REVIEWS_SLIDER_BUTTON_RIGHT = $('.reviews_slider_button_right');
let currentTranslateX = 0;
let duration = 1000;

// $(document).ready(() => {
//     var $galleryImgs = $('.fg-thumb');
//     $galleryImgs.each((index, elem) => {
//         $(elem).attr('rel', "lightbox[roadtrip]");
//     })
// })
// })

REVIEWS_SLIDER_BUTTONS.click((elem) => {
    if (typeof timer_autoScroll !== 'undefined') {
        clearTimeout(timer_autoScroll)
    };
    REVIEWS_SLIDER_BUTTONS.attr('disabled', true); // отключение кнопок
    let $testimonials = $('.testimonial');
    let count_testimonials = $testimonials.length;
    let direction = $(elem.currentTarget).val(); // направление
    let global_fontsize = pixel_to_numeric(HTML.css('font-size'));
    let itemWidth_rem = pixel_to_numeric($testimonials.css('width')) / global_fontsize;
    let maxTranslateX = -(itemWidth_rem * (count_testimonials - 1));
    var directionEnd;

    console.log(itemWidth_rem);
    if (direction === 'right') {
        console.log(direction);
        currentTranslateX -= itemWidth_rem;
        $(elem.currentTarget).css({
            transform: `translateX(.5rem) rotate(180deg)`
        });
        timerAnimButton = setTimeout(() => {
            $(elem.currentTarget).css({
                transform: `translateX(0) rotate(180deg)`
            });
        }, 200)
    } else {
        console.log(direction);
        currentTranslateX += itemWidth_rem;
        $(elem.currentTarget).css({
            transform: `translateX(-.5rem)`
        });
        timerAnimButton = setTimeout(() => {
            $(elem.currentTarget).css({
                transform: `translateX(0)`
            });
        }, 150)
    }

    console.log('currentTranslateX: ' + currentTranslateX);
    console.log(Math.sign(currentTranslateX));
    if (currentTranslateX < maxTranslateX || currentTranslateX == itemWidth_rem) {
        $testimonials = $('.testimonial');
        $first_testimonial = $($testimonials[0]);
        $last_testimonial = $($testimonials[count_testimonials - 1]);

        if (currentTranslateX < maxTranslateX) {
            console.log('///конец справа///');

            $first_testimonial.clone(true).css({
                position: 'absolute',
                left: '100%'
            }).insertAfter($last_testimonial);

            var directionEnd = 'right';
        } else if (currentTranslateX == itemWidth_rem) {
            console.log('///конец слева///');

            $last_testimonial.clone(true).css({
                position: 'absolute',
                right: '100%'
            }).insertBefore($first_testimonial);

            var directionEnd = 'left';
        }
    } else {
        console.log('простое переключение');
    }

    timerId = setTimeout(() => {
        if (directionEnd) {
            $testimonials = $('.testimonial');
            if (directionEnd === 'right') {
                $last_testimonial = $($testimonials[count_testimonials]).remove();
                currentTranslateX = 0
            } else {
                $first_testimonial = $($testimonials[0]).remove();
                currentTranslateX = maxTranslateX;
            }
            REVIEWS.css({
                transition: '0ms',
                transform: `translateX(${currentTranslateX}rem)`
            });
        }
        unblock_buttons();
        autoScroll();
    }, duration + 1);

    REVIEWS.css({
        transition: `${duration}ms`,
        transform: `translateX(${currentTranslateX}rem)`
    })
    console.log('-----------------------------');
})

function pixel_to_numeric(css_val) {
    return +css_val.slice(0, -2);
}

function unblock_buttons() {
    REVIEWS_SLIDER_BUTTONS.attr('disabled', false);
}

function autoScroll() {
    timer_autoScroll = setTimeout(() => {
        REVIEWS_SLIDER_BUTTON_RIGHT.trigger("click");
        console.log('поехали');
    }, duration * 5);
}
autoScroll();

// const HTML = $('html');
// const REVIEWS = $('.strong-content');
// const REVIEWS_SLIDER_BUTTONS = $('.reviews_slider_button');
// const REVIEWS_SLIDER_BUTTON_LEFT = $('.reviews_slider_button_left');
// const REVIEWS_SLIDER_BUTTON_RIGHT = $('.reviews_slider_button_right');
// // const TESTIMONIALS = document.querySelectorAll('.testimonial');
// $testimonials = $('.testimonial');
// count_testimonials = $testimonials.length;
// // $first_testimonials = $($testimonials[0]);
// // $last_testimonials = $($testimonials[count_testimonials - 1]);

// // $last_testimonials.insertBefore($first_testimonials);

// function pixel_to_numeric(css_val) {
//     return css_val.slice(0, -2);
// }

// function unblock_buttons() {
//     REVIEWS_SLIDER_BUTTONS.attr('disabled', false);
// }

// REVIEWS_SLIDER_BUTTONS.click((elem) => {
//     direction = $(elem.currentTarget).val(); // направление
//     REVIEWS_SLIDER_BUTTONS.attr('disabled', true); // отключение кнопок
//     let current_margin = REVIEWS.css('margin-left');
//     let global_fontsize = HTML.css('font-size');
//     let additional_margin = $testimonials.width();
//     if (direction === 'right') additional_margin = -Math.abs(additional_margin);
//     let new_margin = (current_margin + additional_margin) / global_fontsize; //преобразование в 'rem'
//     console.log(current_margin);;
//     console.log(global_fontsize);
//     console.log(additional_margin)
//     console.log(new_margin);

//     let duration = 1000;
//     REVIEWS.css('transition', 'margin ' + duration + 'ms');
//     console.log(REVIEWS);
//     REVIEWS.css('margin-left', new_margin + 'rem');

//     $testimonials = $('.testimonial');
//     $first_testimonials = $($testimonials[0]);
//     $last_testimonials = $($testimonials[count_testimonials - 1]);

//     switch (direction) {
//         case 'left':
//             $last_testimonials.clone(true).insertBefore($first_testimonials);
//             break;
//         case 'right':
//             $first_testimonials.clone(true).insertAfter($last_testimonials);
//             break;
//     }
//     timerId = setTimeout(() => {
//         // clearTimeout(timerId);
//         switch (direction) {
//             case 'left':
//                 $last_testimonials.remove();
//                 break;
//             case 'right':
//                 $first_testimonials.remove();
//                 break;
//         }
//         REVIEWS.css('transition', 'margin 0s');
//         REVIEWS.css('margin-left', current_margin / global_fontsize + 'rem');
//         unblock_buttons()
//     }, duration + 1);
// })