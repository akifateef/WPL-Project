<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>IDDb - Trailers</title>

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
	<!-- Main -->
	<div id="main">
		<!-- Content -->
        <center>
		<div id="content">

			<!-- Box -->
			<div class="box">
            
				<div class="head">
                
					<h2>TRAILERS</h2>
					<p class="text-right"><a on href="#">See all</a></p>
				</div>
               
				<!-- Movie -->
				<div class="movie">
					
					<div class="movie-image">
						
						<a href="humsafarvideo.php"><span class="play"><span class="name">HUMSAFAR</span></span><img src="css/images/humsafar.jpg" alt="movie" /></a>
					</div>
						
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">
								
							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
                
                <!-- Movie -->
				<div class="movie">
					
					<div class="movie-image">
						
						<a href="zindagi.php"><span class="play"><span class="name">ZINDAGI GULZAR HAI</span></span><img src="css/images/zindagigulzarhai.jpg" alt="movie" /></a>
					</div>
						
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">
								
							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
                
                <!-- Movie -->
				<div class="movie">
					
					<div class="movie-image">
						
						<a href="afzal.php"><span class="play"><span class="name">PYARE AFZAL</span></span><img src="css/images/piyareafzal.jpg" alt="movie" /></a>
					</div>
						
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">
								
							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
                
                <!-- Movie -->
				<div class="movie">
					
					<div class="movie-image">
						
						<a href="abdulqadir.php"><span class="play"><span class="name">ABDUL QADIR</span></span><img src="css/images/abdulqadir.jpg" alt="movie" /></a>
					</div>
						
					<div class="rating">
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">
								
							</div>
						</div>
						<span class="comments">12</span>
					</div>
				</div>
				<!-- end Movie -->
				
				
				
			
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->
			
			
			
		</div>
		<!-- end Content -->
		</content>
		
		
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- end Main -->
          


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
			<a href="latesttrailers.php">LATEST TRAILERS</a> <span>|</span>
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
