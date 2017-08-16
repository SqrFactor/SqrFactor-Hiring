// Navbar on Mobile Screen Will Resize into Button
  var clicknav = 0
  $('.nav-button').click(function(){
    if (clicknav == 0) {
      $('.nav-bar').addClass("display-nav");
      clicknav--;
    } else {
      $('.nav-bar').removeClass("display-nav");
      clicknav++;
    }
  })

  $('.nav-bar li').click(function(){
    $('.nav-bar').removeClass("display-nav")
  })