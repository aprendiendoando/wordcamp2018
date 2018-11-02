$('.testimonials__slides').slick({
  dots: true,
  infinite: true,
  arrows: false,
  speed: 600,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000
});

$(window).scroll(function() {
        if ($(this).scrollTop() >= 450) {
            $('.header__top').addClass('sticking');
        }
        else {
            $('.header__top').removeClass('sticking');
        }
    });

$('.header__top').stickyNavbar({
    activeClass: "active",          // Class to be added to highlight nav elements
    sectionSelector: "scrollto",    // Class of the section that is interconnected with nav links
    animDuration: 650,              // Duration of jQuery animation
    startAt: 0,                     // Stick the menu at XXXpx from the top of the this() (nav container)
    easing: "linear",               // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
    animateCSS: true,               // AnimateCSS effect on/off
    animateCSSRepeat: false,        // Repeat animation everytime user scrolls
    cssAnimation: "fadeInDown",     // AnimateCSS class that will be added to selector
    jqueryEffects: false,           // jQuery animation on/off
    jqueryAnim: "fadeIn",        // jQuery animation type: fadeIn, show or slideDown
    selector: "a",                  // Selector to which activeClass will be added, either "a" or "li"
    mobile: true,                  // If false nav will not stick under 480px width of window
    zindex: 9999,                   // The zindex value to apply to the element: default 9999, other option is "auto"
    stickyModeClass: "sticky",      // Class that will be applied to 'this' in sticky mode
    unstickyModeClass: "unsticky"   // Class that will be applied to 'this' in non-sticky mode
  });



    $('#togle-nav').on('click', function(){
      $('.nav--main').toggle();
    });

    // Menu animation hamburg

    $("#togle-nav").click(function() {
      $(this).toggleClass('open');
    });


// Waypoint scroll animation

$('.slider').waypoint(function() {
    $('.js-animation-slider').addClass('animated bounceInLeft');
},{offset:100});

// $('.photostyles').waypoint(function() {
//     $('.js-photostyles--left').addClass('animated fadeIn');
//     $('.js-photostyles--right').addClass('animated fadeIn');
// },{offset:200});

// $('.project').waypoint(function() {
//     $('.js-animation-bounceInUp').addClass('animated bounceInRight');
// },{offset:300});

// $('.isabella').waypoint(function() {
//     $('.isabella__image').addClass('animated bounceInLeft');
//     $('.isabella__information').addClass('animated bounceInRight');
// },{offset:400});

// $('.testimonials').waypoint(function() {
//     $('.testimonials__slides > div').addClass('animated bounceInLeft');
// },{offset:500});

// $('.blog').waypoint(function() {
//     $('.blog__item--new').addClass('animated bounceInRight');
// },{offset:500});

// $('.footer__form').waypoint(function() {
//     $('.footer__form .form').addClass('animated bounceInLeft');
// },{offset:500});


// Map

mapboxgl.accessToken = 'pk.eyJ1IjoiYWRhdGhlbWUiLCJhIjoiY2o0MzJydjM1MDBhYTM2b3ppeTkycnJheSJ9.AdNE_WWAil2-Hf4PsIS3gA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/adatheme/cj433okst3aco2sob6uwbx7kv'
});

// disable map zoom when using scroll
map.scrollZoom.disable();



// Creamos el video responsive

// Find all YouTube videos
var $allVideos = $("iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();

//Initialize filterizr with default options

 $(function() {
    $('.filtr-container').filterizr();
});
