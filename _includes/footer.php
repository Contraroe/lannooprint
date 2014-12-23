<div id="contact">
	<div id="contact_btn_mob"><p>Contact</p></div>
		<ul>
			<li><b>Lannoo</b></li>
			<li>Kasteelstraat&nbsp;97</li>
			<li>b&nbsp;-&nbsp;8700&nbsp;Tielt</li>
			<li><b>T</b>&nbsp;+32&nbsp;51&nbsp;42&nbsp;43&nbsp;11</li>
			<li><a href="_dl/voorwaarden.pdf"><i>Terms&nbsp;and&nbsp;Conditions</i></a></li>
		</ul>
</div>
<script src="_js/scrollbars.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready (function() {
	$("#contact_btn_mob").click( function() {
		var bottom =$("#contact").css('bottom');
		// alert(bottom);

		if(bottom === '-75px') {
			$("#contact").animate({
				bottom: '0px'
				}, 500, function() {
			});
		}
		else{
			$("#contact").animate({
				bottom: '-75px'
				}, 500, function() {
			});
		}

	});
});

</script>