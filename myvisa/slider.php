<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 <div class="swiper swiper-container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/1/11.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/1/22.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/1/33.jpg" class="w-100 d-block">
        </div>
       

      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,

    },
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    }
  });

</script>
  <!-- swiper js  -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>