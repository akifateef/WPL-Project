<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>Drama</title>

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
		<center>
        <h1>Pyare Afzal</h1>
        TV Series | 35 min
        <br/><br/>

		<div id="photo">
        <img src="images/afzal.png">
        </div>
        
        
        <br>
        <h2>Ratings 8.7</h2>
        Ratings 8.7/10 from 105 users
        <br>
        <br>
        </center>
        
        <div id="minibio">
        <h2>Summary</h2>
        <p>Young man confronts his forbidden love and situation changes dramatically as things starts to unfold. </p>
        
        <div id="overview">
        <h2>Cast</h2>
        Series cast summary
        <table>
        <tr>
        <td width="150" height="30"><a href="humzaabbasi.html">Hamza Abbasi</a></td>
        <td width="350">Afzal / ... (37 episodes, 2013) </td>
        </tr>
        <tr>
        <td height="30"><a href="ayzakhan.html">Ayeza Khan</a></td>
        <td>Farah / ... (37 episodes, 2013) </td>
        </tr>
        </table>
        </div>
        
        <br>
        <br>
        
        
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
