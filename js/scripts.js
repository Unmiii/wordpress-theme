$(function(){
	// console.log("It's working");
	// Smooth Scroll
	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});

	// Sticky Nav
	var  mn = $("header");
	    mns = "fixed-header";
	    hdr = $('.hero').height();

	$(window).scroll(function() {
	  if( $(this).scrollTop() > hdr ) {
	    mn.addClass(mns);
	  } else {
	    mn.removeClass(mns);
	  }
	});

	$(".lettering").lettering();

	// Animated Title
	$('.lettering').textillate({
		in: {
			effect: 'rollIn',
			shuffle: true,
			delayScale: 1.5,
			delay: 50,
			callback: function () {}
		}
	});
});

// Flickity
// $('#main-gallery').flickity({
//   // options
//   cellAlign: 'left',
//   contain: true
// });
// var flky = new Flickity( '.gallery', {
//   // options, defaults listed

//   accessibility: true,
//   // enable keyboard navigation, pressing left & right keys

//   autoPlay: false,
//   // advances to the next cell
//   // if true, default is 3 seconds
//   // or set time between advances in milliseconds
//   // i.e. `autoPlay: 1000` will advance every 1 second

//   cellAlign: 'left',
//   // alignment of cells, 'center', 'left', or 'right'
//   // or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)

//   cellSelector: undefined,
//   // specify selector for cell elements

//   contain: true,
//   // will contain cells to container
//   // so no excess scroll at beginning or end
//   // has no effect if wrapAround is enabled

//   draggable: true,
//   // enables dragging & flicking

//   freeScroll: false,
//   // enables content to be freely scrolled and flicked
//   // without aligning cells

//   friction: 0.2,
//   // smaller number = easier to flick farther

//   imagesLoaded: false,
//   // if imagesLoaded is present, Flickity can re-position cells
//   // once images are loaded

//   initialIndex: 0,
//   // zero-based index of the initial selected cell

//   percentPosition: true,
//   // sets positioning in percent values, rather than pixels
//   // Enable if items have percent widths
//   // Disable if items have pixel widths, like images

//   prevNextButtons: true,
//   // creates and enables buttons to click to previous & next cells

//   pageDots: false,
//   // create and enable page dots

//   resizeBound: true,
//   // listens to window resize events to adjust size & positions

//   watchCSS: false,
//   // watches the content of :after of the element
//   // activates if #element:after { content: 'flickity' }
//   // IE8 and Android 2.3 do not support watching :after
//   // set watch: 'fallbackOn' to enable for these browsers

//   wrapAround: true
//   // at end of cells, wraps-around to first for infinite scrolling

// });