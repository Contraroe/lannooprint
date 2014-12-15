<?php

include '_php/error.php';

// FACEBOOK

function facebook_count( $username ) {
	$facebook_count = file_get_contents( 'http://www.facebook.com/'.$username );
	return json_decode( $facebook_count )->likes;
}

// TWITTER
$data = json_decode(file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=Tw_Lannoo'), true);

?>

<div id="social_cont">
	<ul>
		<li class="twitter"><a id="social" class="popup" href="http://twitter.com/tw_lannoo" ></a></li>
		<li class="twitter2 count">
			<?php echo $data[0]['followers_count']; ?>
		</li>
		<li class="facebook"><a  id="social"  class="popup" href="http://www.facebook.com/LannooPrinters" ></a></li>
		<li class="facebook2 count">
		<?php // echo facebook_count( '' ); ?>
		</li>
		<li class="linked"><a id="social" class="popup" href="http://www.linkedin.com/LannooPrinters" ></a></li>
		<li id="statusDiv" class="lannoo"></li>
		<li id="diaries" class="lannoo2 count">Diaries</li>
		<li id="down" class="lannoo2 count">folder</li>
		<li id="goto" class="lannoo2 count">shop</li>
		<li id="subscribe" class="lannoo2 count" class="active" >newsletter</li>
	</ul>
</div>
<div id="subscribeform">
	<form method="post" action="https://lannoo.email-provider.nl/subscribe/post/index.php" accept-charset="utf-8">
		<h1>Subscribe to our <span>Newsletter</span></h1>
		<input type="hidden" name="next" value="www.lannooprint.be" />
		<input type="hidden" name="a" value="oqtxnlapvd" />
		<input type="hidden" name="l" value="bkfoubyhvf" />
		<label for="id-T1ahS9aPmv">E-mail&nbsp;*</label><input type="text" name="T1ahS9aPmv" id="id-T1ahS9aPmv"><br>
		<label for="id-gpZ9jeAQFy">Name&nbsp;*</label><input type="text" name="gpZ9jeAQFy" id="id-gpZ9jeAQFy"><br>
		<label for="id-BgVGtnfgu1">Last Name&nbsp;*</label><input type="text" name="BgVGtnfgu1" id="id-BgVGtnfgu1"><br>
		<label for="id-R4cpL1yiHO">Language&nbsp;*</label><select name="R4cpL1yiHO" id="id-R4cpL1yiHO"><option value="0">Prefered language:</option><option value="1">English</option><option value="2">French</option><option value="3">Dutch</option></select><br>
		<input type="submit" value="Subscribe" />
		<div id="close">X</div>
	</form>
</div>

<!-- POPUP SOCIAL WEBSITES -->
<script type="text/javascript"> 
	$('.popup').click(function(event) {
		var width  = 575,
			height = 400,
			left   = ($(window).width()  - width)  / 2,
			top    = ($(window).height() - height) / 2,
			url    = this.href,
			opts   = 'status=1' +
					 ',width='  + width  +
					 ',height=' + height +
					 ',top='    + top    +
					 ',left='   + left;
		window.open(url, 'social', opts);
		return false;
		});
</script>

<!-- HIDE EMPTY LI -->
<script type="text/javascript">
	$('li.count').filter(function(){
		return $.trim($(this).html()) == '';
	}).hide()
</script>

<!-- LINKED IN -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
	// api_key: API_KEY
	// onLoad: onLinkedInLoad
	// authorize: true
	// function onLinkedInLoad() {
	// IN.API.Raw("/companies/COMPANY_ID:(num-followers)")
	// 	.result( function(result) { document.getElementById("statusDiv").innerHTML = result.numFollowers; } )
	// 	.error( function(error) { /* do nothing */ } )
	// ;
	// }
</script>

<!-- LANNOO KOPPELINGEN -->
<script src="_js/diaries.js" type="text/javascript"></script>

<!-- Subscription FORM nav Functions -->
<script type="text/javascript">

	$('#subscribeform').hide();
	// open form

	$(document).ready(function(){
		$('#subscribe').bind('click', function(){
			$('#subscribe').css('background-color','rgba(0, 200, 200,1)');
			$('#subscribeform').fadeIn(1000);
		});

		$('#close').bind('click', function(){
			$('#subscribe').css('background-color','rgba(0,0,0,0.8)');
			$('#subscribeform').fadeOut(1000);
		});

	});

</script>