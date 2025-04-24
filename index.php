<?php
	
	session_start();
	
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	
?>

<main>
    <div class="hero">
		<a href="shop.php" class="btn1">View all products
		</a>
	</div>
    <div class="wrapper">
		<h1>Latest Collection<h1>
            
		</div>
		
		
		
		<div id="content" class="container">
			
			<div class="row">
				
				<?php
					getPro();

				?>
				
			</div>
			
		</div>
		
		<!-- FOOTER -->
		<footer class="page-footer">
			
			<div class="footer-nav">
				<div class="container clearfix">
					
					<div class="footer-nav__col footer-nav__col--info">
						<div class="footer-nav__heading">For Admin</div>
						<ul class="footer-nav__list">
						<li class="footer-nav__item">
						<a href="admin_area/index.php?dashboard" class="footer-nav__link">Admin Page</a>
						</li>

						</ul>
						</div>
						
						<div class="footer-nav__col footer-nav__col--account">
						<div class="footer-nav__heading">Your account</div>
						<ul class="footer-nav__list">
						<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Sign in</a>
						</li>
						<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Register</a>
						</li>
						</ul>
						</div>
						
						
						<div class="footer-nav__col footer-nav__col--contacts">
						<div class="footer-nav__heading">Contact details</div>
						<address class="address">
						Head Office: Euphoria Home Decor.<br>
						50183 - Mont Kiara, Kuala Lumpur.
						</address>
						<div class="phone">
						Telephone:
						<a class="phone__number" href="tel:019-33372011">019-33372011</a>
						</div>
						<div class="email">
						Email:
						<a href="mailto:euphoria@email.com" class="email__addr">euphoria@email.com</a>
						</div>
						</div>
						
						</div>
						</div>
						
						<div class="page-footer__subline">
						<div class="container clearfix">
						
						<div class="copyright">
						&copy; Euphoria Home&Decor;
						</div>
						</div>
						</footer>
						</body>
						
						</html>
												