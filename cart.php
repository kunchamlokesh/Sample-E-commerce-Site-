<!DOCTYPE>
<?php
session_start();

include("functions/function.php");

?>
<html>
	<head>
		<title>MY ONLINE SHOPPING</title>
    
	
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
		<div class="menubar">
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All products</a></li>
					<li><a href="mycart.php">My cart</a></li>
					<li><a href="#">Sign up</a></li>
					<li><a href="cart.php">Shopping</a></li>
					<li><a href="#">Contactus</a></li>
				
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
			
			<?php cart(); ?>
				<div id="shopping_cart">
					<span style="float:right;font-size:18px; padding:5px; line-height:40px; ">
					Welcome Guest! <b style="color:yellow;">Shopping Cart -</b>TotalItems: <?php total_items(); ?> TotalPrice: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					</span>
				
				
				</div>
				
					
				<div id="product_box">
				<br>
				<form action="" method="post"  enctype="multipart/form-data">
				
				  <table align="center" width="700" bgcolor="skyblue">
					<tr align="center">
						<th>Remove</th>
						<th>product</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
	<?php
					
	$total = 0;
	
	global $con;
	
	$ip=getIp();
	
	$sel_price = " select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($con,$sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		
		$pro_id =$p_price['p_id'];
		
		$pro_price = "select * from products where product_id='$pro_id'";
		
		$run_pro_price = mysqli_query($con,$pro_price);
		
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			
			$product_image = $pp_price['product_image'];
			
			$single_price =$pp_price['product_price'];
			
			
			$values = array_sum($product_price);
			
			$total +=$values;
			
	
	
	            ?>
				<tr align="center">
				 <td><input type="checkbox", name="remove[]" value="<?php echo $pro_id; ?>"/></td>
				 <td><?php echo $product_title; ?><br>
				 <img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
				 </td>
				 <td><input type="text" size="4" name="qty" value="<?php echo $_SESSION['qty']; ?>"/></td>
				 <?php
				 if(isset($_POST['update_cart'])){
				
						$qty =$_POST['qty'];
						
						$update_qty = "update cart set qty='$qty'";
						$run_qty=mysqli_query($con,$update_qty);
						
						$_SESSION['qty']=$qty;
						
						$total = $total*$qty;
		
				 }
				 ?>
				 
				 <td> <?php echo "RS". $single_price; ?></td>
				 
					</tr>
					
					
						
	       <?php }} ?>
		     <tr align="right">
						<td colspan="5"><b>Sub Total:</b></td>
						<td><?php echo "RS".$total; ?></td>
					</tr>
					
					<tr align="center"> 
						<td colspan="2"><input type="submit" name="update_cart" value="update_cart"/></td>
						<td><input type="submit" name="continue" value="Continue Shopping"/></td>
						<td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
					</tr>
					
						
				</table>
				</form>
				
				<?php
				
					function updatecart(){
						global $con;
					
					$ip= getIp();
					if(isset($_POST['update_cart'])){
						
						foreach($_POST['remove'] as $remove_id){
							
							$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
							
							$run_delete = mysqli_query($con,$delete_product);
							
							if($run_delete)
							{
								echo "<script>window.open('cart.php','_self')</script>";
							}
							
						}
					}
					
					
					if(isset($_POST['continue'])){
						echo "<script>window.open('index.php','_self')</script>";
					  }
					  echo @$up_cart= updatecart();
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
			
			
			
			
			</div>
		</div>
		
		<!--Content wrapper ends here-->
		
		<!--Fotter starts here-->
		
		<div id="fotter">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2015 by www.trndydeals.com</h2>
		</div>
		
		<!--Fotter ends here-->
	
	
	
	</div>
   <!--Main conatainer ends here-->
</body>
</html>