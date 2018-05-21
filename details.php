<!DOCTYPE>
<?php

include("functions/function.php");

?>
<html>
	<head>
		<title>TRNDY DEALS</title>
    
	
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
		  
			<img id="logo" src="images/logo.jpg"  width="200px" height="100px"/>
			<img id="banner" src="images/ad_banner.jpg" width="800px" height="100px" />
			
		
		</div>
		<!--Header ends here-->
		
		<!--Navigation bar starts here-->
		<div class="menubar">
				<ul id="menu">
					<li<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All products</a></li>
					<li><a href="deals.php">Deals</a></li>
					<li><a href="coupons.php">Coupons</a></li>
					
					<li><a href="contact_us.php">Contactus</a></li
				
				</ul>
				<div id="form" >
					<form method="get" action="results.php" enctype="multpart/form-data">
						<input type="text" name="user_query" placeholder="search here" />
						<input type="submit" name="search" value="Search" />
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
					if(isset($_GET['c_id'])){
					
						$product_id=$_GET['c_id'];
					$get_pro = "select * from copouns where c_id='$product_id'";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$prod_id=$row_pro['c_id'];
		$prod_title=$row_pro['c_website'];
		$prod_price=$row_pro['c_value'];
		$prod_image=$row_pro['c_image'];
		$prod_link=$row_pro['c_link'];
		$prod_desc=$row_pro['c_desc'];
		
		
		echo "
				<div id='single_product' align= 'middle'>
				
					<h3>$prod_title</h3>
					
					
					<img src='admin_area/coupon_images/$prod_image' width='600px' height='500px' />
					
					<p style='float:middle;'><b> $prod_price % DISCOUNT</b></p>
					<p><b>$prod_desc</b></p>
					
					
					<p><b> <a href='$prod_link' target='_blank'>Click here for copoun page</a></b></p>
					
		
						
					
					<a href='coupons.php' style='float:left;'>Go Back</a>
		
		         
				</div>	
				
			";
			}
		}
	?>
				</div>
				
				
				
				
				
				
				
				<div id="product_box">
					<?php
					if(isset($_GET['pro_id'])){
					
						$product_id=$_GET['pro_id'];
					$get_pro = "select * from products where product_id='$product_id'";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$prod_id=$row_pro['product_id'];
		$prod_title=$row_pro['product_title'];
		$prod_price=$row_pro['product_price'];
		$prod_image=$row_pro['product_image'];
		$prod_desc=$row_pro['product_desc'];
		$prod_link=$row_pro['product_link'];
		
		echo "
				<div id='single_product' align= 'middle'>
				
					<h3>$prod_title</h3>
					
					
					<a href='$prod_link' target='_blank'><img src='admin_area/product_images/$prod_image' width='600px' height='500px' /></a>
					
					<p style='float:middle;'><b> RS $prod_price</b></p>
					<p><b>$prod_desc</b></p>
					
					
					
						<p><b> <a href='$prod_link' target='_blank'>Click hereto purchase</a></b></p>
					
					<a href='index.php' style='float:left;'>Go Back</a>
		
		         
				</div>	
				
			";
			}
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