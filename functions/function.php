<?php

$con = mysqli_connect("localhost","trnd9571","oY*e_a8%QwmL","trnd9571_lok");
if(mysqli_connect_errno())
{
	echo "Failed to Connect". mysqli_connect_error();
}

//getting user ip address

function getIp() {

    $ip = $_SERVER['REMOTE_ADDR'];

 

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    }

 

    return $ip;

}

//creating shopping cart
function cart(){
if(isset($_GET['add_cart'])){
	
	global $con;
	
	$ip =getIp();
	
	$pro_id=$_GET['add_cart'];
	
	$chek_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id' ";
	
	$run_chek = mysqli_query($con,$chek_pro);
	
	if(mysql_num_rows($run_chek)>0){
	 	echo"";
	      }
		else{
		$insert_pro = "insert into cart	(p_id,ip_add) values ('$pro_id','$ip')";
		
		$run_pro = mysqli_query($con, $insert_pro);
		
		echo "<script>window.open('index.php','_self')</script>";
		} 	
}	
	
}

//getting the total items

function total_items(){
	
	if(isset($_GET['add_cart'])){
		
		global $con;
		
		$ip = getIp();
		
		$get_items ="select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con,$get_items);
		
		$count_items = mysqli_num_rows($run_items);
	}
	
	else{
		global $con;
		
		$ip = getIp();
		
		$get_items ="select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con,$get_items);
		
		$count_items = mysqli_num_rows($run_items);
		
	}
	echo $count_items;
	
	
	
	
	
	}
//getting total price of items
function total_price(){
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
			
			$values = array_sum($product_price);
			
			$total +=$values;
			
		}
			
	}
	
	
	echo "RS",$total;	
	
}




//getting the categories

function getCats(){
	 global $con;
	 
	 $get_cats = "select * from `categories` " ;
	 $run_cats = mysqli_query($con,$get_cats);
	 
	 while ($row_cats=mysqli_fetch_array($run_cats)){
		 
		 
		 $cat_id=$row_cats['cat_id'];
		 $cat_title=$row_cats['cat_title'];
		 
		 echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
	 }
}

function getBrand(){
	global $con;
	
	$get_brand = "select * from `brans` ";
	$run_brand = mysqli_query($con, $get_brand);
	
	while($row_brand=mysqli_fetch_array($run_brand)){
		
		$brand_id=$row_brand['brand_id'];
		$brand_title=$row_brand['brand_title'];
	
		echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
	}
}
function getRange(){
	
	global $con;
	
	$get_range = "SELECT * FROM `range` ";	
	 
	$run_range = mysqli_query($con, $get_range);
	
	
	while($row_range=mysqli_fetch_array($run_range)){
		
		$range_id=$row_range['range_id'];
		
		$range_name=$row_range['range_name'];
	
		echo "<li><a href='index.php?range=$range_id'>$range_name</a></li>";
	}
}
function getpro(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
			if(!isset($_GET['range'])){
			
	
	global $con;
	
	$get_pro = "select * from products order by RAND()  LIMIT 0,9";
	
	$run_pro = mysqli_query($con,$get_pro);
	
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
					
					
					<a href='details.php?pro_id=$prod_id' style='float:middle;'><img src='admin_area/product_images/$prod_image' width='180' height='180'/></a>
					
					<p><b>Price: RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:middle;'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
			}
			}
  }	
}
function sidepro(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	
	global $con;
	
	$get_pro = "select * from products order by RAND() LIMIT 0,10;";
	
	$run_pro = mysqli_query($con,$get_pro);
	
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
					
					
					<a href='details.php?pro_id=$prod_id' style='float:middle;'><img src='admin_area/product_images/$prod_image' width='60' height='40'/></a>
					
					<p><b>Price: RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:middle;'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
		}
  }	
}




function sidecop(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	
	global $con;
	
	$get_pro = "select * from copouns order by RAND() ";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$prod_id=$row_pro['c_id'];
		$prod_title=$row_pro['c_website'];
		$prod_price=$row_pro['c_value'];
		$prod_image=$row_pro['c_image'];
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?c_id=$prod_id' style='float:middle;'><img src='admin_area/coupon_images/$prod_image' width='60' height='40'/></a>
					
					<p><b>$prod_price % DISCOUNT</b></p>
					<a href='details.php?c_id=$prod_id' style='float:middle;'>DETAILS</a>
		
		           
				</div>	
				
			";
	}
		}
  }	
}




function getcatpro(){
	if(isset($_GET['cat'])){
		
		$cat_id=$_GET['cat'];
	
	global $con;
	
	$get_cat_pro= "select * from products where product_cat='$cat_id'";
	
	$run_cat_pro = mysqli_query($con,$get_cat_pro);
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	if($count_cats==0){
			
			echo "<h2><b>There is no product in this category</b></h2>";
			
		}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
		
		$prod_id=$row_cat_pro['product_id'];
		$prod_cat=$row_cat_pro['product_cat'];
		$prod_brand=$row_cat_pro['product_brand'];
		$prod_title=$row_cat_pro['product_title'];
		$prod_price=$row_cat_pro['product_price'];
		$prod_image=$row_cat_pro['product_image'];
		
		
		
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?pro_id=$prod_id' style='float:middle;'><img src='admin_area/product_images/$prod_image' width='180' height='180'/></a>
					
					<p><b> RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:middle;'>DETAILS</a>
		
		           
				</div>	
				
			";
		
	}
		}
  	
}
function getbrandpro(){
	if(isset($_GET['brand'])){
		
		$brand_id=$_GET['brand'];
	
	global $con;
	
	$get_brand_pro= "select * from products where product_brand='$brand_id'";
	
	$run_brand_pro = mysqli_query($con,$get_brand_pro);
	
	$count_brands = mysqli_num_rows($run_brand_pro);
	if($count_brands==0){
			
			echo "<h2><b>There is no product in this category</b></h2>";
			
		
		}
	
	while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
		
		$prod_id=$row_brand_pro['product_id'];
		$prod_cat=$row_brand_pro['product_cat'];
		$prod_brand=$row_brand_pro['product_brand'];
		$prod_title=$row_brand_pro['product_title'];
		$prod_price=$row_brand_pro['product_price'];
		$prod_image=$row_brand_pro['product_image'];
		
		
		
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?pro_id=$prod_id' style='float:middle;' ><img src='admin_area/product_images/$prod_image' width='180' height='180'/></a>
					
					<p><b> RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:middle;' >DETAILS</a>
		
		           
				</div>	
				
			";
		
	}
		}
  	
}		
	
	
	
	
	function getrangepro(){
	if(isset($_GET['range'])){
		
		$brand_id=$_GET['range'];
	
	global $con;
	
	switch ($brand_id)
	{
		case 1 :$get_price_pro= "select * from products where product_price BETWEEN 0 AND 500";
		break;
		case 2 :$get_price_pro= "select * from products where product_price BETWEEN 500 AND 1000";
		break;
		case 3 :$get_price_pro= "select * from products where product_price BETWEEN 1000 AND 5000";
		break;
		case 4 :$get_price_pro= "select * from products where product_price BETWEEN 5000 AND 10000";
		break;
		case 5 :$get_price_pro= "select * from products where product_price BETWEEN 10000 AND 20000";
		break;
		default :$get_price_pro= "select * from products where product_price >=20000";
		break;
	}
	
	
	
	$run_price_pro = mysqli_query($con,$get_price_pro);
	
	$count_price = mysqli_num_rows($run_price_pro);
	if($count_price==0){
			
			echo "<h2><b>There is no product in this category</b></h2>";
			
		
		}
	
	while($row_brand_pro=mysqli_fetch_array($run_price_pro)){
		
		$prod_id=$row_brand_pro['product_id'];
		$prod_cat=$row_brand_pro['product_cat'];
		$prod_brand=$row_brand_pro['product_brand'];
		$prod_title=$row_brand_pro['product_title'];
		$prod_price=$row_brand_pro['product_price'];
		$prod_image=$row_brand_pro['product_image'];
		
		
		
		
		echo "
				<div id='single_product'>
				
					<h3>$prod_title</h3>
					
					
					<a href='details.php?pro_id=$prod_id' style='float:middle;' ><img src='admin_area/product_images/$prod_image' width='180' height='180'/></a>
					<p><b> RS $prod_price</b></p>
					<a href='details.php?pro_id=$prod_id' style='float:middle;' >DETAILS</a>
		
		           
				</div>	
				
			";
		
	}
		}
  	
}		
?>