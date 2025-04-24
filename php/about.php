<?php
	
	session_start();
	
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	
?>

<main>
    <!-- HERO -->
    <div class="nero">
		<div class="nero__heading">
			<span class="nero__bold">About</span> us
		</div>
		<p class="nero__text">
		</p>
	</div>
</main>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		
		<div class="col-md-12" ><!-- col-md-12 Starts -->
			
			<div class="box" ><!-- box Starts -->
				
				<h1>About Us - Meet Our Team Members</h1>
				
				
				<p>Euphoria Home & Decor consist of 4 diligent team members work under the guidance of the leaders and each of us with different task work together to built good furnishing quality to be provided to our customer. EUPHORIA HOME & DECOR is a furniture company where a group of web developers works together to develop a website to sell 
					and promote the furniture to customers easily. With this website, our customers can view all the products and details about the furniture that our company provided from different brands. The main idea of this web project is to provide convenience to customers in searching and finding the furniture they want to buy without having to go to the store physically. 
					With the idea that we brainstorm together, it is can help our customer to save their time, money and energy to 
				go to the store just to see the furniture and the details about it. </p>
				
			</div><!-- box Ends -->
			
		</div><!-- col-md-12 Ends -->
		
		
		
	</div><!-- container Ends -->
</div><!-- content Ends -->

<table border="3" align="center" style="width:70%">>
	<tr>
		<th>Name</th>
		<th>#</th>
		<th>Position</th>
		<th>Contact Number</th>
		<th>Email</th>
	</tr>
	<tr>
		<td>FARAH ALYSA</td>
		<td><img src="images/fr.jpg" alt="" height=100 width=100 /></td>
		<td>Project Manager</td>
		<td>011-3287545</td>
		<td>farah@gmail.com</td>
	</tr>
	<tr>
		<td>ABYLIANA</td>
		<td><img src="images/ab.jpeg" alt="" height=100 width=100 /></td>
		<td>Database Developer</td>
		<td>012-8375285</td>
		<td>abyliana@gmail.com</td>
	</tr>
    <tr>
		<td>ATHIRAH ARAMI</td>
		<td><img src="images/at.jpeg" alt="" height=100 width=100 /></td>
		<td>Web Developer 1</td>
		<td>019-27483244</td>
		<td>athirah@gmail.com</td>
	</tr>
    <tr>
		<td>NUR FATIN IZATI</td>
		<td><img src="images/fa.jpeg" alt="" height=100 width=100 /></td>
		<td>Web Developer 2</td>
		<td>018-3958235</td>
		<td>nurfatin@gmail.com</td>
	</tr>
</table>


<?php
	
	include("includes/footer.php");
	
?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
