<?php
	
	session_start();
	
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	
?>

<?php
	
	
	$product_id = @$_GET['pro_id'];
	
	$get_product = "select * from products where product_url='$product_id'";
	
	$run_product = mysqli_query($con,$get_product);
	
	$check_product = mysqli_num_rows($run_product);
	
	if($check_product == 0){
		
		echo "<script> window.open('index.php','_self') </script>";
		
	}
	else{
		
		
		
		$row_product = mysqli_fetch_array($run_product);
		
		$p_cat_id = $row_product['p_cat_id'];
		
		$pro_id = $row_product['product_id'];
		
		$pro_title = $row_product['product_title'];
		
		$pro_price = $row_product['product_price'];
		
		$pro_desc = $row_product['product_desc'];
		
		$pro_img1 = $row_product['product_img1'];
		
		$pro_img2 = $row_product['product_img2'];
		
		$status = $row_product['status'];
		
		$pro_url = $row_product['product_url'];
		
		
		
	?>
	
	<main>
		<div class="nero">
			<div class="nero__heading">
				<span>Product </span>View
			</div>
			<p class="nero__text">
			</p>
		</div>
	</main>
	
	<div id="content" >
		<div class="container" >	
			
			<div class="col-md-12">
				
				<div class="row" id="productMain">
					
					<div class="col-sm-6">
						
						<div id="mainImage">
							
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								
								<ol class="carousel-indicators">
									
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									
								</ol><!-- carousel-indicators Ends -->
								
								<div class="carousel-inner"><!-- carousel-inner Starts -->
									
									<div class="item active">
										<center>
											<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
										</center>
									</div>
									
									<div class="item">
										<center>
											<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
										</center>
									</div>
									
								</div><!-- carousel-inner Ends -->
								
								<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->
									
									<span class="glyphicon glyphicon-chevron-left"> </span>
									
									<span class="sr-only"> Previous </span>
									
								</a><!-- left carousel-control Ends -->
								
								<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->
									
									<span class="glyphicon glyphicon-chevron-right"> </span>
									
									<span class="sr-only"> Next </span>
									
								</a>
								
							</div>
							
						</div>
					</div>
					
					
					<div class="col-sm-6" >
						
						<div class="box" >
							
							<h1 class="text-center" > <?php echo $pro_title; ?> </h1>
							
							<h1 class="text-center" > RM <?php echo $pro_price; ?> </h1>
							
							
							<?php
								
								
								if(isset($_POST['add_cart'])){
									
									$ip_add = getRealUserIp();
									
									$p_id = $pro_id;
									
									$product_qty = $_POST['product_qty'];
									
									
									$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
									
									$run_check = mysqli_query($con,$check_product);
									
									if(mysqli_num_rows($run_check)>0){
										
										echo "<script>alert('This Product is already added in cart')</script>";
										
										echo "<script>window.open('$pro_url','_self')</script>";
										
									}
									else {
										
										$get_price = "select * from products where product_id='$p_id'";
										
										$run_price = mysqli_query($con,$get_price);
										
										$row_price = mysqli_fetch_array($run_price);
										
										$pro_price = $row_price['product_price'];
	
										$query = "insert into cart (p_id,ip_add,qty,p_price) values ('$p_id','$ip_add','$product_qty','$product_price')";
										
										$run_query = mysqli_query($db,$query);
										
										echo "<script>window.open('$pro_url','_self')</script>";
										
									}
									
								}
								
								
							?>
							
							<form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->
								
								<?php
									
									if($status == "product"){
										
									?>
									
									<div class="form-group"><!-- form-group Starts -->
										
										<label class="col-md-5 control-label" >Product Quantity </label>
										
										<div class="col-md-7" ><!-- col-md-7 Starts -->
											
											<select name="product_qty" class="form-control" >
												
												<option>Select quantity</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												
												
											</select>
											
										</div><!-- col-md-7 Ends -->
										
									</div><!-- form-group Ends -->
									
									
									<?php } ?>
								
								
								
								<p class="text-center buttons" ><!-- text-center buttons Starts -->
									
									<button class="btn btn-danger" type="submit" name="add_cart">
										
										<i class="fa fa-shopping-cart" ></i> Add to Cart
										
									</button>
									
									<?php
										
										if(!isset($_SESSION['customer_email'])){
											
											
											echo "<script>window.open('checkout.php','_self')</script>";
											
										}
										else{
											
											$customer_session = $_SESSION['customer_email'];
											
											$get_customer = "select * from customers where customer_email='$customer_session'";
											
											$run_customer = mysqli_query($con,$get_customer);
											
											$row_customer = mysqli_fetch_array($run_customer);
											
											$customer_id = $row_customer['customer_id'];
											
											
										}
										
									?>
									
								</p>
								
							</form>
							
						</div>
						
						
						<div class="row" id="thumbs" >
							
							<div class="col-xs-4" >
								
								<a href="#" class="thumb" >
									
									<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >
									
								</a>
								
							</div><!-- col-xs-4 Ends -->
							
							<div class="col-xs-4" ><!-- col-xs-4 Starts -->
								
								<a href="#" class="thumb" >
									
									<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >
									
								</a>
								
							</div><!-- col-xs-4 Ends -->
							
							
						</div><!-- row Ends -->
						
						
					</div><!-- col-sm-6 Ends -->
					
					
				</div><!-- row Ends -->
				
				<div class="box" id="details"><!-- box Starts -->
					
					<a class="btn btn-info tab" style="margin-bottom:10px;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->
						
						<?php
							
							if($status == "product"){
								
								echo "Product Description";
								
							}
							else{
								
								echo "Product Description";
								
							}
							
						?>
						
					</a><!-- btn btn-primary tab Ends -->
					
					
					<hr style="margin-top:0px;">
					
					<div class="tab-content"><!-- tab-content Starts -->
						
						<div id="description" class="tab-pane fade in active" style="margin-top:7px;" >
							
							<?php echo $pro_desc; ?>
							
						</div><!-- description tab-pane fade in active Ends -->
						
					</div><!-- tab-content Ends -->
					
				</div><!-- box Ends -->
				
			
				
			</div>
			
			
		</div>
	</div>
	
	<?php
		
		include("includes/footer.php");
		
	?>
	
	<script src="js/jquery.min.js"> </script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>

<?php } ?>
