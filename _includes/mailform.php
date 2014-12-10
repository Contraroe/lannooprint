<div id="mailform">
	<form autocomplete="off" id="form" method="post" action="php/mail.php" enctype="multipart/form-data">

		<div id="attachholder">
			<input type="file" id="attach" name="uploaded_file">
		</div>
		<label id="lnaam" for="naam">Name</label>
		<input type="text" name="naam" placeholder="Name" id="naam" required="Naam"/><br>

		<label for="adres">Adress</label>
		<input type="text" name="adres" id="adres" placeholder="Adress" required="Adres"/><br>

		<label for="email">E-mail</label>
		<input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/><br>

		<label id="bericht" for="message">Message</label><br />
		<textarea name="message" id="message" rows="15" cols="40" required="Bericht" class="scroll-pane"></textarea><br>


		<input type="submit" name="send" value="Send" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
		<input type="reset" name="clear" value="Clear" class="clear-button">
	</form>
</div>
