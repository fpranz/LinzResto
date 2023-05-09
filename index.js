function show() {
document.getElementById('sidenav').classList.toggle('active');
}
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  const swiper = new Swiper('.swiper', {
    autoplay:{
      delay:5000,
      disableOnInteraction: false,
    },
  loop: true,
  pagination: {
  el: '.swiper-pagination',
  clickable:true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});