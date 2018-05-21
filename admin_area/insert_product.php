<!DOCTYPE>
<?php

include("includes/db.php");

?>
<html>
	<head><title>INSERTING_PRODUCTS</title>
	<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

	</head>
	
<body bgcolor="skyblue">
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
	
		<table align="center" width="700px" border="1" bgcolor="orange">
		
			<tr align="center">
				<td colspan="7"><h2>Insert new post here </td>
			
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
					<select name="product_cat" required>
						<option>Select a catagory</option>
						<?php
						$get_cats = "select * from categories" ;
	 $run_cats = mysqli_query($con, $get_cats);
	 
	 while ($row_cats=mysqli_fetch_array($run_cats)){
		 
		 
		 $cat_id=$row_cats['cat_id'];
		 $cat_title=$row_cats['cat_title'];
		 
		 echo "<option value='$cat_id'>$cat_title</option>";
	 }
						
						
							?>
						
					</select>
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Brand:</b></td>
				<td><select name="product_brand" >
						<option>Select a Brand</option>
						<?php
						$get_brand = "select * from brans";
	$run_brand = mysqli_query($con, $get_brand);
	
	while($row_brand=mysqli_fetch_array($run_brand)){
		
		$brand_id=$row_brand['brand_id'];
		$brand_title=$row_brand['brand_title'];
	
		echo "<option value=$brand_id>$brand_title</option>";
	}
	 
						
						
							?>
						
					</select></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" ></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" ></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td>
					<textarea name="product_desc" cols="20" rows="10"></textarea>
				
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Link:</b></td>
				<td><input type=text name="product_link" size="100" required></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Product Keyword:</b></td>
				<td><input type=text name="product_key" size="50" required></td>
			</tr>
			
			<tr align="center">
				
				<td colspan="8"><input type="submit" name="insert_post" value="Inser Product Now"></td>
			</tr>
			
	
	
	</form>
</body>
</html>
<?php

		if(isset($_POST['insert_post']))
		{
			
			// getting data from feild
			$product_title=$_POST['product_title'];
			$product_cat=$_POST['product_cat'];
			$product_brand=$_POST['product_brand'];
			$product_price=$_POST['product_price'];
			$product_desc=$_POST['product_desc'];
			$product_link=$_POST['product_link'];
			$product_key=$_POST['product_key'];
			
			//getting image from feild
			
			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp = $_FILES['product_image']['tmp_name'];
			
			move_uploaded_file($product_image_tmp,"product_images/$product_image");
			
			$insert_product="insert into products
			(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keyword,product_link) 
			values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_key','$product_link')";
			
		
		
		$insert_pro = mysqli_query($con,$insert_product);
		
		if($insert_pro){
			
			echo "<script>alert('product has been inserted')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		  }
		}
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
		



















