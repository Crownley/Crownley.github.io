jQuery(document).ready(function($) {


// show and hide map and FAQ
$(document).ready(function() {
    $(".map_google").hide();
    $(".accordion_section").hide();
    $(".recent_work_item:nth-child(1)").click(function() {
         $(".accordion_section").toggle(1000);
    });
    $(".recent_work_item:nth-child(2)").click(function() {
         $(".map_google").toggle(1000);
    });
   });

   $(document).ready(function() {
       $(".Currencies_paragraph").hide();
       $(".Round_figure:nth-child(1)").click(function() {
            $(".Currencies_paragraph").hide();
            $(".Currencies_paragraph:nth-child(3)").toggle(1000);
       });
       $(".Round_figure:nth-child(2)").click(function() {
            $(".Currencies_paragraph").hide();
            $(".Currencies_paragraph:nth-child(4)").toggle(1000);
       });
       $(".Round_figure:nth-child(3)").click(function() {
            $(".Currencies_paragraph").hide();
            $(".Currencies_paragraph:nth-child(5)").toggle(1000);
       });
       $(".Round_figure:nth-child(4)").click(function() {
            $(".Currencies_paragraph").hide();
            $(".Currencies_paragraph:nth-child(6)").toggle(1000);
       });
      });


// show and hide info about currencies
// **************** Accordion ******************************
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
// **************** figures ******************************
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
// *************** scroll************************
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('[href="#carouselExampleIndicators"]')

  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

});
