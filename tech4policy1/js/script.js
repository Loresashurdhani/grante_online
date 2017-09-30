$(document).ready(function(){
   $('.bxslider').bxSlider({
        pager: false,
        auto: true,
        controls: false
    });
      $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});