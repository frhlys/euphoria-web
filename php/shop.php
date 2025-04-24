<?php
	
	session_start();
	
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	
?>
<main>
    <div class="nero">
		<div class="nero__heading">
			<span>shop</span> AT EUPHORIA
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
		
		<div class="col-md-9" ><!-- col-md-9 Starts --->
			
			
			<?php getProducts(); ?>
			
		</div><!-- row Ends -->
		
		<center><!-- center Starts -->
			
			<ul class="pagination" ><!-- pagination Starts -->
				
				<?php getPaginator(); ?>
				
			</ul><!-- pagination Ends -->
			
		</center><!-- center Ends -->
		
	</div><!-- col-md-9 Ends --->
	
</div><!--- wait Ends -->


<?php
	
	include("includes/footer.php");
	
?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>
	
	$(document).ready(function(){
		
		
		/// Search Filters code Starts ///
		
		$(function(){
			
			$.fn.extend({
				
				filterTable: function(){
					
					return this.each(function(){
						
						$(this).on('keyup', function(){
							
							var $this = $(this),
							
							search = $this.val().toLowerCase(),
							
							target = $this.attr('data-filters'),
							
							handle = $(target),
							
							rows = handle.find('li a');
							
							if(search == '') {
								
								rows.show();
								
								} else {
								
								rows.each(function(){
									
									var $this = $(this);
									
									$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
									
								});
								
							}
							
						});
						
					});
					
				}
				
			});
			
			$('[data-action="filter"][id="dev-table-filter"]').filterTable();
			
		});
		
		/// Search Filters code Ends ///
		
	});
	
</script>

<script>
	
	
	$(document).ready(function(){
		
		// getProducts Function Code Starts
		
		function getProducts(){
			
			
			// ajax Code Starts
			
			$.ajax({
				
				url:"load.php",
				
				method:"POST",
				
				data: sPath+'sAction=getProducts',
				
				success:function(data){
					
					$('#Products').html('');
					
					$('#Products').html(data);
					
					$("#wait").empty();
					
				}
				
			});
			
			$.ajax({
				url:"load.php",
				method:"POST",
				data: sPath+'sAction=getPaginator',
				success:function(data){
					$('.pagination').html('');
					$('.pagination').html(data);
				}
				
			});
			
			// ajax Code Ends
			
		}
		
		// getProducts Function Code Ends
		
		
		
		$('.get_p_cat').click(function(){
			
			getProducts();
			
		});

		
		
	});
	
</script>

</body>

</html>
