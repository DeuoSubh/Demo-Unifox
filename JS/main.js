$(document).ready(function(){


    $(window).scroll(function(){
        
    var sc = $(this).scrollTop();
    
    //count to plugin

        if(sc > 2489) {
            $('.time').countTo();
            $(window).off('scroll');
        }

        //ScrollTop Buttom
        if (sc > 500) {
            $('.scrollTop').fadeIn();
        } else {
            $('.scrollTop').fadeOut();
        }
    });
    $('.time').countTo();
    console.log($('.statistics').offset().top)

    //Portofilo change bg 
    $('.port-buttons button').click(function(){
        $(this).addClass('active-1').siblings().removeClass('active-1');
        var CSSFilter = $(this).attr('id');
    });
    //owl carousel 
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });



    //choose change with slides and change of class
    $('.choose-info li').click(function(){
            $(this).addClass('active-1').siblings().removeClass('active-1');
            var p = $(this).data('role');
            $('.contact > div ').hide();
            $('.contact').contents().filter('#' + p).fadeIn();
    });

    //popup video in choose section
    $('.popup').magnificPopup({
        type:'iframe'
    });

    // slick slider for Pleasure Section 
    $('.slick').slick({
        nextArrow : false,
        prevArrow : false,
        autoplay: true,
        autoplaySpeed: 3000,
    });


    //scroll to top from ScrollTop Buttom
    $('.scrollTop').click(function(){
        $('body,html').animate({
            scrollTop : 0
        },500);
    });
    

});
// Start Settings Box
document.querySelector(".toggle-spin .fa-cog").onclick = function (){

this.classList.toggle("fa-spin");
document.querySelector(".settings-box").classList.toggle("open");

};

//Switch color

    //Local Storage color 
    let mainColors = localStorage.getItem("color_option");
    if (mainColors !== null) {
    document.documentElement.style.setProperty('--main-color', localStorage.getItem("color_option"));
};

// Start Add Active Class to links 
    function myFunction() {
    var element = document.getElementById("myDIV");
    element.classList.add("opened");
};



// switch colors
const colorsLi = document.querySelectorAll(".colors-list li");

colorsLi.forEach(li => {

    li.addEventListener("click", (e) => {
    
    document.documentElement.style.setProperty('--main-color', e.target.dataset.color);

    localStorage.setItem("color_option", e.target.dataset.color);

    });

});

//Reset Button 
document.querySelector(".reset-option").onclick = function () {

    // localStorage.clear();
    localStorage.removeItem("color_option");
    window.location.reload();

};
