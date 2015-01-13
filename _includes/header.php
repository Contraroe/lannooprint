<div id="header">
	<div id="nav">
		<div id="item1" class="menu"><p>Online</p></div>
		<div id="item2" class="menu"><p>Books</p></div>
		<div id="item3" class="menu"><p>Magazines</p></div>
		<div id="item4" class="menu"><p>Applications</p></div>
		<div id="item5" class="menu"><p>Finishing</p></div>
		<div id="item6" class="menu"><p>Database</p></div>
		<div id="item7" class="menu"><p>Paper Products</p></div>
		<div id="item8" class="menu"><p>pc 2 press</p></div>
		<div id="item9" class="menu"><p>News and info</p></div>
		<div id="item10" class=""><p>Menu</p></div>
	</div>
</div>
<?php include '_includes/socialinfo.php' ?>

<script type="text/javascript">
	$(document).ready(function(){
		$( "#item10" ).click( function() {

			var top=$("#header").css('top');
			var mob=$("#item10").css('visibility');

			if( top === '-135px' && mob === 'visible') {
				$( "#header" ).animate({
					top: "0px"
					}, 500, function() {
				});
				$("#lannoo").fadeOut(500);

			}
			if ( top === '0px' && mob === 'visible') {
				$( "#header" ).animate({
					top: "-135px"
					}, 500, function() {
				});
				$("#lannoo").fadeIn(500);
			}
		});

		$(".menu").click( function() {
			var top=$("#header").css('top');
			var mob=$("#item10").css('visibility');
			
			if ( top === '0px' && mob === 'visible') {
				$("#header").animate ({
					top: '-135px'
					}, 500, function() {
				});

			}
		});

	});
</script>