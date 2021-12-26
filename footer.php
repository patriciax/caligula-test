<section data-scroll-section class="pt">
  <div class="">

    <div class="main-subscribe">
      <div>
        <div class="img-subscribe">
          <img class="revealer-img" src="http://imgfz.com/i/sHr5KMv.png" alt="">
        </div>
      </div>
      <div class="txt">
        <p>Get special discounts, limited
          edition pre launch, private
          notifications about the
          Caligula realm and empire just
          for people with a unique
          appetite like yours. We won’t
          invade your privacy.</p>
      </div>
      <div>
        <div class="fomr">

          <form action="">
            <input type="text" placeholder="Your email">
          </form>
          <button>Subscribe</button>
        </div>
      </div>

    </div>
</section>
<footer data-scroll-section>
  <div class="footer-item">
    <ul>
      <li><a href="">About</a></li>
      <li><a href="">FAQ</a></li>
      <li><a href="">Contact</a></li>
    </ul>
  </div>
  <div class="footer-item">
    <img src="" alt="">
    <p>2021 Copyright <br> Registered Trademark

    </p>
  </div>
  <div class="footer-item">
    <ul>
      <li>Privacy Policy</li>
      <li>Terms & Conditions</li>
    </ul>
  </div>
</footer>





</div>


</div>

<script src="https://unpkg.com/@barba/core"></script>

<!---
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
        <script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll" crossorigin="anonymous"></script>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.1/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="assets/scripts/barba-config.js"></script>
<script src="assets/scripts/custom.js"></script>
<script src="assets/scripts/main.js"></script>
<script src="">
  const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
    tablet: {
      smooth: true
    },
    smartphone: {
      smooth: true
    }
  });
</script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
</body>

</html>