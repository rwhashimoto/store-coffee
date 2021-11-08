jQuery(function(){//smooth scroll
    jQuery('a[href^="#"]').click(function(){
      var speed = 500;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      jQuery("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });

jQuery(function () {//page top
  var pagetop = jQuery('#top-btn');
  pagetop.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 500) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    jQuery('body, html').animate({
        scrollTop: 0
    }, 500);
    return false;
  });
});