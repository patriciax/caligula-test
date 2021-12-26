<?php require('header-second.php'); ?>
<div data-scroll-section class="pt-4">
  <div class="o-container">


    <!--- <a href="index.php">volverl</a>--->
    <!-- Swiper -->
    <div class="fixed_wrapper">

      <div class="fixed_target" id="fixed-target"></div>

      <div class="fixed" data-scroll data-scroll-sticky data-scroll-target="#fixed-target" style="background-image:url('img/bg.jpg')">

      <div thumbsSlider="" class="swiper mySwiper ">
      <div class="swiper-wrapper titles-brand">
        <div class="swiper-slide">
          <p>Brand 1</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 2</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 3</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 4</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 5</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 6</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 7</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 8</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 9</p>
        </div>
        <div class="swiper-slide">
          <p>Brand 10</p>
        </div>
      </div>
    </div>
      </div>
    </div>
    <style>
      .fixed_wrapper {
        position: relative;
        overflow: hidden;
        height: 818px;
      }

      .fixed_target {
        bottom: -100vh;
      }

      .fixed,
      .fixed_target {
        position: fixed;
    top: -70vh;
    right: 0;
    left: 0;
      }

      .fixed {
        height: 100%;
        background-size: cover;
        background-position: center;
      }
    </style>
    
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="grid-brand">
            <div>
              <img class="brand-gif" src="assets/images/gif1.gif" alt="">
            </div>
            <div>
              <img class="mb-4" src="assets/images/logos/marca1.png" alt="">
              <div class="genere">
                <div>
                  <img src="assets/images/iconos/masculine.png" alt="">
                  <p>For him</p>
                </div>
                <div>
                  <img src="assets/images/iconos/femenine.png" alt="">
                  <p>For her</p>
                </div>
              </div>
            </div>
            <div>
              <img class="brand-gif" src="assets/images/gif2.gif" alt="">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <main>
      <div class="left">
        <h1>segunda page</h1>
        <a href="categories.php" class="cta">Take me there</a>
      </div>
      <img class="img" src="https://sofiserrano98.files.wordpress.com/2014/03/paisaj2.jpg" alt="" />
    </main>

  </div>
</div>


<?php require('footer.php'); ?>