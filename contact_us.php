<!DOCTYPE>
<?php

include("functions/function.php");

?>
<html>
	<head>
		<title>TRNDY DEALS</title>
		<link rel="icon" type="image/jpg" href="images/logo.jpg"/>
    
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>
		
	<!--Main container starts here-->
	<div class="main_wrapper">
	<div class="sidel">
		<marquee direction="down" align="left" height="1000px" behavior="alternate" onmouseover="this.stop(); " onmouseout="this.start();"><div id="sidebox"><?php sidepro(); ?></div></marquee>
		
		
		
		
		</div>
		<div class="sider">
		<marquee direction="up" align="left" height="1000px" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><div id="sidebox"><?php sidecop(); ?></div></marquee>
		
		
		
		
		</div>
		<!--Header starts here-->
		<div class="header_wrapper">
		  
			<a href="index.php"><img id="logo" src="images/logo.jpg"  width="200px" height="100px"/></a>
			<img id="banner" src="images/ad_banner.jpg" width="800px" height="100px" />
			
		
		</div>
		<!--Header ends here-->
		
		<!--Navigation bar starts here-->
		<div class="menubar">
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All products</a></li>
					<li><a href="deals.php">Deals</a></li>
					<li><a href="coupons.php">Coupons</a></li>
					
					<li><a href="contact_us.php">Contactus</a></li>
				
				</ul>
				<div id="form">
					<form method="get" action="results.php" enctype="multpart/form-data">
						<input type="text" name="user_query" placeholder="search here" />
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
		</div>
		<!--Navigation bar ends here-->
		
		<!--Content wrapper starts here-->
		
		<div class="content_wrapper" >
			
			
			<div id="content">
				
					
				<div id="contact_us" >
				<h1>&nbsp </h1>
				<h4 style='float:middle;'><b style='text-decoration:underline;'>FOR ANY QUERIES CONTACT US</b></h4>
				<pre style='float:middle; text-decoration:none;'>
				
<p style='color:IndianRed ;'>Mail:<b>lokeshtv17@gmail.com</b></p>
<p style='color:IndianRed ;'>Facebook:<a href="https://www.facebook.com/klokesh.lokesh" target="_blank"style='text-decoration:none; color:IndianRed;' ><b style='text-decoration:underline;'>Clickhere</b></a></p>
<p style='color:IndianRed ;'>Phone:<b>+918500067180</b></p>
				
				
					
				</div>
			
			</div>
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
					<?php getCats(); ?>
				<ul>
			
			<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
				
					<?php getBrand(); ?>
			
				<ul>
				<div id="sidebar_title">Price Range</div>
				
				<ul id="cats">
				
					<?php getRange(); ?>
					
			
				<ul>
			
			
			    </div>
			
			
			
			
			</div>
		</div>
		
		<!--Content wrapper ends here-->
		
		<!--Fotter starts here-->
		
		<div id="fotter">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2015 by WWW.Trndydeals.com</h2>
		</div>
		
		<!--Fotter ends here-->
	
	
	
	</div>
   <!--Main conatainer ends here-->
</body>
</html>