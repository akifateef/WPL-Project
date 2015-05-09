<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>IDDb-Top Rated</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	<script src="js/jquery.easing.1.2.js"></script>
	<script src="js/swfobject.js"></script>
	<link rel="stylesheet" href="demos/css/page.css" media="all">
	<script src="demos/js/jquery.jatt.min.js"></script>


	
	<script src="js/jquery.anythingslider.js"></script>

	<link rel="stylesheet" href="css/theme-metallic.css">
	<script>
		// Set up Sliders
		// **************
		$(function(){

			$('#slider1').anythingSlider({
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				navigationFormatter : function(index, panel){
					return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
				},
				onSlideComplete : function(slider){
				}
			});



			// tooltips for first demo
			//$.jatt();

		});
	</script>
</head>

<body id="main">

<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="2index.php">IDDb</a></h1>
		<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="https://www.twitter.com" target="_blank" title="">twitter</a></li>
			    <li><a class="facebook" href="https://www.facebook.com" target="_blank" title="">facebook</a></li>
			    <li><a class="vimeo" href="https://www.vimeo.com" target="_blank" title="">vimeo</a></li>
			    <li><a class="rss" href="https://www.rss.com" target="_blank" title="">rss</a></li>
			</ul>
		</div>
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="2index.php">HOME</a></li>
			    <li><a href="news.php">NEWS</a></li>
			    <li><a href="intheaters.php">IN THEATERS</a></li>
			    <li><a href="comingsoon.php">COMING SOON</a></li>
			    <li><a href="contact.php">CONTACT</a></li>
			    <li><a > <?php echo $_SESSION["user"]?></a>/<a href="logout.php">Logout</li>
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <li><a href="showall.php">SHOW ALL</a></li>
			    <li><a href="latesttrailers.php">TRAILERS</a></li>
			    <li><a href="toprated.php">WEEKLY PICKS</a></li>
			</ul>
			<br>
<br>

		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->

		
        <br>
        <br>

			<div id="aftermarquee4">
         
         <br>
         <center><h1>IDDb's Weekly Picks</h1>
         <p>View our TV Editor's list of new and returning dramas, as well as episodes you won't want to miss this week!</p>
		 <br>
         <br>
         <img src="images/saraloren-picks.jpg" ><br>
			<p>Sara Loren who debuted in Bollywood in the 2010 Pooja Bhatt's romantic thriller film Kajraare, she says that being an actress is a huge challenge in today's time.

"It's a huge challenge being an actress in today's time. It's not that you act and go back home... there is a lot of hardwork. You have to do dance numbers, work hard... there's a lot of effort involved in it. It's is just the beginning for me," Sara said here.</p>
         <img src="images/sabaqamar-picks.jpg" ><br>
			<p>“I haven’t received any calls from the concerned authorities, and the people who are behind this baseless propaganda are the same as those who are jealous of my success and popularity,” she said.

“I have previously chosen to ignore such propaganda against me and will do so again. I have made a name for myself in this industry and country by hard work and will continue doing so," the actor stated.</p>
         <img src="images/atifaslam-picks.jpg" >
         <br> 
         <p>Acclaimed Pakistani singer Atif Aslam who has gained immense popularity across borders has charmed many Indians and Pakistanis with his melodious voice. The singer was all set to perform in a concert in Pune, India on April 25, but changed his mind after Indian political party, pressurized and threatens him. The leader Adesh Bandekar told Asian Age.

‘Shiv Sena’ threatened to take action if the event took place. After the threat and strong opposition from India’s far-right regional political party, Atif Aslam had to foor back.

Chitrapat Sena said “The neighboring country is sending terrorists to India, blasting bombs, attacking our Parliament, then how do we welcome their artistes.”</p>
         </center>
         </div>

            
         <br>
         <br>
         <br>
   


	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="2index.php">HOME</a> <span>|</span>
			<a href="news.php">NEWS</a> <span>|</span>
			<a href="intheaters.php">IN THEATERS</a> <span>|</span>
			<a href="comingsoon.php">COMING SOON </a> <span>|</span>
			<a href="latesttrailers.php">TRAILERS</a> <span>|</span>
			<a href="toprated.php">WEEKLY PICKS</a> <span>|</span>
			<a href="contact.php">CONTACT </a>
		</p>
		<p> &copy; Internet Drama Database. All Rights Reserved. Designed by <a href="https://www.facebook.com/mohsin.irfan.16" target="_blank" title="">Mohsin Irfan</a></p>
	</div>
	<!-- end Footer -->
    
</div>
<!-- end Shell -->

</body>

</html>
