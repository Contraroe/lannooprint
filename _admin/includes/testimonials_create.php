<div id="testimonials_create">
	<h1>Create <span>Testimonial</span></h1>
	<form id='create_test' action='php/test_create.php' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
		<label for='customer' >Customer:</label><br>
		<input type='text' name='customer' id='customer'  maxlength="50" /><br><br>
	              
		<label for='testimonial' >Testimonial:</label><br>
		<textarea type='text' name='testimonial' id='testimonial'  maxlength="1000" rows="5" cols="60" class="scroll-pane"></textarea><br><br>

		<label for='date' >Date:</label><br>
		<input type='text' name='date' id='date'  maxlength="50" /><br><br>
	                      
		<label for='live' class="live">live:</label>&nbsp;<input type='checkbox' name='live' value='1' class="check"><br><br>

		<input class="btn" type='submit' name='Create' value='Create'/>
            </form>
</div>