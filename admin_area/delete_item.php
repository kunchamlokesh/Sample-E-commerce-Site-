<!DOCTYPE>

<html>
	<head>
		<title>TRENDY DEALS</title>
    
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>

	<!--Main container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		  
			<a href="index.php"><img id="logo" src="images/logo.jpg"  width="300px" height="100px"/></a>
			<img id="banner" src="images/ad_banner.png" width="700px" height="100px" />
			
		
		</div>
		<!--Header ends here-->
		
		<!--Navigation bar starts here-->
		
				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="search here" />
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
		
		<!--Navigation bar ends here-->
		
		<!--Content wrapper starts here-->
		
		<div class="content_wrapper">
			
			
			<div id="content">
				<div id="shopping_cart">
					
				
				
				</div>
				
					
				<div id="product_box">
				
				<?php
				if(isset($_GET['search'])){
					
					$search_query= $_GET['user_query'];
				
					$get_pro = "select * from products where product_keyword like '%$search_query%'";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	$count_pro = mysqli_num_rows($run_pro);
	if($count_pro==0){
			
			
					
					$search_query= $_GET['user_query'];
				
					$get_cop = "select * from copouns where c_key like '%$search_query%'";
	
	$run_cop = mysqli_query($con,$get_cop);
	$count_pro = mysqli_num_rows($run_cop);
	if($count_pro==0){
			
			echo "<h2><b>No such product avaliable</b></h2>";
			
		}
	
	 
	while($row_pro=mysqli_fetch_array($run_cop)){
		
		$prod_id=$row_pro['c_id'];
		
		$prod_title=$row_pro['c_website'];
		$prod_price=$row_pro['c_value'];
		$prod_image=$row_pro['c_image'];
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?pro_id=$prod_id' style='float:left;' align='center'><img src='admin_area/coupon_images/$prod_image' width='180' height='180'/></a>
					
					<p><b> $prod_price % DISCOUNT</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:left;' align='center'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
				}
			
		
	
	 
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$prod_id=$row_pro['product_id'];
		$prod_cat=$row_pro['product_cat'];
		$prod_brand=$row_pro['product_brand'];
		$prod_title=$row_pro['product_title'];
		$prod_price=$row_pro['product_price'];
		$prod_image=$row_pro['product_image'];
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<img src='admin_area/product_images/$prod_image' width='180' height='180'/>
					
					<p><b>RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:left;' align='center'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
				}
			?>		
					
					
				</div>
				
				
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
			
			
			
			
			</div>
		</div>
		
		<!--Content wrapper ends here-->
		
		<!--Fotter starts here-->
		
		<div id="fotter">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2015 by WWW.TrendyDeals.co.in</h2>
		</div>
		
		<!--Fotter ends here-->
	
	
	
	</div>
   <!--Main conatainer ends here-->
</body>
</html>