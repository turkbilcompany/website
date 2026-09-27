new WOW().init();

$('.customer-items').owlCarousel({
    loop: true,
    margin: 30,
    responsiveClass: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        }
    }
})


$('.slider-items').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    items: 1,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed:1000
})


$('.theme-items').owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    items: 2,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        }
    }
})

$('.popular-themes').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    items: 2,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        }
    }
})

$('.popular-modules').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    items: 1,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
})

var width = $(window).width();

if(width <= 991) {
    
}

$(".nav-tab").mouseenter(function() {
    var tab = $(this).attr("data-tab");
    $(".nav-tab-content").removeClass("active");
    $(".nav-tab").removeClass("active");
    $(this).addClass("active");
    document.getElementsByClassName("nav-tab-content")[tab].classList.add("active");
});

$(window).click(function () {
    $("#nav-menu").removeClass("active");
    $(".mega").removeClass("mega-active");
});
 

$("#nav-button").click(function() {
    $("#nav-menu").addClass("active");
    event.stopPropagation();
});

$("#nav-menu").click(function() {
    event.stopPropagation();
});

$("#nav-close").click(function() {
    $("#nav-menu").removeClass("active");
})

$(".mega").click(function()  {
    $(this).toggleClass("mega-active");
    event.stopPropagation();
});

new ClipboardJS('.copy-btn');

function closePopup() {
    $("#popup").css("display", "none");
}


function openTab(el) {
    var id = el.dataset.tab;
    var content = $(el).parent().parent().attr("id");
    var clear = "#" + content + " .tab-content";
    var button = "#" + content + " .tab-button";
    var find = "#" + content + ' [data-tab="' + id +'"]';

    $(button).removeClass("tab-active");
    $(el).addClass("tab-active");
    $(clear).removeClass("tab-active");
    $(find).addClass("tab-active");
}