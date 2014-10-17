 $(document).ready(function(){
 	$('#goto').bind("click touch",function() {
		window.open ('http://www.lannoopaperproducts.be',"_blank");
   		 return false;
	});
	$('#down').bind("click touch",function(e) {
		e.preventDefault();  //stop the browser from following
    		window.open ('_mailing/LannooPaperProducts_largequantity.pdf',"_blank");
	});
 });