$(document).ready(function(){
var $is_mobile = false;
if( $('#element').css('display') == 'none' ) {
$('#item1').click( function() { window.open ('online.php',"_self"); return false; });
$("#item2").click( function() { window.open ('books.php',"_self"); return false; });
$("#item3").click( function() { window.open ('magazines.php',"_self"); return false; });
$("#item4").click( function() { window.open ('apps.php',"_self"); return false; });
$("#item5").click( function() { window.open ('finishing.php',"_self"); return false; });
$("#item6").click( function() { window.open ('database.php',"_self"); return false; });
$("#item7").click( function() { window.open ('paper.php',"_self"); return false; });
$("#item8").click( function() { window.open ('print.php',"_self"); return false; });
$("#item9").click( function() { window.open ('news.php',"_self"); return false; });
$('.vidcont').hide();
}

else {
$('#item1').click( function() { window.open ('online.php',"_self"); return false; });
$("#item2").click( function() { window.open ('books.php',"_self"); return false; });
$("#item3").click( function() { window.open ('magazines.php',"_self"); return false; });
$("#item4").click( function() { window.open ('apps.php',"_self"); return false; });
$("#item5").click( function() { window.open ('finishing.php',"_self"); return false; });
$("#item6").click( function() { window.open ('database.php',"_self"); return false; });
$("#item7").click( function() { window.open ('paper.php',"_self"); return false; });
$("#item8").click( function() { window.open ('print.php',"_self"); return false; });
$("#item9").click( function() { window.open ('news.php',"_self"); return false; });

$(document).ready(function(){  $("#item1").hover( function() { $("#BG1").fadeIn(); }, function() { $("#BG1").fadeOut(1000); }); });
$(document).ready(function(){  $("#item2").hover( function() { $("#BG2").fadeIn(); }, function() { $("#BG2").fadeOut(1000); }); });
$(document).ready(function(){  $("#item3").hover( function() { $("#BG3").fadeIn(); }, function() { $("#BG3").fadeOut(1000); }); });
$(document).ready(function(){  $("#item4").hover( function() { $("#BG4").fadeIn(); }, function() { $("#BG4").fadeOut(1000); }); });
$(document).ready(function(){  $("#item5").hover( function() { $("#BG5").fadeIn(); }, function() { $("#BG5").fadeOut(1000); }); });
$(document).ready(function(){  $("#item6").hover( function() { $("#BG6").fadeIn(); }, function() { $("#BG6").fadeOut(1000); }); });
$(document).ready(function(){  $("#item7").hover( function() { $("#BG7").fadeIn(); }, function() { $("#BG7").fadeOut(1000); }); });
$(document).ready(function(){  $("#item8").hover( function() { $("#BG8").fadeIn(); }, function() { $("#BG8").fadeOut(1000); }); });
$(document).ready(function(){  $("#item9").hover( function() { $("#BG9").fadeIn(); }, function() { $("#BG9").fadeOut(1000); }); });
}
});