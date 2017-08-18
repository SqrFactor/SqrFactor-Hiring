<!-- jquery and scriptsheets -->

  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/nav.js"></script>
  <script type="text/javascript">
    // Scroll Effect
    $(document).ready(function(){

      $("#home").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 170
        }, 1000);
      })

      $(".cmpny-logo").click(function() {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 1000);
      })

      $("#hometop").click(function() {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 1000);
      })

      $("#product").click(function() {
        $('html, body').animate({
            scrollTop: $(".product").offset().top - 160
        }, 1000);
      })
      
      $("#about-us").click(function() {
        $('html, body').animate({
            scrollTop: $(".about-us").offset().top - 160
        }, 1000);
      })

      $("#contactus").click(function() {
        $('html, body').animate({
            scrollTop: $(".footer-page").offset().top
        }, 1000);
      })
    });
  </script>