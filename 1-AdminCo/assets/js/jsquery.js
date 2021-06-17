if ($(window).width() > 739) {
    $(".dropdown-holder").on("mouseenter", function(e) {
      $(".hover-box", this).slideDown("fast");
      $(".dropdown-holder").on("mouseleave", function(e) {
        $(".hover-box", this).slideUp("fast");
      });
    });
  }
  
  document.querySelector(".toggle").addEventListener("click", function() {
    document.querySelector(".container").classList.toggle("container__open");
  });
  