
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy;<strong><span>Valia.ao</span></strong>. Todos os direitos reservados
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="/js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="/vendor/date-picker/js/datepicker.js"></script>
		<script src="/vendor/date-picker/js/datepicker.en.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable({
        "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
            },
            responsive: true,
           paging: false,
           searching: true,
           ordering:  false,
          info: false
    });
});
</script>
<script>

// SLIDER
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 5000,
  },
  // init: false,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.next-btn',
    prevEl: '.prev-btn',
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },

    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },

    // 1440:{
    //   slidesPerView: 5,
    //   spaceBetween: 10,
    // },

  }
});
</script>
<script>
  var clicks = document.querySelectorAll('.click-trigger'); // IE8
  for(var i = 0; i < clicks.length; i++){
    clicks[i].onclick = function(){
      var id = this.getAttribute('data-click-id');
      var post = 'id='+id; // post string
      var req = new XMLHttpRequest();
      req.open('POST', 'contador.php', true);
      req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      req.onreadystatechange = function(){
        if (req.readyState != 4 || req.status != 200) return;
        document.getElementById(id).innerHTML = req.responseText;
        };
      req.send(post);
      }
    }
  </script>
</body>

</html>
<?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/layouts/site/footer.blade.php ENDPATH**/ ?>