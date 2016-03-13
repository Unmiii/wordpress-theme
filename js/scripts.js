$(function(){
	// console.log("It's working");
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
});