<?php
	
	if(!isset($_SESSION['admin_email'])){
		
		echo "<script>window.open('login.php','_self')</script>";
		
	}
	
	else {
		
	?>
	<!DOCTYPE html>
	
	<html>
		
		<head>
			
			<title> Insert Products </title>
			
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			<script>tinymce.init({ selector:'#product_desc' });</script>
			
		</head>
		
		<body>
			
			<div class="row">
				
				<div class="col-lg-12">
					
					<ol class="breadcrumb">
						
						<li class="active">
							
							<i class="fa fa-dashboard"> </i> Dashboard / Insert Products
							
						</li>
						
					</ol>
					
				</div>
				
			</div>
			
			
			<div class="row">
				
				<div class="col-lg-12">
					
					<div class="panel panel-default">
						
						<div class="panel-heading">
							
						<h3 class="panel-title">
						
						<i class="fa fa-money fa-fw"></i> Insert Products
						
						</h3>
						
						</div>
						
						<div class="panel-body">
						
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Title </label>
						
						<div class="col-md-6" >
						
						<input type="text" name="product_title" class="form-control" required >
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Url </label>
						
						<div class="col-md-6" >
						
						<input type="text" name="product_url" class="form-control" required >
						
						<br>
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Image 1 </label>
						
						<div class="col-md-6" >
						
						<input type="file" name="product_img1" class="form-control" required >
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Image 2 </label>
						
						<div class="col-md-6" >
						
						<input type="file" name="product_img2" class="form-control" required >
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Price </label>
						
						<div class="col-md-6" >
						
						<input type="text" name="product_price" class="form-control" required >
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" > Product Desc </label>
						
						<div class="col-md-6" >
						
						<div class="tab-content">
						
						<div id="description" class="tab-pane fade in active">
						
						<br>
						
						<textarea name="product_desc" class="form-control" rows="15" id="product_desc">
						
						
						</textarea>
						
						</div>
						
						
						</div>
						
						</div>
						
						</div>
						
						<div class="form-group" >
						
						<label class="col-md-3 control-label" ></label>
						
						<div class="col-md-6" >
						
						<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >
						
						</div>
						
						</div>
						
						</form>
						
						</div>
						
						</div>
						
						</div>
						
						</div>
						
						
						
						
						</body>
						
						</html>
						
						<?php
						
						if(isset($_POST['submit'])){
						
						$product_title = $_POST['product_title'];
						$product_cat = $_POST['product_cat'];
						$product_price = $_POST['product_price'];
						$product_desc = $_POST['product_desc'];
						$product_url = $_POST['product_url'];
						
						$status = "product";
						
						$product_img1 = $_FILES['product_img1']['name'];
						$product_img2 = $_FILES['product_img2']['name'];
						
						
						$temp_name1 = $_FILES['product_img1']['tmp_name'];
						$temp_name2 = $_FILES['product_img2']['tmp_name'];
						
						move_uploaded_file($temp_name1,"product_images/$product_img1");
						move_uploaded_file($temp_name2,"product_images/$product_img2");
						
						$insert_product = "insert into products (product_title,product_url,product_img1,product_img2,product_price,product_desc,product_label,status) values ('$product_cat','$cat',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_price','$product_desc','$status')";
						
						$run_product = mysqli_query($con,$insert_product);
						
						if($run_product){
						
						echo "<script>alert('Product has been inserted successfully')</script>";
						
						echo "<script>window.open('index.php?view_products','_self')</script>";
						
						}
						
						}
						
						?>
						
						<?php } ?>
												