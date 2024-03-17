export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    $('.menu-btn-1').on('click', function() {
      $('.mobile-menu').toggleClass("mobile-menu-active");
      $('body').toggleClass("overflow");
    });
  },
};
