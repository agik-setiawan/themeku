var $=jQuery;
$(document).ready(function() {
	//scroll event
	var lastScroll=0;
	$(window).scroll(function(event) {
		//console.log($(this));
		var scroll_y=$(this).scrollTop();
		if(scroll_y>900){
			/*$("#footer").addClass('footer_fixed animated fadeIn');*/
		}else if(scroll_y<900){
			/*$("#footer").removeClass('footer_fixed animated fadeIn');*/
		}
	});
});

AOS.init({
        easing: 'ease-in-out-sine'
      });