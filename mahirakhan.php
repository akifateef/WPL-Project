<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>Mahira Khan</title>

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
        <h1>Mahira Khan</h1>
		<div id="photo">
        <img id="imgsize" src="images/mahirakhan.jpg" >
        
        </div>
        
        
        <br>
        <h2>Biography</h2>
        <br>
        </center>
        
        <div id="overview">
        <h2>Overview</h2>
        <table>
        <tr>
        <td width="150" height="30">Birth Name</td>
        <td width="350">Mahira Khan</td>
        </tr>
        <tr>
        <td height="30">Born</td>
        <td>21 December 1982, Karachi, Sindh, Pakistan</td>
        </tr>
        <tr>
        <td height="30">Height</td>
        <td>5' 7" (1.7 m) </td>
        </tr>
        </table>
        </div>
        
        <br>
        <br>
        
        <div id="minibio">
        <h2>Mini Bio</h2>
        <p>Mahira Khan, is a Pakistani Video jockey and actress. She has worked with satellite TV channels MTV Pakistan and Aag TV. She also starred in the film Bol.

Khan was born in Karachi, Pakistan. She received her primary education from Foundation Public School, Karachi, and went on to Santa Monica Community College in Los Angeles for higher education.

Khan began her career as a VJ when she was 16 years old. However, her dream was to become an actress. It came true when she started landing roles in TV series and films. Khan hosted the live show Most Wanted for three days a week on MTV Pakistan, and hosted Weekend with Mahira on Aag TV. She has worked alongside other VJs like Anoushey Ashraf and Ali Charlie. Her breakout acting role was as Khirad Ehsan in the popular TV serial drama Humsafar, which became one of the most widely-known dramas of the Pakistani TV industry. She was praised for her performance by both critics and fans. Khan had her film debut in Shoaib Mansoor's 2011 Bol, in which she co-starred alongside Atif Aslam, Humaima Abbasi, and Iman Ali.</p>
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
