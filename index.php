<!DOCTYPE>
<html>
	<head>
		<title>My Online Shop</title>
		
	<link rel="stylesheet" href="styles/style.css" media="all" />	
	</head>
	
	
<body>

<h1>Beauty Diaries</h1>

	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<img id="logo" src="image/logo.jpg" style="width:250px; height:150px;" />
			<img id="banner" src="image/ad.jpg" style="width:250px; height:150px;" />
		
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			<ul id="nav_bar">
			
				<li class="nav_button"><a href="#">Home</a></li>
				<li class="nav_button"><a href="#">All Products</a></li>
				<li class="nav_button"><a href="#">My Account</a></li>
				<li class="nav_button"><a href="#">Sign Up</a></li>
				<li class="nav_button"><a href="#">Shopping Cart</a></li>
				<li class="nav_button"><a href="#">Contact Us</a></li>

			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
			
		</div>
		<!--Navigation Bar ends-->
		
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
					<li><a href="#">Face</a></li>
					<li><a href="#">Cheek</a></li>
					<li><a href="#">Eye</a></li>
					<li><a href="#">Lip</a></li>
					<li><a href="#">Brushes&Applications</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Nail</a></li>
				
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
				
					<li><a href="#">NARS</a></li>
					<li><a href="#">YSL</a></li>
					<li><a href="#">DIOR</a></li>
					<li><a href="#">LANCOME</a></li>
					<li><a href="#">SMASHBOX</a></li>
					<li><a href="#">TOO FACED</a></li>
					<li><a href="#">TOM FORD</a></li>
					<li><a href="#">MARC JACOBS BEAUTY</a></li>
				
				</ul>
				
			</div>

			<div id="content_area">This is content area</div>
		</div>
		<!--Content wrapper ends-->
		
		<div id="footer">This is the footer</div>
	</div>
	<!--Main Container ends here-->
		
</body>
</html>