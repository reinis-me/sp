export default {
  init() {
    // JavaScript to be fired on the home page
      $('.spotlight-items').slick({
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear',
          arrows: false,
          autoplay: true,
      });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
