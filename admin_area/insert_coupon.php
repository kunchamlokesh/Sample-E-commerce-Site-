<!DOCTYPE>
<?php

include("includes/db.php");

?>
<html>
	<head><title>INSERTING COUPON</title>
	<link rel="icon" type="image/jpg" href="images/logo.jpg"/>
	<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

	</head>
	
<body bgcolor="skyblue">
	<form method="post" action="insert_coupon.php" enctype="multipart/form-data">
	
		<table align="center" width="700px" border="1" bgcolor="orange">
		
			<tr align="center">
				<td colspan="7"><h2>Insert new copoun here </td>
			
			</tr>
			
			<tr>
				<td align="right"><b>Coupon Website:</b></td>
				<td><input type="text" name="c_website" size="60" required></td>
			</tr>
			
			
			
			<tr>
				<td align="right"><b>Copoun Image:</b></td>
				<td><input type="file" name="c_image" ></td>
			</tr>
			
			<tr>
				<td align="right"><b>Coupon value:</b></td>
				<td><input type="text" name="c_value" ></td>
			</tr>
			
			<tr>
				<td align="right"><b>Copoun Description:</b></td>
				<td>
					<textarea name="c_desc" cols="20" rows="10"></textarea>
				
				</td>
			</tr>
			<tr>
				<td align="right"><b>Coupon Link:</b></td>
				<td><input type=text name="c_link" size="100" required></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Coupon Keyword:</b></td>
				<td><input type=text name="c_key" size="50" required></td>
			</tr>
			
			<tr align="center">
				
				<td colspan="8"><input type="submit" name="insert_post" value="Insert Coupon Now"></td>
			</tr>
			
	
	
	</form>
</body>
</html>
<?php

		if(isset($_POST['insert_post']))
		{
			
			// getting data from feild
			$copoun_website=$_POST['c_website'];
			$copoun_value=$_POST['c_value'];
			$copoun_desc=$_POST['c_desc'];
			$copoun_link=$_POST['c_link'];
			$copoun_key=$_POST['c_key'];
			
			//getting image from feild
			
			$copoun_image = $_FILES['c_image']['name'];
			$copoun_image_tmp = $_FILES['c_image']['tmp_name'];
			
			move_uploaded_file($copoun_image_tmp,"coupon_images/$copoun_image");
			
			$insert_copoun="insert into copouns
			(c_website,c_image,c_value,c_desc,c_link,c_key) 
			values('$copoun_website','$copoun_image','$copoun_value','$copoun_desc','$copoun_link','$copoun_key')";
			
		
		
	 $insert_cop = mysqli_query($con,$insert_copoun);

		
		 if($insert_cop){
			
			echo "<script>alert('coupon has been inserted')</script>";
			echo "<script>window.open('insert_coupon.php','_self')</script>";
		  }

		}
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
		



















