jQuery( document ).ready(function() {
	var slideIndex = 1;
	pushTesti(slideIndex);
	jQuery( ".testi-nav .dashicons" ).click(function() {
		slideIndex += parseInt(jQuery(this).data('n'));
		pushTesti(slideIndex);
	});
	function pushTesti(n) {
		var i;
		var x = document.getElementsByClassName("testimonial");
		if (n > x.length) {
			slideIndex = 1
		}
		if (n < 1) {slideIndex = x.length};
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		if(slideIndex == 2) {
			jQuery('.dashicons-arrow-left-alt2').show();
		} else {
			jQuery('.dashicons-arrow-left-alt2').hide();
		}
		console.log('i: '+i);
		console.log('slideIndex: '+slideIndex);
		 x[slideIndex-1].style.display = "grid";
	}


})
