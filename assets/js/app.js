// Скрыть/показать меню

var sakh = {};

function showHideMenu() {
    var body = $('body');
    if ($("#menu.show").length) {
        body.addClass('body-menu-opened');
    } else {
        body.removeClass('body-menu-opened');
    }
}

$("#open-menu, #menu-hide").click(function () {
    $("#menu").toggleClass('show');
    showHideMenu();
});

$('#menu-hide').click(function (){
    $("#menu").removeClass('menu--dropdown');
    $('#menu').removeClass('show')
    $('.menu__prev').hide()
    hideShowArr.forEach(e=>$(`.menu__tab--${e}`).show())
})

$(document).mouseup(function (e) {
    var menu = $("#menu");
    if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        menu.removeClass('show');
        showHideMenu();
    }
});

// Меню проекты в мобильной версии
var hideShowArr = ['company', 'search']
$(`.menu-link-dropdown .menu__tab`).click(function (e) {
    if (!$('.menu__center:visible').length) {
        e.preventDefault();
        $("#menu").toggleClass('menu--dropdown');
        $('.menu__prev').show()
        hideShowArr.forEach((e,i)=>{
            if (i!==$(this).index('.menu__tab')){
                $(`.menu__tab--${e}`).hide()
            }
        
        })
    }
});

$('.menu__prev').click(function (){
    hideShowArr.forEach(e=>{$(`.menu__tab--${e}`).show()})
    $("#menu").removeClass('menu--dropdown');
    $('.menu__prev').hide()
})


// Фиксированное меню при прокрутке
$(window).on("scroll", function () {
    // Если высота больше 0
    // Добавляем классу header класс header--fixed
    if ($(window).scrollTop() > 0) {
        $('.header').addClass('header--fixed');
    } else {
        $('.header').removeClass('header--fixed');
    }
});

// slick слайдер двойной недвижимость
if ($('.realty-item__slider-for').length) {
    $('.realty-item__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.realty-item__slider-nav'
    });
    $('.realty-item__slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.realty-item__slider-for',
        arrows: false,
        dots: false,
        focusOnSelect: true
    });
}
// slick слайдер двойной О компании
if ($('.company__slider-for').length) {
    $('.company__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.company__slider-nav'
    });
    $('.company__slider-nav').slick({
        slidesToShow: 11,
        slidesToScroll: 1,
        asNavFor: '.company__slider-for',
        arrows: true,
        dots: false,
        infinite: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 9
            }
        },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 7
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });
}
if ($('.project__slider-for').length) {
    $('.project__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.project__slider-nav'
    });
    $('.project__slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode:true,
        asNavFor: '.project__slider-for',
        arrows: false,
        dots: false,
        infinite: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
                centerPadding: '0',
            }
        },
        {
            breakpoint: 767,
            settings: {
                centerPadding: '0',
                slidesToShow: 1,
                slidesToScroll:2,
                arrows:true,
                variableWidth: true
            }
        }        
    ]
    });
}
// slick слайдер одинарный главная новости
if ($('.last-news__cards').length) {
    $('.last-news__cards').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}


// slick слайдер ПАРТНЕРЫ

function insertCountSliderPartners() {
    var activeSlider = $('.tab-pane.active .partners__cards');
    var sliderPartnersCount = $('.partners__count');
    var currentSlide = activeSlider.slick('slickCurrentSlide') + 2;
    var allCountSlide = activeSlider.slick("getSlick").slideCount;
    $('#partnersCurrentSlide').text((currentSlide > allCountSlide ? allCountSlide : currentSlide) + ' ');
    $('#partnersAllSlide').text(' ' + allCountSlide);
    if (activeSlider.find('.slick-prev').length) {
        sliderPartnersCount.show();
    } else {
        sliderPartnersCount.hide();
    }
}

function initSliderPartners() {
    var activeSlider = $('.tab-pane.active .partners__cards');
    if (!$('.tab-pane.active .slick-list').length) {
        activeSlider.slick({
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: true,

            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        insertCountSliderPartners();

        activeSlider.on("afterChange", function () {
            insertCountSliderPartners();
        });

    } else {
        insertCountSliderPartners();
        activeSlider.slick('refresh');
    }
}

if ($('.partners__cards').length) {
    initSliderPartners();

    $(document).on("shown.bs.tab", ".partners__tabs .nav-tabs__tab", function () {
        initSliderPartners();
    });
}


//Паркинг tooltip переключение
$(document).on("click", ".parking-place__item:not(.parking-place__item--title)", function () {
    var parkingLength = $(this).attr('data-length') + " м.";
    var parkingWidth = $(this).attr('data-width') + " м.";
    var parkingPrice = $(this).attr('data-price') + " Р.";
    $('.parking-place__item').removeClass("parking-place__item--tooltip");
    $(this).addClass("parking-place__item--tooltip");
    $(this).append($("#parking-tooltip"));
    $("#tooltip-length").text(parkingLength);
    $("#tooltip-width").text(parkingWidth);
    $("#tooltip-price").text(parkingPrice);
});

$(document).on("click", function (e) {
    var tooltip = $(".parking-place__item");
    if (!tooltip.is(e.target) && tooltip.has(e.target).length === 0) {
        tooltip.removeClass('parking-place__item--tooltip');
    }
});

$(document).on("click", ".parking-place__item--title", function (e) {
    $('.parking-place__row--active').removeClass('parking-place__row--active')
    $(this).closest('.parking-place__row').addClass('parking-place__row--active')
});

// Постраничная прокрутка

let wrapper = document.querySelector('.wrapper');

if (wrapper) {
    var configPageSlider = {
        // Свои классы
        wrapperClass: "page__wrapper",
        slideClass: "page__screen",

        // Вертикальный слайдер
        direction: 'vertical',

        // Количество слайдов для показа
        slidesPerView: 'auto',

        // Включаем параллакс
        parallax: true,


        // Управление клавиатурой
        keyboard: {
            // Включить\выключить
            enabled: true,
            // Включить\выключить
            // только когда слайдер
            // в пределах вьюпорта
            onlyInViewport: true,
            // Включить\выключить
            // управление клавишами
            // pageUp, pageDown
            pageUpDown: true,
        },

        simulateTouch: false,

        // Управление колесом мыши
        mousewheel: {
            // Чувствительность колеса мыши
            sensitivity: 1,
            // Класс объекта на котором
            // будет срабатывать прокрутка мышью.
            //eventsTarget: ".image-slider"
        },

        // Отключение функционала
        // если слайдов меньше чем нужно
        watchOverflow: true,

        // Скорость
        speed: 800,

        // Обновить свайпер
        // при изменении элементов слайдера
        observer: true,

        // Обновить свайпер
        // при изменении родительских
        // элементов слайдера
        observeParents: true,

        // Обновить свайпер
        // при изменении дочерних
        // элементов слайда
        observeSlideChildren: true,

        // Навигация
        // Буллеты, текущее положение, прогрессбар
        pagination: {
            el: '.page__pagination',
            type: 'bullets',
            clickable: true,
            bulletClass: "page__bullet",
            bulletActiveClass: "page__bullet_active",
        },
        // Скролл
        scrollbar: {
            el: '.page__scroll',
            dragClass: "page__drag-scroll",
            // Возможность перетаскивать скролл
            draggable: true
        },

        // Отключаем автоинициализацию
        init: false,

        // События
        on: {
            // Событие инициализации
            init: function () {
                wrapper.classList.add('_loaded');
            },
        },
    }

    var pageSlider = false;

    function initOrDestroyPageSlider() {
        if (window.innerWidth < 767 || window.innerHeight < 767) {
            $('body').addClass('body-free');
            wrapper.classList.add('_free');
            if (pageSlider) {
                pageSlider.destroy()
                pageSlider = false
            }
        } else {
            $('body').removeClass('body-free');
            wrapper.classList.remove('_free');
            if (!pageSlider) {
                pageSlider = new Swiper('.page', configPageSlider)
                pageSlider.init()
            }
        }
    }

    initOrDestroyPageSlider();

    window.addEventListener(`resize`, function (e) {
        initOrDestroyPageSlider();
    });
}


// Маска на input
if ($('input[name=phone]').length) {
    $(function () {
        $('input[name=phone]').mask("+7 (999) 999-99-99");
    });
}

function parse_str(str, array) {
    var strArr = String(str).replace(/^&/, '').replace(/&$/, '').split('&'),
        sal = strArr.length,
        i, j, ct, p, lastObj, obj, lastIter, undef, chr, tmp, key, value,
        postLeftBracketPos, keys, keysLen,
        fixStr = function (str) {
            return decodeURIComponent(str.replace(/\+/g, '%20'));
        };

    if (!array) {
        array = this.window;
    }

    for (i = 0; i < sal; i++) {
        tmp = strArr[i].split('=');
        key = fixStr(tmp[0]);
        value = (tmp.length < 2) ? '' : fixStr(tmp[1]);

        while (key.charAt(0) === ' ') {
            key = key.slice(1);
        }
        if (key.indexOf('\x00') > -1) {
            key = key.slice(0, key.indexOf('\x00'));
        }
        if (key && key.charAt(0) !== '[') {
            keys = [];
            postLeftBracketPos = 0;
            for (j = 0; j < key.length; j++) {
                if (key.charAt(j) === '[' && !postLeftBracketPos) {
                    postLeftBracketPos = j + 1;
                }
                else if (key.charAt(j) === ']') {
                    if (postLeftBracketPos) {
                        if (!keys.length) {
                            keys.push(key.slice(0, postLeftBracketPos - 1));
                        }
                        keys.push(key.substr(postLeftBracketPos, j - postLeftBracketPos));
                        postLeftBracketPos = 0;
                        if (key.charAt(j + 1) !== '[') {
                            break;
                        }
                    }
                }
            }
            if (!keys.length) {
                keys = [key];
            }
            for (j = 0; j < keys[0].length; j++) {
                chr = keys[0].charAt(j);
                if (chr === ' ' || chr === '.' || chr === '[') {
                    keys[0] = keys[0].substr(0, j) + '_' + keys[0].substr(j + 1);
                }
                if (chr === '[') {
                    break;
                }
            }

            obj = array;
            for (j = 0, keysLen = keys.length; j < keysLen; j++) {
                key = keys[j].replace(/^['"]/, '').replace(/['"]$/, '');
                lastIter = j !== keys.length - 1;
                lastObj = obj;
                if ((key !== '' && key !== ' ') || j === 0) {
                    if (obj[key] === undef) {
                        obj[key] = {};
                    }
                    obj = obj[key];
                }
                else { // To insert new dimension
                    ct = -1;
                    for (p in obj) {
                        if (obj.hasOwnProperty(p)) {
                            if (+p > ct && p.match(/^\d+$/g)) {
                                ct = +p;
                            }
                        }
                    }
                    key = ct + 1;
                }
            }
            lastObj[key] = value;
        }
    }
}

sakh.dataOptions = function (el) {

    var strToBool = function (string) {
        if (typeof string === "string") {
            switch (string.toLowerCase().trim()) {
                case "true": return true;
                case "false": return false;
                case "null": return null;
                case "undefined": return undefined;
            }
            if (!isNaN(string)) string = string * 1;
        }
        return string;
    }

    if (el.options == undefined) el.options = {};
    parse_str($(el).attr('data-options'), el.options);
    for (const [k, v] of Object.entries(el.options)) {
        el.options[k] = strToBool(v);
    }
    return el.options;
}

sakh.slick = function () {
    if ($('.slick').length) {
        $('.slick').each(function () {
            this.options = {
                infinite: true,
                lazyLoad: 'ondemand',
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            }
            sakh.dataOptions(this);
            if ($(this).hasClass('slick-nav')) {
                if (this.options.asNavFor == undefined) this.options.asNavFor = '.slick-for';
                this.options.focusOnSelect = true;
            }
            if ($(this).hasClass('slick-for')) {
                if ($(this).parents('.row').find('.slick.slick-nav').length) {
                    this.options.asNavFor = '.slick.slick-nav';
                }
            }

            $(this).slick(this.options).on('afterChange', (event, slick, currentSlide, nextSlide) => {
                if ($(this).is('.slick-for')) {
                    let nav = $(this).parents('.row').find('.slick-nav');
                    if (nav) {
                        $(nav).find('.slick-current').removeClass('slick-current');
                        $(nav).find(".slick-slide:eq(" + currentSlide + ")").addClass('slick-current');
                    }
                }


            });
        })
    }
}


// Активный пункт меню
$(function () {
    var location = window.location.href;
    var cur_url = location.split('/').pop();
    var menuArr = ['company', 'search']
    console.log(location);
    console.log(cur_url);
    menuArr = menuArr.filter(e=>e!==cur_url)
    console.log(menuArr)
    $('.menu li').each(function () {
        var link = $(this).find('a').attr('href');
        if (cur_url == link) {
            $(this).addClass('menu__tab--active');
            $(`.menu__center__${cur_url}`).show(1000)
            $(`.menu__center__${menuArr[0]}`).hide(500)
        }
        else if(cur_url!==hideShowArr[0] && cur_url!==hideShowArr[1]){
            $(`.menu__center--company`).show(500)
            $(`.menu__center--company > a`).show(500)
            $(`.dropdown_menu`).first().show(500)
        }
    });
});

$(document).ready(function(){
    $('body').addClass('loaded');
    sakh.slick();
    setTimeout(()=>{
    $('.slick-list').removeClass('draggable')
    $('.slick-slide').css({'padding': '0'})
    },50)
})
$(window).resize(function(){
    if($(window).width() < 767){
    $(".footer__create").hide()
    $('.br__hide').show()
    
    }
    else if($(window).width() > 767 && $(window).width() < 1200){
      $(".footer__create").html('').show()
    }
    else if($(window).width() > 1200){
      $(".footer__create").html("Создавайте сайты у нас").show()
      $('.menu__prev').hide()
      hideShowArr.forEach(e=>{$(`.menu__tab--${e}`).show()})
    }
  }).resize()

 
$(document).ready(function () {



        $(".menu__tab--search").mouseenter(function() {
            $(".menu__center__search").show(500) 
            $(".menu__center__company").hide(500)
        })
        
        $(".menu__tab--company").mouseenter(function() {
            $(".menu__center__company").show(500) 
            $(".menu__center__search").hide(500); 
        })


      });

      
     
var modal = document.getElementById("company__modal--id");
var img = document.querySelectorAll(".company__img-item")
var modalImg = document.getElementById("company__modal--img01");
var captionText = document.getElementById("company__modal--caption");

img.forEach(e=>e.addEventListener('click', function() {
  document.querySelector('.header').style.position = 'absolute'
  document.querySelector('.header').style.zIndex = '1'
  document.querySelector('.header').style.transition = 'all 0s'
  modal.style.display = "block";
  modal.style.cursor = "pointer";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
  modalImg.style.cursor = 'default'
  
}))

var span = document.getElementsByClassName("company__modal--close")[0];

span.onclick = function() {
  modal.style.display = "none";
  modalImg.style.cursor = 'pointer'
  document.querySelector('.header').style.position = 'fixed'
  document.querySelector('.header').style.zIndex = '10'
  document.querySelector('.header').style.transition = 'all .3s linear'

}
modal.onclick = function () {
    modal.style.display = "none";
    document.querySelector('.header').style.position = 'fixed'
    document.querySelector('.header').style.zIndex = '10'
    document.querySelector('.header').style.transition = 'all .3s linear'
}
