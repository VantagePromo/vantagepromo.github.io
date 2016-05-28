<!DOCTYPE html>

<?php
$usermessage = "";

if($_POST['submitted'] == "true") {
	$to = "carol@vantagepromo.com";
	$subject = "Message From VantagePromo.com";
	$header = 'MIME-Version: 1.0' . "\r\n" .
		'Content-Type: text/html; charset=iso-8859-1' . "\r\n" .
		'From: Vantage Website <message@vantagepromo.com>' . "\r\n" .
		'Reply-To: ' . $_POST['email'] . "\r\n";

	$userip = $_SERVER['REMOTE_ADDR'];

	$message = "<html><head><title>Message from Vantage Website</title></head><body>" .
		$_POST['name'] . " [" . $userip . "]<br>" .
		"Email: " . $_POST['email'] . "<br>" .
		"Phone: " .$_POST['phone'] . "<br>" .
		"Message: " . $_POST['message'] . "<br>" .
		"</body></html>";

	$usermessage = "<h2>Sorry there was an error</h2> <p>Sorry there was an error submitting your message please call us at 306-343-4880</p>";
	
	if (mail($to, $subject, $message, $header)) {
		$usermessage = "<h2>Thank you</h2> <p>Thank you for contacting the Vantage Marketing Group, someone will be in touch with you shortly!</p>";
	}
}
?>

<html lang="en">
<head>
<title>Vantage Marketing Group - Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<!--[if IE]>
    <script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page6">
    <header>
        <div class="main">
            <div class="wrapper">
                <h1><a href="index.html">Vantage Marketing Group</a></h1>
                <span class="slogan">Portraying Your Professional Image</span>
                <div class="col">
                    <div class="language"></div>
                    <div class="clear"></div>
                    <div class="time">
                        <span class="day">FRIDAY</span><strong>&sbquo;</strong> <span class="datetime">August 18, 2010. 12:00</span>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="main">
                <div class="wrapper">
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a href="products.html">products</a></li>
                        <!--<li><a href="index-2.html">clients</a></li>
                        <li><a href="index-3.html">services</a></li>-->
                        <li><a href="contact.php" class="active">contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="content">
        <div class="main">
            <div class="indent2">
                <div class="wrapper">
                    <div class="col-1 col-indent">
                        <h2 class="h-top">Contact</h2>
                        <form id="ContactForm" action="contact.php" method="post">
                            <label><input type="text" name="name" placeholder="Your Name:" autocomplete="off"/></label>
                            <label><input type="text" name="email" placeholder="Your E-Mail:" autocomplete="off"/></label>
                            <label><input type="text" name="phone" placeholder="Your Phone:" autocomplete="off"/></label>
                            <span><textarea name="message" placeholder="Message:" autocomplete="off"></textarea></span>
				<input type="hidden" name="submitted" value="true"/>
                            <div class="alignright">
                                <a><strong><strong>Send</strong></strong></a>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <h2>Contact information</h2>
                        <!--
                        <p>Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec <a href="#" class="color1">accumsan malesuada orci</a>. Donec sit amet eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                        <p>Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacusravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac.sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum.</p>
                        -->
                        <div class="wrapper top2 bot1">
                            <img src="images/page6-img1.jpg" alt="" class="img-indent"/>
                            <div class="col-1 contact col-indent4">
                                <strong class="color">Vantage Marketing Group Inc.</strong><br>
                                <br>
                                PO Box 26073<br>
                                <br>
                                <span>Saskatoon</span> SK,<br>
                                <span>Canada</span> S7K 8C1
                                <p><span>Telephone:</span>306 343 4880<br></p>
                            </div>
                        </div>
                        <!--
                        <h2>Our location</h2>
                        <dl class="list1">
                            <dt>Saskatoon</dt>
                            <dd>Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacusravida at, cursus nec, luctus a, lorem. Maecenas tristique orci.</dd>
                        </dl>
                        -->
                        <?php echo $usermessage; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="main">
            <div class="wrapper">
                <!--
                <div class="col-1">
                    <b>About Us</b>
                    <ul>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Media & Documents</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <b>Resources</b>
                    <ul>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Dimension Reference</a></li>
                        <li><a href="#">Marketing Articles</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <b>Weekly Specials</b>
                    <ul>
                        <li><a href="#">This Week</a></li>
                        <li><a href="#">Last Week</a></li>
                        <li><a href="#">Past Weeks</a></li>
                    </ul>
                </div>
                -->
                <div class="col-4">
                    <strong>Vantage Marketing Group
                    <span>
                        <span class="cpyyear">&copy; 2011</span> 
                        <!-- | <a href="index-6.html">Privacy policy</a>-->
                    </span></strong>
                </div>
            </div>
        </div>
    </footer>    
    <script src="http://yui.yahooapis.com/combo?3.3.0/build/yui/yui-min.js&3.3.0/build/loader/loader-min.js" charset="utf-8"></script>
    <script src="js/vantage.js" charset="utf-8"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3019017-5']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>    
</body>
</html>



