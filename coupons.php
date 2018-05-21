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
    <!--Deals side bar-->
	
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
						<input type="button" name="search" value="Search" />
					</form>
				</div>
		</div>
		<!--Navigation bar ends here-->
		
		<!--Content wrapper starts here-->
		
		<div class="content_wrapper">
			
			
			<div id="content">
				<div id="shopping_cart">
					
				
				
				</div>
					
				<div id="product_box">
				<?php
				
					$get_cop = "select * from copouns ";
	
	$run_cop = mysqli_query($con,$get_cop);
	
	while($row_cop=mysqli_fetch_array($run_cop)){
		
		$prod_id=$row_cop['c_id'];
		
		$prod_title=$row_cop['c_website'];
		$prod_price=$row_cop['c_value'];
		$prod_image=$row_cop['c_image'];
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?c_id=$prod_id' style='float:middle;'><img src='admin_area/coupon_images/$prod_image' width='180' height='80'/></a>
					
					<p><b> $prod_price %DISCOUNT</b></p>
					<a href='details.php?c_id=$prod_id' style='float:middle;'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
			?>		
					
					
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
			<h2 style="text-align:center; padding-top:30px;">&copy; 2015 by WWW.TrndyDeals.com</h2>
		</div>
		
		<!--Fotter ends here-->
	
	
	
	</div>
   <!--Main conatainer ends here-->
</body>
</html>