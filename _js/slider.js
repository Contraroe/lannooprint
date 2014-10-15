$(document).ready(function(){

    $("#slider").hide();
    $('#extra').click(function(){
        $("#slider").fadeIn(1000);
        });
    $('#close').click(function(){
        $("#slider").fadeOut(1000);
    });
});
