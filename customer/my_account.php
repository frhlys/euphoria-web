<?php
	
	session_start();
	
	if(!isset($_SESSION['customer_email'])){
		
		echo "<script>window.open('../checkout.php','_self')</script>";
		
		
		}else {
		
		include("includes/db.php");
		include("../includes/header.php");
		include("functions/functions.php");
		include("includes/main.php");
		
		
	?>
	<main>
		<div class="nero">
			<div class="nero__heading">
				<span>My </span>Account
			</div>
			<p class="nero__text">
			</p>
		</div>
	</main>
	
	<div id="content" ><!-- content Starts -->
		<div class="container" ><!-- container Starts -->
			
			
			<div class="col-md-3"><!-- col-md-3 Starts -->
				
				<?php include("includes/sidebar.php"); ?>
				
			</div><!-- col-md-3 Ends -->
			
			<div class="col-md-9" ><!--- col-md-9 Starts -->
				
				<div class="box" ><!-- box Starts -->
					
					<?php
						
						if(isset($_GET['my_orders'])){
							
							include("my_orders.php");
							
						}
						if(isset($_GET['edit_account'])) {
							
							include("edit_account.php");
							
						}
						
						if(isset($_GET['change_pass'])){
							
							include("change_pass.php");
							
						}
						
						
					?>
					
				</div><!-- box Ends -->
			
			
			</div><!--- col-md-9 Ends -->
			
			</div><!-- container Ends -->
			</div><!-- content Ends -->
			
			
			
			<?php
			
			include("../includes/footer.php");
			
			?>
			
			<script src="js/jquery.min.js"> </script>
			
			<script src="js/bootstrap.min.js"></script>
			
			</body>
			</html>
			<?php } ?>
						