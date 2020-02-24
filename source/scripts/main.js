/* ========================================================================
 * .noConflict()
 * Enclosed everything within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

	$('.logo-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });





})(jQuery); // Fully reference jQuery after this point.