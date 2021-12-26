$(document).ready(function () {
  setTimeout(function () {
    $(".loader").fadeOut(200);
  }, 1000);
});

/* Animacio de lteras (logo) */



const div = document.querySelectorAll(".letterlogo");
setTimeout(function () {
  TweenMax.staggerFrom(div[0].children, 0.45, { y: 50, opacity: 0 }, 0.1);
   document.getElementById("color-letter").style.color = "black";

}, 3000);







/* Animacion del toggle dark/Light */
const animate = gsap.timeline({ paused: true });
const animateBackground = new TimelineMax({ paused: true });
let toggle = true;

animateBackground
  .to("body", 0.1, { backgroundImage: "none", backgroundColor: "#111",color:"#fff" }, 0.2)
  .set(".switch", { boxShadow: "0 0 10px rgba(255, 255, 255, 0.2)" })
  .to(".navbar a", 0.1, { color: "#FFF" }, 0.2)
  .to(".slider" , 0.1, {background:"#111111"},0.2)
  .to(".slider-bottom" , 0.1, {background:"#111111"},0.2)
  .to(".icon-cart-noti" , 0.1, {background:"#fff", color:"#000"},0.2)
  .to(".letterlogo",0.1,{color:"#fff"}, 0.2)
  .to(".navbar img",0.1,{filter:"invert(1)"}, 0.2);
  

animate
  .to(".toggle-button", 0.2, { scale: 0.7 }, 0)
  .set(".toggle", { backgroundColor: "#FFF" })
  .set(".circle", { display: "none" })
  .to(".moon-mask", 0.2, { translateY: 31, translateX: -5 }, 0.2)
  .to(".toggle-button", 0.2, { translateY: 30 }, 0.2)
  .to(".toggle-button", 0.2, { scale: 0.9 });

document.getElementsByClassName("switch")[0].addEventListener("click", () => {
  if (toggle) {
    animate.restart();
    animateBackground.restart();
  } else {
    animate.reverse();
    animateBackground.reverse();
  }
  toggle = !toggle;
});

/* Animacion de entrada banner */
const hero = document.querySelector(".hero");
const slider = document.querySelector(".slider");
const logo = document.querySelector("#logo");
const hamburger = document.querySelector(".hamburger");
const headline = document.querySelector(".headline");

//TimelineMax.fromTo('.hero',1,{height:'0%'},{height:'80%'});

const tl = new TimelineMax();

tl.fromTo(hero, 1, { height: "0%" }, { height: "80%", ease: Power2.easeInOut })
  .fromTo(
    hero,
    1.2,
    { width: "100%" },
    { width: "80%", ease: Power2.easeInOut }
  )
  .fromTo(
    slider,
    1.2,
    { x: "-100%" },
    { x: "0%", ease: Power2.easeInOut },
    "-=1.2"
  )

 
  .fromTo(logo, 0.5, { opacity: 0, x: 30 }, { opacity: 1, x: 0 }, "-=0.5")
  .fromTo(hamburger, 0.5, { opacity: 0, x: 30 }, { opacity: 1, x: 0 }, "-=0.5")
  .fromTo(headline, 0.5, { opacity: 0, x: 30 }, { opacity: 1, x: 0 }, "-=0.5");


  var $info = $('.tooltip');
$info.each( function () {
  var dataInfo = $(this).data("tooltip");
  $( this ).append('<span class="inner" >' + dataInfo + '</span>');
});


/******************HOVER*********** */
/*
(function handleHover() {
  let win = $(window);
  let el = $();
  let children = $();
  let w = 0;
  let h = 0;
  let ratio = 0.10;

  let absoluteOffsetX = 0, absoluteOffsetY = 0, relativeOffsetX = 0, relativeOffsetY = 0;

  $('.main-card').on('mouseenter', function(e) {
    el = $(this);
    children = el.children();
    w = el.outerWidth();
    h = el.outerHeight();

    console.log('mouseenter');
  }).on('mousemove', function(e) {
    absoluteOffsetX = e.offsetX - w/2;
    absoluteOffsetY = e.offsetY - h/2;
    relativeOffsetX = absoluteOffsetX * 100 / w * 2 * ratio;
    relativeOffsetY = absoluteOffsetY * 100 / h * 2 * ratio;

    children.css({
      'transform': `rotateY(${relativeOffsetX}deg) rotateX(${relativeOffsetY * -1}deg)`,
      'transition': `.05s`,
    });
    
 

  }).on('mouseleave', function() {
    children.css({
      'transform': `none`,
      'transition': `1s`,
    });
  });
})();*/
