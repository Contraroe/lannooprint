$("#vac_img").click(function(){
	$("#vac_img").hide(0);
	$("#vac_cont").animate({
		right:'0px'
	});
	$("#sluit").show(500);
	$('#testimonials_cont').animate({
		right:'-260px'
	});
});


$("#sluit").click(function(){
	$("#vac_cont").animate({
		right:'-260px'
	});
	$("#sluit").hide(500);
	$("#vac_img").show(400);
	$('#testimonials_cont').animate({
		right:'0px'
	});
});