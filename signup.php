<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>IDDb-Show All</title>

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
		<h1 id="logo"><a href="1index.html">IDDb</a></h1>
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
			    <li><a class="active" href="1index.html">HOME</a></li>
			    <li><a href="news.html">NEWS</a></li>
			    <li><a href="intheaters.html">IN THEATERS</a></li>
			    <li><a href="comingsoon.html">COMING SOON</a></li>
			    <li><a href="contact.html">CONTACT</a></li>
			    
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <li><a href="showall.html">SHOW ALL</a></li>
			    <li><a href="latesttrailers.html">TRAILERS</a></li>
			    <li><a href="toprated.html">TOP RATED</a></li>
			    
			</ul>
			<br>
<br>

		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->

		
        <br>
        <br>
        <br>

        <center>
        <div id="login">
        <form method="post" action="itemsave.php">
        <center>
<table>
<br>
<tr>
<td>Username:</td>
<td>
<input type="text" name="username"  required>
</td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="Password" name="password" required>
</td>
</tr>

<tr>
<td>email:</td>
<td>
<input type="email" name="email" placeholder="example@abc.com" required >
</td>
</tr>
</table>
<br>
<input type="submit" value="save">
<input type="reset" value="rest">
</form>
</div>
<br>


Already a member <a href="signin.php">sign in</a>
</center>
</center>

			

            
         <br>
         <br>
         <br>
   


	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="1index.html">HOME</a> <span>|</span>
			<a href="news.html">NEWS</a> <span>|</span>
			<a href="intheaters.html">IN THEATERS</a> <span>|</span>
			<a href="comingsoon.html">COMING SOON </a> <span>|</span>
			<a href="latesttrailers.html">LATEST TRAILERS</a> <span>|</span>
			<a href="toprated.html">TOP RATED TRAILERS</a> <span>|</span>
			<a href="signin.php">SIGN IN</a> <span>|</span>
			<a href="contact.html">CONTACT </a>
		</p>
		<p> &copy; Internet Drama Database. All Rights Reserved. Designed by <a href="https://www.facebook.com/mohsin.irfan.16" target="_blank" title="">Mohsin Irfan</a></p>
	</div>
	<!-- end Footer -->
    
</div>
<!-- end Shell -->

</body>

</html>
