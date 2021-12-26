
/*let scroll = new LocomotiveScroll({
  el: document.querySelector('[data-scroll-container]'),
  smooth: true
});

barba.hooks.after(() => {
  scroll.init();
});*/

function delay(n){
  n = n || 2000;
  return new Promise(done => {
    setTimeout(()=>{
 
  		done();
  
    }, n)
  });
}

function pageTransition(){
  var tl = gsap.timeline();

  tl.to('ul.transition li',{
    duration: .4, 
    scaleY:1, 
    transformOrigin:"bottom left",
    stagger:.2})

  tl.to('ul.transition li',{
    duration: .4, 
    scaleY:0,
    transformOrigin:"bottom left", 
    stagger:.1,
    delay:.1
  
  })
}

function  contentAnimation(){
  var tl = gsap.timeline();
  tl.from('.left',{duration:1.5, translateY:50 , opacity:0} )
  tl.to('.img',{clipPath:"polygon(0 0, 100% 0, 100% 100%, 0% 100%)"}, "-=1.1" )

}

  // scroll to the top of the page
 /* barba.hooks.enter(() => {
    window.scrollTo(0, 0);
  });
*/
barba.init({
  sync: true,
  transitions:[
    {
      async leave(data){
        const done = this.async();

       pageTransition();
        await delay(1500);
        done();   
      },
     /* async beforeEnter(data) {
      
        scroll.destroy();
        initSmoothScroll(data);
      }
,*/
/*
async beforeEnter(data) {
  scroll.init();

},*/
      async enter(data){
        contentAnimation();
     /*   scroll.init();*/

      },
      async once(data){
        contentAnimation();
      },
/*
      async after	(){
        scroll.init();
      }*/

    }]
})

