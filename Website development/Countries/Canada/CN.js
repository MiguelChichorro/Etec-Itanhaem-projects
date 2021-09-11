$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#myBtn').fadeIn();
        } 
        else {
            $('#myBtn').fadeOut();
        }
    });
    $("#myBtn").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
    });
    $(".inside-box").hide();
    $(".begin").show();
    $(".logo").click(function(){
        $(".inside-box").hide();
        $(".title").css("text-decoration", "unset");
        $(".begin").show();
    });
    $("#cities").click(function(){
        $(".inside-box").hide();
        $(".begin").hide();
        $("#cities-box").show();
        $(".title").css("text-decoration", "unset");
        $("#cities").css("text-decoration", "underline");
    });
    $("#cultures").click(function(){
        $(".inside-box").hide();
        $(".begin").hide();
        $("#cultures-box").show();
        $(".title").css("text-decoration", "unset");
        $("#cultures").css("text-decoration", "underline");
    });
    $("#tourist").click(function(){
        showSlides(slideIndex = 1)
        $(".inside-box").hide();
        $(".begin").hide();
        $("#tourist-box").show();
        $(".title").css("text-decoration", "unset");
        $("#tourist").css("text-decoration", "underline");
    });
    $("#about").click(function(){
        $(".inside-box").hide();
        $(".begin").hide();
        $("#about-box").show();
        $(".title").css("text-decoration", "unset");
        $("#about").css("text-decoration", "underline");
    });
});
$(window).on('load', function () {
    $('#loading').hide();
  }) 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}
        
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}