<?php include '../_php/error.php' ?>
<div id="header_bc">
	<h1>Lannoo <span>C-Panel</span></h1>
	<ul>
		<li id="edit" class="active">edit</li>
		<li id="create">create</li>
	</ul>	
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$("#create").click(function(){
			$("#vacs_bc").animate({
				left:'-50%'
			});
			$('#vacatures_create').animate({
				left:'0'
			});
			$('#testimonials_bc').animate({
				right:'-50%'
			});
			$('#testimonials_create').animate({
				right:'0'
			});

			$('#edit').removeClass('active');
			$('#create').addClass('active');
		});

		$("#edit").click(function(){
			$("#vacs_bc").animate({
				left:'0'
			});
			$('#vacatures_create').animate({
				left:'-50%'
			});
			$('#testimonials_bc').animate({
				right:'0'
			});
			$('#testimonials_create').animate({
				right:'-50%'
			});

			$('#edit').addClass('active');
			$('#create').removeClass('active');
		});

	});
</script>