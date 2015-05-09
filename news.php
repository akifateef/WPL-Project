<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>IDDb-News</title>

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


         
         
         <div id="aftermarquee3">
         
         
         <center><a href="news.php"><h1>Latest News</h1></a>
 
         <h2>Fawad Khan beats Ranbir Kapoor 50 Most Desirable Men</h2>
         <p>Fawad Khan landed the third position beating Ranbir Kapoor in the list of 50 Most Desirable Men of 2014.</p>
         <a href="#"><img src="images/fawadkhan-news.jpg" ></a>
         <br>
         <p>Fawad Khan top with 3rd spot in the Times 50 Most Desirable Men of 2014. Fawad Khan entered Bollywood last year and has since made everyone go gaga over his good looks and acting skills. Twitter exploded with fans ecstatic that Fawad made it in the top 3: Fawad has already landed two films in Bollywood since his debut Khubsoorat in 2014.</p>
         
         <br> 
         <h2>Court Extends Judicial Custody for Ayyan Ali</h2>
         <p>Custom officials arrested Ayyan from Islamabad airport on March 14 and are now currently detained in jail; her case is being extended by Rawalpindi court till May 8.</p>
         <a href="#"><img src="images/ayyanali-news.jpg" ></a>
         <br>
         <p>Recently, Rawalpindi court on Tuesday ruled for the extension of supermodel Ayyan’s judicial remand till May 8. The reason behind the extension is that her life is in danger. The Police disclosed that Ayyan Ali’s life was in danger hence they have stepped up measures to beef up her security.

Ayyan’s lawyer also objected that the presented charge-sheet pertaining to her case was incomplete, whereby a complete map of the crime scene was not provided. There are two more suspects for the interrogation and that needs to be highlighted in the interim charge-sheet.</p>

		<br> 
         <h2>Ali Zafar Honored with a 2nd Award of 'Most Stylish Import'</h2>
         <p>Pakistan’s pride Ali Zafar won the award at Hindustan Times Delhi’s 'Most Stylish Import' second time in a row.</p>
         <a href="#"><img src="images/alizafar-news.jpg" ></a>
         <br>
         <p>Pakistani singer-actor has won the ‘Most Stylish Import’ award at Hindustan Times Delhi’s Most Stylish 2015. Pakistan High Commissioner to India, Abdul Basit presented him the award.
 
The versatile Ali recently bagged the ‘Most Stylish Import’ award at the Hindustan Times Style Awards in March and considered as the most hip and cools actor signature sense of style.</p>
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
