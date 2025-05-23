<?php
	
	if(!isset($_SESSION['admin_email'])){
		
		echo "<script>window.open('login.php','_self')</script>";
		
	}
	
	else {
		
	?>
	
	<?php
		
		if(isset($_GET['edit_product'])){
			
			$edit_id = $_GET['edit_product'];
			
			$get_p = "select * from products where product_id='$edit_id'";
			
			$run_edit = mysqli_query($con,$get_p);
			
			$row_edit = mysqli_fetch_array($run_edit);
			
			$p_id = $row_edit['product_id'];
			
			$p_title = $row_edit['product_title'];
			
			$p_cat = $row_edit['p_cat_id'];
			
			
			$p_image1 = $row_edit['product_img1'];
			
			$p_image2 = $row_edit['product_img2'];
			
			
			$new_p_image1 = $row_edit['product_img1'];
			
			$new_p_image2 = $row_edit['product_img2'];
			
			
			$p_price = $row_edit['product_price'];
			
			$p_desc = $row_edit['product_desc'];
			
			$p_url = $row_edit['product_url'];
			
			
		}
		
		
		$get_p_cat = "select * from product_categories where p_cat_id='$p_cat'";
		
		$run_p_cat = mysqli_query($con,$get_p_cat);
		
		$row_p_cat = mysqli_fetch_array($run_p_cat);
		
		$p_cat_title = $row_p_cat['p_cat_title'];
		
	?>
	
	
	<!DOCTYPE html>
	
	<html>
		
		<head>
			
			<title> Edit Products </title>
			
			
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			<script>tinymce.init({ selector:'#product_desc' });</script>
			
		</head>
		
		<body>
			
			<div class="row"><!-- row Starts -->
				
				<div class="col-lg-12"><!-- col-lg-12 Starts -->
					
					<ol class="breadcrumb"><!-- breadcrumb Starts -->
						
						<li class="active">
							
							<i class="fa fa-dashboard"> </i> Dashboard / Edit Products
							
						</li>
						
					</ol><!-- breadcrumb Ends -->
					
				</div><!-- col-lg-12 Ends -->
				
			</div><!-- row Ends -->
			
			
			<div class="row"><!-- 2 row Starts --> 
				
				<div class="col-lg-12"><!-- col-lg-12 Starts -->
					
					<div class="panel panel-default"><!-- panel panel-default Starts -->
						
						<div class="panel-heading"><!-- panel-heading Starts -->
							
							<h3 class="panel-title">
								
								<i class="fa fa-money fa-fw"></i> Edit Products
								
							</h3>
							
						</div><!-- panel-heading Ends -->
						
						<div class="panel-body"><!-- panel-body Starts -->
							
							<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Title </label>
									
									<div class="col-md-6" >
										
										<input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">
										
									</div>
									
								</div><!-- form-group Ends -->
								
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Url </label>
									
									<div class="col-md-6" >
										
										<input type="text" name="product_url" class="form-control" required value="<?php echo $p_url; ?>" >
										
										<br>
										
									</div>
									
								</div><!-- form-group Ends -->
								
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Category </label>
									
									<div class="col-md-6" >
										
										<select name="product_cat" class="form-control" >
											
											<option value="<?php echo $p_cat; ?>" > <?php echo $p_cat_title; ?> </option>
											
											
											<?php
												
												$get_p_cats = "select * from product_categories";
												
												$run_p_cats = mysqli_query($con,$get_p_cats);
												
												while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
													
													$p_cat_id = $row_p_cats['p_cat_id'];
													
													$p_cat_title = $row_p_cats['p_cat_title'];
													
													echo "<option value='$p_cat_id' >$p_cat_title</option>";
													
												}
												
												
											?>
											
											
										</select>
										
									</div>
									
								</div><!-- form-group Ends -->
								
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Image 1 </label>
									
									<div class="col-md-6" >
										
										<input type="file" name="product_img1" class="form-control" >
										<br><img src="product_images/<?php echo $p_image1; ?>" width="70" height="70" >
										
									</div>
									
								</div><!-- form-group Ends -->
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Image 2 </label>
									
									<div class="col-md-6" >
										
										<input type="file" name="product_img2" class="form-control" >
										<br><img src="product_images/<?php echo $p_image2; ?>" width="70" height="70" >
										
									</div>
									
								</div><!-- form-group Ends -->
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Price </label>
									
									<div class="col-md-6" >
										
										<input type="text" name="product_price" class="form-control" required value="<?php echo $p_price; ?>" >
										
									</div>
									
								</div><!-- form-group Ends -->
								
								
								<div class="form-group" ><!-- form-group Starts -->
									
									<label class="col-md-3 control-label" > Product Tabs </label>
									
									<div class="col-md-6" >
										
										<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->
											
											<li class="active">
												
												<a data-toggle="tab" href="#description"> Product Description </a>
												
											</li>
											
											
										</ul><!-- nav nav-tabs Ends -->
										
										<div class="tab-content"><!-- tab-content Starts -->
											
											<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->
												
												<br>
												
												<textarea name="product_desc" class="form-control" rows="15" id="product_desc">
													
													<?php echo $p_desc; ?>
													
												</textarea>
												
											</div><!-- description tab-pane fade in active Ends -->
											
											
											<div class="form-group" ><!-- form-group Starts -->
												
												<label class="col-md-3 control-label" ></label>
												
												<div class="col-md-6" >
													
													<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >
													
												</div>
												
											</div><!-- form-group Ends -->
											
										</form><!-- form-horizontal Ends -->
										
									</div><!-- panel-body Ends -->
									
								</div><!-- panel panel-default Ends -->
								
							</div><!-- col-lg-12 Ends -->
							
						</div><!-- 2 row Ends --> 
						
					</body>
					
				</html>
				
				<?php
					
					if(isset($_POST['update'])){
						
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
						
						if(empty($product_img1)){
							
							$product_img1 = $new_p_image1;
							
						}
						
						
						if(empty($product_img2)){
							
							$product_img2 = $new_p_image2;
							
						}
						
						
						
						move_uploaded_file($temp_name1,"product_images/$product_img1");
						move_uploaded_file($temp_name2,"product_images/$product_img2");
						
						
						$update_product = "update products set p_cat_id='$product_cat',product_title='$product_title',product_url='$product_url',product_img1='$product_img1',product_img2='$product_img2',product_price='$product_price',product_desc='$product_desc',status='$status' where product_id='$p_id'";
						
						$run_product = mysqli_query($con,$update_product);
						
						if($run_product){
							
							echo "<script> alert('Product has been updated successfully') </script>";
							
							echo "<script>window.open('index.php?view_products','_self')</script>";
							
						}
						
					}
					
				?>
				
			<?php } ?>
				