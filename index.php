<!DOCTYPE>
<?php

include("functions/function.php");

?>
<html>
	<head>
	 <meta name="google-site-verification"
content="<meta name="google-site-verification" content="EDZ5Yq8QbdMm8dOKuqjXx2aicjtWOLl6UdQs6N1yzPs" />
		<title>TRNDY DEALS</title>
		<link rel="icon" type="image/jpg" href="images/logo.jpg">
    
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>
		
		
	<!--Main container starts here-->
	<div class="main_wrapper">
	<div class="sidel">
		<marquee direction="down" align="left" height="1000px" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()"><div id="sidebox"><?php sidepro(); ?></div></marquee>
		
		
		
		
		</div>
		<div class="sider">
		<marquee direction="up" align="left" height="1000px"  behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()"><div id="sidebox"><?php sidecop(); ?></div></marquee>
		
		
		
		
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
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="search here" />
						   <input type="submit"  value="Search" name="search" />
					</form>
				</div>
		</div>
		<!--Navigation bar ends here-->
		
		<!--Content wrapper starts here-->
		
		<div class="content_wrapper">
			
			
			<div id="content">
			
			<?php cart(); ?>
				<div id="shopping_cart">
					
				
				
				</div>
				
					
				<div id="product_box">
				
					<?php getpro(); ?>
					<?php getcatpro(); ?>
					<?php getbrandpro(); ?>
					<?php getrangepro(); ?>
				</div>
			
			</div>
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
					<?php getCats(); ?>
				<ul>
			
			<div id="sidebar_title">Ecommerce</div>
				
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