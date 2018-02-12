(function ($) {
    var Event = "May 5, 2018";

    setInterval(function () {
        dayCounter(Event);
        winPosition = $(window).scrollTop();
        winPosition != 0 ? $('.navbar-default').addClass('nav-menu-in_action') : $('.navbar-default').removeClass('nav-menu-in_action');
        console.log("winPosition == " + winPosition);
        corentActive = $('li.active > span.current').html();
        $('div.wrap[data-page!="' + corentActive + '"]').removeClass('show').fadeOut();
        $('div.wrap[data-page="' + corentActive + '"]').fadeIn();
        $('span.href').text() == "" ? $('form > a.red-btn').attr('style', 'pointer-events: none;') : $('form > a.red-btn').attr('style', 'pointer-events: all;');
        $(" form ").validate({
            rules: {
                name: {
                    minlength: 4
                },
                email: {
                    required: true,
                    minlength: 7
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10

                }
            },
            messages: {
                name: {
                    required: "Нам необходимо ваше имя",
                    minlength: "Ваше  имя должно состоять не менее чем из 4 символов"
                },
                email: {
                    required: "Нам необходимо ваше почтовый адресс",
                    minlength: "Ваш email  должен выглядить следующим образом : name@domain.com"
                },
                phone: {
                    required: "Нам необходимо ваш контакный номер телефона",
                    minlength: "Ваш номер телефона  должен выглядить следующим образом : 095********"
                }
            },
            errorLabelContainer: "#messageBox"
        });
    }, 1000);

    function dayCounter(deadLine) {
        var corentTime = Date.parse(new Date()), EventDay = Date.parse(deadLine),
            DayContainer = $('#day-counter'),
            HoursContainer = $('#hours-counter'),
            MinContainer = $('#minutes-counter'),
            SecContainer = $('#seconds-counter'),
            timeLeft = EventDay - corentTime;
        DayContainer.html(Math.floor(timeLeft / (1000 * 60 * 60 * 24)));
        HoursContainer.html(Math.floor(timeLeft / (1000 * 60 * 60)) % 24);
        MinContainer.html(Math.floor(timeLeft / (1000 * 60)) % 60);
        SecContainer.html(Math.floor(timeLeft / 1000) % 60);
    }
/*------------hover effecn START------------------*/
$(' div[data-price-id] ').on('focus',function (e) {
    console.log("!!!!");
    /*$(this).find('h5:after').animated({
    left:'+20'
  });*/
});
/*------------hover effecn END------------------*/
    /* SLICK - SLIDER START*/
    /* Vertical */
    var titleMain = $("#animatedHeading");
    var titleSubs = titleMain.find("slick-active");


    if (titleMain.length) {
        var slickCorrentInt = setInterval(function slickCorrentInt() {
            correntObj = $('.slick-current:eq(0)').find('.hero__title-misc').toggleClass('animated pulse').html();
            correntObjSecond = $('.slick-current:eq(1)').find('.hero__title-misc').toggleClass('animated pulse').html();
            $.each($('.slick-dupe .slick-slide'), function (i) {
                $(this).hasClass('slick-current') ? $(this).addClass('animated pulse') : $(this).removeClass('animated pulse');
            });
            //  console.log(" === "+correntObj);
            $('#slick-container-active-item').toggleClass('animated pulse').html(correntObj);
            $('#slick-container-active-item_second').toggleClass('animated pulse').html(correntObj);

        }, 1950);
        slickCorrentInt;
        titleMain.slick({
            autoplay: false,
            arrows: false,
            dots: false,
            slidesToShow: 2,
            centerPadding: "0rem",
            draggable: false,
            infinite: true,
            pauseOnHover: false,
            swipe: false,
            touchMove: false,
            vertical: true,
            speed: 1000,
            autoplaySpeed: 2000,
            useTransform: true,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
            adaptiveHeight: true,

            asNavFor: '#slick-container-active-item',
            centerMode: true,
            focusOnSelect: true
        });

        $('#slick-container-active-item').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '#animatedHeading'
        });
        // On init

        // Manually refresh positioning of slick
        titleMain.slick('slickPlay');

    };

/*
    height: 39vh;
    max-width: 98%;
    */
    var footerMap = $('#footer-map').css({"height": "60vh","max-width": "100%"}).googlemaps(),
        map = $(' #firstMap ').css({"height": "50vh"}).googlemaps();
    var buttonsInMapwrapp = '    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="position: absolute; z-index: 15;" >\n' +
        '            <div class=" btn-in-map" style="        padding-left:2%;\n' +
        '        padding-right:2%;\n' +
        '        padding-top: 2%;\n' +
        '        margin-left:20vw;">\n' +
        '                <button type="button" data-object-name="way" class="btn  red-btn btn-margin-for-link" style=""><i class="way"></i> Как добраться ?</button>\n' +
        '<button type="button" data-object-name="food" class="btn  whyte-btn btn-margin-for-link"><i class="food"></i>Где поесть ?</button>\n' +
        '<button type="button" data-object-name="sleep" class="btn  whyte-btn btn-margin-for-link"><i class="sleep"></i>Где поселиться ?</button>\n' +
        '<button type="button" data-object-name="monuments" class="btn  whyte-btn btn-margin-for-link"><i class="monuments"></i>Что посетить ?</button>\n' +
        '<button type="button" data-object-name="subway" class="btn  whyte-btn btn-margin-for-link"><i class="subway"></i>Найти попутчика ?</button>\n' +
        '            </div>\n' +
        '        </div>';


    var addresses = {
        food: [
            "46.488032, 30.740641",
            "46.487419, 30.740134",
            "46.486817, 30.739305",
            "46.492291, 30.748466"
        ],
        sleep: [
            "46.486915, 30.741959",
            "46.492291, 30.748466",
            "46.487558, 30.738570"
        ],
        monuments: [
            "46.487344, 30.739270",
            "46.485365, 30.742027",
            "46.484934, 30.734449",
            "46.483214, 30.730995",
            "46.470061, 30.733211",
            "46.471635, 30.731709"
        ],
        way: [
            "46.468829, 30.741529",
            "46.441579, 30.676591"
        ]
    };
    var changPlace = function (correntObj, obj) {

        switch (correntObj) {
            case "food":
                correntObj = obj.food;
                imgurl = 'img/icon3.png';
                break;
            case "sleep":
                correntObj = obj.sleep;
                imgurl = 'img/icon2.png';
                break;
            case "monuments":
                correntObj = obj.monuments;
                imgurl = 'img/icon1.png';
                break;
            case "way":
                correntObj = obj.way;
                imgurl = 'img/icon4.png';
                break;
            case "subway":
                window.location.replace("https://www.blablacar.com.ua");
                break;
        }
        ;

        correntObj.forEach(function (item, index) {

            map.setMarkerAtAddress(item, function (marker) {
                map.setMarkerClick(marker, function () {
                    map.closeAllInfoWindows();
                    map.setInfoWindowAtMarker(this, "Address: " + this.options.address);
                });
            }, undefined, {address: item}, imgurl);

        });

    };
    var showTheWay = function () {

    };
    setTimeout(function () {
        $('button[data-object-name]').on('click', function (e) {
            event.preventDefault();
            thisObjName = $(this).attr('data-object-name');
            $(this).addClass('red-btn').removeClass('whyte-btn');
            $('button[data-object-name!="' + thisObjName + '"]').removeClass('red-btn').addClass('whyte-btn');
            changPlace(thisObjName, addresses);
            e.preventDefault();
            return false;
        });
        $('button[data-object-way-to]').on('click', function (e) {

            $(this).addClass('red-btn').removeClass('whyte-btn');
            $('button[data-object-name]').removeClass('red-btn').addClass('whyte-btn');
            showTheWay(thisObjName);
            e.preventDefault();
            return false;

        });
    }, 1000);
    /* ON SEARCH ADDRESS */
    $("#map5_address_submit").click(function (event) {
        event.preventDefault();
        var searchAddress = $("#map5_address_input").val();
        map5.setMarkerAtAddress(searchAddress, function (searchMarker) {
            map5.getDistances(searchMarker, markers, function (d) {
                map5.setCenterAtMarker(d[0].marker, 11);
            }, 3);
        }, function () {
            // can't find address
        }, {visible: false});
    });
    map.setMarker("46.490692, 30.745997", function (marker) {
        map.setCenterAtLocation(46.486378, 30.735976, 14);
        map.setInfoWindowAtMarker(marker, "Морський вокзал");
    });


    footerMap.setMarker("46.490692, 30.745997", function (marker) {
        footerMap.setCenterAtLocation(46.490692, 30.745997, 14);
        footerMap.setInfoWindowAtMarker(marker, "Морський вокзал");
    });

    setTimeout(function () {
        //     $('#firstMap ').append(buttonsInMapwrapp);
        var placeForButtons = $('html').width() <= 400 ? $('#addaptButton').css({
            'height': '50vh',
            'background-color': '#3333;'
        }).append(buttonsInMapwrapp) : $('#firstMap').append(buttonsInMapwrapp);

    }, 100);
    /*------------START  JAGE SELECTOR----------*/
    $(window).on('load', function () {
        var ArrOfAllJagList = $(' li[data-jg-catagere]');
        setTimeout(function () {
            $.each(ArrOfAllJagList, function () {
                thisItemListVersion = $(this).attr('data-jg-catagere');
                $('div#' + thisItemListVersion + ' > div.list-image > ul').append($(this).clone());
            });
        }, 50);
        /*-------PAGINATIION FOR TABs  START--------*/
        setTimeout(function () {
            var numOfPages = 0;
            LenghtOfAllJagList = ArrOfAllJagList.length;
            ListOfAllJagListForPaging = ArrOfAllJagList;
            numOfPages = Math.floor(LenghtOfAllJagList / 6);
            var $c = $('div#tab0 > div.list-image > ul'), f = 1;
            while ($c.children('li:not(.wrap)').length) {
                classNameFor = f == 1 ? "display:block;" : "display:none;";
                $c.children('li:not(.wrap):lt(6)').wrapAll('<div data-page="' + f + '" class="wrap" style="' + classNameFor + '">');
                f++;
            }
            $('.pagination').pagination({
                items: f - 1,
                itemOnPage: 6,
                currentPage: 1,
                cssStyle: '',
                prevText: '<span aria-hidden="true">&laquo;</span>',
                nextText: '<span aria-hidden="true">&raquo;</span>',
                onInit: function () {

                },
                onPageClick: function (page, evt) {

                }
            });
        }, 10);
        /*-------PAGINATIION FOR TABs  END--------*/
    });
    /*------------END  JAGE SELECTOR----------*/
    /*-------------------START PRICE moduls------------------------*/
    var owlFirst = $('#owl-carousel-first'), owlSecond = $('#owl-carousel-second');
    owlSecond.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 2000,
        navContainer: $('#arrow-owl-arr-second'),
        navText: [" > ", " < "],
        responsive: {
            0: {
                items: 5
            },
            600: {
                items: 9
            },
            1000: {
                items: 9
            }
        }
    });
    owlFirst.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });
    /*-------------------END PRICE moduls------------------------*/
    /*-------------------START anchor ------------------------*/
    $('header a[href*="#"]').on("click", function (e) {
        var anchor = $(this);
        anchor.parent().addClass('active');
        $('header a[href!="' + anchor.attr('href') + '"]').parent().removeClass('active');
        $('html, body').stop().animate({
            scrollTop: ($(anchor.attr('href')).offset().top)-100
        }, 777);
        e.preventDefault();
        return false;
    });
    /*-------------------END anchor ------------------------*/
    /**/
    $("#owl-header").owlCarousel({
        loop:true,
        navigation : true,
        slideSpeed : 300,
        singleItem: true,
        pagination: false,
        rewindSpeed: 300,
        items: 1,
        smartSpeed: 1000,
        nav: false,
        autoplay: true,
        margin: 0,
    });

    /**/
})(jQuery);