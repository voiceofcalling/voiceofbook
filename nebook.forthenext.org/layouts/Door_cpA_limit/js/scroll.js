jQuery(function($){
	$(document).ready(function(){

		var flag = false;
		$(window).on('scroll', function () {
			if  ($(window).scrollTop() >= 400 && flag == false){
				flag = true;
				$('.xe').addClass('quick_header');
			}
			
			if  ($(window).scrollTop() <= 401 && flag == true){
				flag = false;
				$('.xe').removeClass('quick_header');
			 }
		});

 
	});
});