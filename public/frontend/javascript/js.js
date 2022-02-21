
$('.slider__item').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    // autoplayTimeout: 2000,
    autoplaySpeed:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.customer__slider').owlCarousel({
    loop:true,
    margin:10,
    // nav:true,
    autoplay:true,
    // autoplayTimeout: 2000,
    autoplaySpeed:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

var owl = $('.owl-details');
owl.owlCarousel({
    // loop:true,
    // nav:true,
    margin:30,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:4
        },
        1200:{
            items:4
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});


$(document).ready(function(){
    // cart
    $(".header__nav--icon").click(function(){
        $(".cart__child").toggleClass('active');
    });

    $(".cart__link").click(function(el){
        el.preventDefault();
        var _id = $(this).attr('href');
        console.log(_id);
        $(".cart__link").removeClass("active");
        $(".cart__posts").removeClass("active");
        $(this).addClass("active");
        $(_id).addClass("active");
    });
    // sản phẩm trang chủ
    $(".product__category--label").click(function(el){
        el.preventDefault();
        var _id = $(this).attr('href');
        $(".product__category--label").removeClass("active");
        $(".products").removeClass("active10");
        $(this).addClass("active");
        $(_id).addClass("active10");
    });
    $(".product__menu--lable").click(function(el){
        el.preventDefault();
        var _id = $(this).attr('href');
        $(".product__menu--lable").removeClass("active");
        $(".products1").removeClass("active");
        $(this).addClass("active");
        $(_id).addClass("active");
    });

    // product__details
    $(".details__menu--link").click(function(el){
        el.preventDefault();
        var _id = $(this).attr('href');
        $(".details__menu--link").removeClass("active");
        $(".menu__details").removeClass("active");
        $(this).addClass("active");
        $(_id).addClass("active");
    });

    // owl-carousel

    // tin tức
    $(".news__links").click(function(el){
        // el.preventDefault();
        var _id = $(this).attr('href');
        $(".news__links").removeClass("active__news");
        $(".news__posts").removeClass("active");
        $("#news__all").removeClass("active");
        $(this).addClass("active__news");
        $(_id).addClass("active");
    });
    
    
    //scroll kéo lên 
    $(window).scroll(function(){
        if($(this).scrollTop() > 40){
            $("#arrow").fadeIn();
        }else{
            $("#arrow").fadeOut();
        }
    });
    $("#arrow").click(function(){
        $('html, body').animate({scrollTop : 0},800);
    });
    
    //menu__child 

    $(".icon_child").click(function(){
        $(".menu__sidebar").toggleClass('active');
        $(".sidebar").addClass('active');
        $(this).toggleClass('fa-bars fa-times');
    });
    $(".menu__sidebar").click(function(){
        $(".sidebar").removeClass('active');
        $(".menu__sidebar").removeClass('active');
        $(".icon_child").toggleClass('fa-bars fa-times');
    });

    // product__category
    $(".product__hoa--icon").click(function(el){
        el.preventDefault();
        $(".product__hoa").toggleClass("active");
        $(".icon__product").toggleClass("active");
    })
    $(".product__hoa--thit").click(function(el){
        el.preventDefault();
        $(".product__thit").toggleClass("active");
        $(".icon__product1").toggleClass("active");
    })
    $(".product__search--icon").click(function(el){
        el.preventDefault();
        $(".product__active").toggleClass("active");
        $(this).toggleClass("fa-plus fa-minus");
    })
    $(".product__category--icon").click(function(el){
        el.preventDefault();
        $(".product__active_1").toggleClass("active");
        $(this).toggleClass("fa-plus fa-minus");
    })
    $(".product__trademark--icon").click(function(el){
        el.preventDefault();
        $(".product__active_2").toggleClass("active");
        $(this).toggleClass("fa-plus fa-minus");
    })
});


document.addEventListener("DOMContentLoaded",function(){
    var menu = document.querySelector(".hi");
    var HeightMenu = menu.offsetTop;
    var menuChild = document.querySelector(".menu__child");
    var Id__content = document.querySelector("#content");
    var aboutUs__label  = document.querySelector(".aboutUs__label ");
    // var aboutUs__label__hight = aboutUs__label.offsetTop;
    var BigSale__img  = document.querySelector(".BigSale__img ");
    // var BigSale__img__hight = BigSale__img.offsetTop;
    var BigSale__header  = document.querySelector(".BigSale__header--post ");
    // var BigSale__header__hight = BigSale__header.offsetTop;
    var fadein  = document.querySelector(".fadein ");
    // var fadein__hight = fadein.offsetTop;
    var BigSale__img  = document.querySelector(".BigSale__img ");
    // var BigSale__img__hight = fadein.offsetTop;
    // console.log(BigSale__header__hight);
    var tt_menu1 = 'duoi26';
    var tt_menu = "duoi205";

    window.addEventListener('scroll',function(){
        if(window.pageYOffset > HeightMenu){
            if(tt_menu == 'duoi205'){
                menu.classList.add('scroll__menu');
            }
            tt_menu = 'tren205';
        }else if(window.pageYOffset < HeightMenu){
            if(tt_menu == 'tren205'){
                menu.classList.remove('scroll__menu');
            }
            tt_menu = 'duoi205';
        }
        if(window.pageYOffset > 26){
            if(tt_menu1 == 'duoi26'){
                menuChild.classList.add('active100');
               
            }
            tt_menu1 = 'tren26';
        }else if(window.pageYOffset < 26){
            if(tt_menu1 == 'tren26'){
                menuChild.classList.remove('active100');
               
            }
            tt_menu1 = 'duoi26';
        }
        // animation
        if(window.pageYOffset > 380){
            aboutUs__label.classList.add('active');
        }
        if(window.pageYOffset > 600){
            BigSale__img.classList.add('active');
        }
        if(window.pageYOffset > 600){
            BigSale__header.classList.add('active');
        }
     
        if(window.pageYOffset > 610){
            fadein.classList.add('active');
        }
        if(window.pageYOffset > 620){
            BigSale__img.classList.add('active');
        }
     
    });
    // cách tính giá sản phẩm

    var promotion      = document.querySelectorAll(".promotion");
    var price__pro     = document.querySelectorAll(".price__pro");
    var price__quanity = document.querySelectorAll(".price__quanity");


    const tru_1 = document.querySelector(".input__tru");
    const cong = document.querySelector(".input__cong");
    const input = document.querySelector(".group__item");
    function sum(){
        input.value = Number(input.value) + 1;
    }
    function tru(){
        if(Number(input.value) < 2){
            input.value = 1;
        }else{
            input.value = Number(input.value) - 1;
        }
    }
    cong.addEventListener('click',sum);
    tru_1.addEventListener('click',tru);
    
});
var typed = new Typed(".compare__banner--link",{
    strings : ["So sánh sản phẩm"],
    typeSpeed: 200,
    backSpeed: 60,
    loop: true
});



// cách tính cộng
