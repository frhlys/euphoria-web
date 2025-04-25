</head>

<body>
	
	<header class="page-header">
		<div class="page-header__topline">
			<div class="container clearfix">
				
				<div class="currency">
					<a class="currency__change" href="customer/my_account.php?my_orders">
						<?php
							if(!isset($_SESSION['customer_email'])){
								echo "Welcome :Guest"; 
							}
							else
							{ 
								echo "Welcome : " . $_SESSION['customer_email'] . "";
							}
						?>
					</a>
				</div>
				
				<div class="basket">
					<a href="php/cart.php" class="btn btn--basket">
						
						<?php items(); ?> items
					</a>
				</div>
				

				
				<ul class="login">
					
					<li class="login__item">
						<?php
							if(!isset($_SESSION['customer_email'])){
								echo '<a href="customer_register.php" class="login__link">Register</a>';
							} 
							else
							{ 
								echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
							}   
						?>  
						</li>
						
						
						<li class="login__item">
						<?php
						if(!isset($_SESSION['customer_email'])){
						echo '<a href="php/checkout.php" class="login__link">Sign In</a>';
						} 
						else
						{ 
						echo '<a href="./logout.php" class="login__link">Logout</a>';
						}   
						?>  
						
						</li>
						</ul>
						
						</div>
						</div>
						<!-- bottomline -->
						<div class="page-header__bottomline">
						<div class="container clearfix">
						
						<div class="logo">
						<a class="logo__link" href="index.php">
						<img class="logo__img" src="images/logo1.png" alt="Euphoria" width="237" height="19">
						</a>
						</div>
						
						<nav class="main-nav">
						<ul class="categories">
						
						<li class="categories__item">
						<a class="categories__link" href="index.php">
						Home
						</a>
						</li>
						
						<li class="categories__item">
						<a class="categories__link categories__link--active" href="shop.php">
						Shop
						</a>
						</li>
						
						<li class="categories__item">
						<a class="categories__link" href="about.php">
						About Us
						</a>
						</li>
						
						</ul>
						</nav>
						</div>
						</div>
						</header>						