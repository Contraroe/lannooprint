$("#testi_img").click(function(){
    $("#testimonials_img").hide(500);
    $("#vac_cont").animate({
        right:'0px'
    });
    $("#sluit").show(500);
    $('#testimonials_cont').animate({
        right:'-260px'
    });
});