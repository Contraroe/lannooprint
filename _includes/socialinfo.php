<?php

// FACEBOOK

function facebook_count( $username ) {
    $facebook_count = file_get_contents( 'http://www.facebook.com/'.$username );
    return json_decode( $facebook_count )->likes;
}



// TWITTER
function twitter_count( $user ) {

    require_once('_js/twitter-api-php-master/TwitterAPIExchange.php');

    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    $settings = array(
		'oauth_access_token' => "2192448890-LCxigTXJ2ZmOBertJ67A2eYB5BxKEaKgpigOh1d",
		'oauth_access_token_secret' => "BgY2RYjyIAAUWd5a1nNu6iMnsKgjOOAEQrzlNkTMohSfu",
		'consumer_key' => "nVb3RLZIZ9sX335BYUXrrTkcG",
		'consumer_secret' => "9aeH7kE90IW1jXlA8IvbdTUWK8q4IAQhFiwFyqrRXUTfXwbZXB"
    );

    $url = 'https://api.twitter.com/1.1/users/show.json';
    $getfield = '?screen_name=' . $user;
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange( $settings );
    $follow_count = $twitter->setGetfield( $getfield )
                    ->buildOauth( $url, $requestMethod )
                    ->performRequest();
    $get_count = json_decode( $follow_count, true );

    return $get_count['followers_count'];
}
?>


<div id="social_cont">
	<ul>
		<li class="twitter"><a id="social" class="popup" href="http://twitter.com/tw_lannoo" ></a></li>
		<li class="twitter2 count">
			<?php // echo twitter_count( 'Tw_Lannoo' ); ?>
		</li>
		<li class="facebook"><a  id="social"  class="popup" href="http://www.facebook.com/LannooPrinters" ></a></li>
		<li class="facebook2 count">
		<?php //  echo facebook_count( '' ); ?>
		</li>
		<li class="linked"><a id="social" class="popup" href="http://www.linkedin.com/LannooPrinters" ></a></li>
		<li class="lannoo"></li>
		<li id="down" class="lannoo2 count">folder</li>
		<li id="goto" class="lannoo2 count">shop</li>
	</ul>
</div>

<script>
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
<script src="_js/diaries.js" type="text/javascript"></script>