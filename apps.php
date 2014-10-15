<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Lannoo | Tablet, smartphone and web applications</title>
    <meta name="description" content="De Studio van Lannoo geeft u een nieuw inzicht op de digitale media en apps voor tablets, smartphones en zelfs websites. De modernste software brengt uw interactieve media tot leven en maakt het aangenaam in gebruik voor uw gebruiker.">
    <meta name="keywords" content="Lannoo, drukkerij, studio, apps, smartphone, tablet, ipad, iOS, android, windows, blackberry, html, twixl, html5, javascript">
    <link href="img/ico/favicon.ico" rel="shortcut icon"/>
    <link href="css/templatehome.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/nav_apps.css" rel="stylesheet" type="text/css" />
    <link href="css/testimonials.css" rel="stylesheet" type="text/css" />
    <link href="css/vac.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script>var __adobewebfontsappname__ = "code"</script>
    <script src="http://use.edgefonts.net/comfortaa:n4,n3,n7:all;open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js"></script>

<!-- styles needed by jScrollPane -->
<link type="text/css" href="scrollbars/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<!-- latest jQuery direct from google's CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="scrollbars/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="scrollbars/jquery.jscrollpane.min.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-46043185-1', 'lannooprint.be');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <?php include 'includes/vac.php' ?>
    <?php include 'includes/testimonials.php' ?>
    <div id="home"></div>

    <!-- ANIMATION -->
    <script type="text/javascript">
    $(document).ready(function(e) {
    var angles = [90, 45, 315, 270, 225, 135];
    var unit = 40;
    var animate = function(){
    $.each($('#nofix'), function(idx, val){
    var rad = angles[idx] * (Math.PI / 180);
    $(val).css({
    right: 0 + Math.cos(rad) * unit + 'px',
    top: unit * (1 - Math.sin(rad))  + 'px'
    });
    angles[idx]--;
    });
    }
    var timer = setInterval(animate, 30);
    });
    </script>
    <div id="fix"><div id="nofix"></div></div>
    <!-- END ANIMATION -->

    <div id="wrapper">
        <?php include 'includes/header.php' ?>
        <script src="js/nav.js" type="text/javascript"></script>
        <div id="content">
            <h1>Applications</h1>
            <p>The Lannoo-studio offers you a new vision of digital media and applications for tablets, smartphones and even websites. The newest software brings your online interactive media alive and makes it a real pleasure for the user.<br><br> And the customer will be pleased by the visual sophistication yet easy use of these apps. <br><br>Anything you want, from text to art books, magazines or your shop. We do it. Because, wherever you go, go Lannoo!</p>
        </div>
        <div class="container">
            <div id="content-slider">
                <div id="slider"><!-- Slider container -->
                <div id="close"></div>
                <div id="mask">  <!-- Mask -->
                    <ul>
                    <li id="first">
                        <img src="img/products/samsonite1.png" width="500px" height="500px" />
                        <div class="tooltip"> <h1>Samsonite</h1> </div>
                    </li>
                    <li id="second">
                        <img src="img/products/samsonite2.png" width="500px" height="500px"/>
                        <div class="tooltip"> <h1>Samsonite</h1> </div>
                    </li>
                    <li id="third">
                        <img src="img/products/samsonite3.png" width="500px" height="500px"/>
                        <div class="tooltip"> <h1>Samsonite</h1> </div>
                    </li>
                    <li id="fourth">
                        <img src="img/products/samsonite4.png" width="500px" height="500px"/>
                        <div class="tooltip"> <h1>Samsonite</h1> </div>
                    </li>
                    <li id="fifth">
                        <img src="img/products/samsonite5.png" width="500px" height="500px"/>
                        <div class="tooltip"> <h1>Samsonite</h1> </div>
                    </li>
                    </ul>
                <div id="controls"><a href="javascript:void(0)" id="prev"></a>&nbsp;&nbsp;<a href="javascript:void(0)" id="next"></a></div>
                </div>  <!-- End Mask -->
                </div>  <!-- End Slider Container -->
            </div>
        </div>
        <script src="js/slideshow.js" type="text/javascript"></script>
        <?php include 'includes/mailform.php' ?>
        <div id="extra"></div>
        <script src="js/slider.js" type="text/javascript"></script>
        <?php include 'includes/footer.php' ?>
    </div>
</body>
</html>
