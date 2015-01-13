<div id="vacatures_create">
		<h1>Create <span>Vacatures</span></h1>


                <form id='create_vac' action='php/vacs_create.php' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
	                <label for='function' >Function:</label><br>
	                <input type='text' name='function' id='function'  maxlength="50" /><br><br>

	                <label for='spec' >Specification:</label><br>
	                <input type='text' name='spec' id='spec'  maxlength="50" /><br><br>

	                <label for='definition' >Definition:</label><br>
	                <textarea type='text' name='definition' id='definition'  maxlength="1000" rows="5" cols="60" class="scroll-pane"></textarea><br><br>

	                <label for='live'  class="live">live:</label>&nbsp;<input type='checkbox' name='live' value='1'  class="check"><br><br>

	                <input class="btn" type='submit' name='Create' value='Create'/>
                </form>

</div>