(function ($) {
  "use strict";


// Back to top button
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('.back-to-top').fadeIn('slow');
  } else {
    $('.back-to-top').fadeOut('slow');
  }
});
$('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
  return false;
});

   // Intro carousel
   var introCarousel = $(".carousel");
   var introCarouselIndicators = $(".carousel-indicators");
   introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
     (index === 0) ?
     introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
     introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");
 
     $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
     $(this).children('.carousel-background').remove();
   });




   
 
   
    setTimeout(function(){
      $('#myModal').modal('show')
    }, 3500);
 





// Clients carousel (uses the Owl Carousel library)
$(".clients-carousel").owlCarousel({
  autoplay: true,
  dots: true,
  loop: true,
  responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 4 }
  }
});



  var review = $('.review_part_text');
  if (review.length) {
    review.owlCarousel({
      items: 2,
      loop: true,
      dots: true,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout:5000,
      nav: false,
      responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        769:{
          items: 2
        }
    }
    });
  }
  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });
  if (document.getElementById('default-select')) {
		$('select').niceSelect();
	}

  // page-scroll
  $('.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    var headerH = '80';
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
 });






$('[data-toggle="counter-up"]').counterUp({
  delay: 10,
  time: 1000
});


// Porfolio isotope and filter
var portfolioIsotope = $('.portfolio-container').isotope({
  itemSelector: '.portfolio-item',
  layoutMode: 'fitRows'
});

$('#portfolio-flters li').on( 'click', function() {
  $("#portfolio-flters li").removeClass('filter-active');
  $(this).addClass('filter-active');

  portfolioIsotope.isotope({ filter: $(this).data('filter') });
});






$('.tile')
// tile mouse actions
.on('mouseover', function(){
  $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
})
.on('mouseout', function(){
  $(this).children('.photo').css({'transform': 'scale(1)'});
})
.on('mousemove', function(e){
  $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
})
// tiles set up
.each(function(){
  $(this)
    // add a photo container
    .append('<div class="photo"></div>')
    // some text just to show zoom level on current item in this example
    .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')
    // set up a background image for each tile based on data-image attribute
    .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
})






// var rect = $('#parllax_sec')[0].getBoundingClientRect();
// var mouse = {x: 0, y: 0, moved: false};

// $("#parllax_sec").mousemove(function(e) {
//   mouse.moved = true;
//   mouse.x = e.clientX - rect.left;
//   mouse.y = e.clientY - rect.top;
// });
 
// // Ticker event will be called on every frame
// TweenLite.ticker.addEventListener('tick', function(){
//   if (mouse.moved){    
//     parallaxIt(".slide_sec", -50);
  
//   }
//   mouse.moved = false;
// });

// function parallaxIt(target, movement) {
//   TweenMax.to(target, 0.3, {
//     x: (mouse.x - rect.width / 2) / rect.width * movement,
//     y: (mouse.y - rect.height / 2) / rect.height * movement
//   });
// }

// $(window).on('resize scroll', function(){
//   rect = $('#parllax_sec')[0].getBoundingClientRect();
// })






}(jQuery));