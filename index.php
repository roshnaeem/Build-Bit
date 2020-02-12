<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/headfoot.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="footer, address, phone, icons" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="CSS/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
	<title>
		Making building PCs Easy
	</title>
	
	<style>
		input {
		font-size: 16px;
		color: black;
	}
		
		
		.search-bar { 
			width : 70%;
			height : 2vw;
			font-size:1.5vw;
			float:left;
			margin-left: 10%;
		}
		
		.search-div { 
			width : 100%;
			margin: auto;
			margin-top: 3%;
			margin-bottom: 3%;
			padding: 1%;
		}
		
		.search-button { 
			height: 2vw;
			width: 2vw;
			float:left;
			background-color: #dfaee8;
		}
		
		.posters {
			padding: 0% 10%;
			margin-bottom: 2%
		}
		
		.aboutus {
		width:100%;
		margin:auto;
		background-color:#2b061e;
		color:#fffffe;
		font-size:2vw;
		padding: 5% 5%;
		margin-bottom:2%;
		}
		
		.buttonpanel{
		 padding: 5px;
		 background-color:#black;
		 width:100%;
		 height: auto;
		 margin-bottom:2%;

		 
		}
		.button {
		float:left;
		padding: 25px; 
		font-size:2vw;
		display: inline-block;
		color: #dfaee8;
		background-color:black;
		width: 25%;
		height: 100%;
		margin:4% 4%;
		border:none;
		text-align:center;
		cursor:pointer;
		transition:transform;
		transition-duration:0.3s;
		}
		
		
		.button:hover {
		color: #fffffe;
		transform: scale(1.25);}
		
		.button:active {
			transform: translateY(4px);
			border: none;
		}
		
		.button:focus {
			outline:none;
		}
		
		.signmeup{
		width:25%;
		background-color:transparent;
		color:#fffffe;
		border:none;
		position:absolute;
		transition:transform;
		transition-duration:0.3s;
		font-size: 2vw;
		align:left;
		}
		
		.signmeup:hover {
			color: #fffffe;
			transform: scale(1.25);
			
		}
		
		.signmeup:active {
			transform: translateY(4px);
			border: none;
		}
		
		.signmeup:focus {
			outline:none;
		}
		.item:hover {
			opacity: 0.8;
		}
		
		
		
		@media screen and (max-width:1300px) {
			.search-div {
				margin : 10px 0px 50px 0px;
				margin-left: 10%;
			}
			.search-bar { 
				font-size: 20px;
				height: 24px;
				width: 70%;
				
				
			}
			.search-button {
				width : 25px;
				height : 25px;
			}
			
			.button{
				display:block;
				float:none;
				align:centre;
				width:100%;
				margin:4px 4px;
				font-size: 20px;
			}
			.bottonpanel{
				align:center;
			}
			
			.aboutus {
				font-size: 16px;
			}
			.tab {
			display:none;
			}
		}
	</style>
</head>


	



	<body>

		

		<!-- The content of your page would go here. -->
		<div style="width:100%; margin:auto; background-color:#2b061e;">
		<div class="nav-bar">
			<ul class="uolist">
				<li>
					<a href="index.php"><img src="Images/logo.png" class="logo"></a>
				</li>
			<!--list-->
			
				
				<?php
				//setting contents of navigation bar according to visitor or signed in user
				if(isset($_SESSION) && !empty($_SESSION)){
						echo
						/*cart will show now*/
						'<li class="nav-list-box" >
							<a class="Hometag" href="cart.php" style="text-decoration: none"> Cart </a>
						</li>
						<li class="nav-list-box" >
							<a class="Hometag" href="logout.php" style="text-decoration: none"> Log Out </a>
						</li>';
				}
				else{
					echo '<li class="nav-list-box">
						<a class="Hometag" href="signup.php" style="text-decoration: none"> Sign up </a>
					</li>
					<li class="nav-list-box">
						<a class="Hometag" href="login.php" style="text-decoration: none"> Log in </a>
					</li>';
				}

				?>
			</ul>
		</div>
		
		
		
		<div style="background-image: linear-gradient(black, #2b061e); width:100%;"> 
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

			  <div class="item active">
				<a href="Building.php"><img src="https://cdn.hipwallpaper.com/i/52/52/FP273Y.jpg" style="width:100%; max-height: 650px;"></a>
				<div class="carousel-caption">
				  <h3>Design your own custom PC</h3>
				  <p>We'll help you pick parts, Bit by Bit</p>
				</div>
			  </div>

			  <div class="item">
				<a href="Built.php"><img src="http://hdqwalls.com/wallpapers/lenovo-pro-gaming-pc.jpg" style="width:100%;  max-height: 650px;"></a>
				<div class="carousel-caption">
				  <h3>Buy one of the well-designed PCs</h3>
				  <p>We also have some PCs ready for you!</p>
				</div>
			  </div>
			
			  <div class="item">
				<a href="all_categories.php"><img src="https://wallpaper.wiki/wp-content/uploads/2017/05/HD-Wallpaper-Computer-Free-Download.jpg" style="width:100%;  max-height: 650px;"></a>
				<div class="carousel-caption">
				  <h3>Parts and accessories</h3>
				  <p>Go through our wide variety of components</p>
				</div>
			  </div>
		  
			</div>
			

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		
		</div>
		
		
		
		<div class=aboutus>
			<h1 style="color:#dfaee8;">Our Vision</h1>
			<p>Users will be able to search for parts on the basis of preference and in their price range. The
			outcome will be options for that component in a specific price range.
			User will be able to build a custom PC from the components provided in database.
			Predesigned builds of Computers will be available. User can choose make changes according to
			needs and price. Building a custom PC is not an easy task especially for a naive user. So the purpose of this
			software is to help such users build PC&#39;s according to their requirements. So they will be able to build
			a PC for themselves using their basic knowledge of computer builds.</P>

		</div>
		
		<div class=aboutus>
			<h1 style="color:#dfaee8;">Our Services</h1>
			<p>Select from the given options to start creating your own custom build that has compatible features. Or you can select
			from our pre build designs. Just want to pick a part? We have a variety of categories for your liking.</P>

		</div>

		<div class=buttonpanel>
			<div class=buttonclass>
			<button class="button" onclick="window.location.href='Building.php'">Start building Now</button></div>
			<div class=buttonclass>
			<button class="button" onclick="window.location.href='Built.php'">Buy Our Custom Builds</button></div>
			<div class=buttonclass>
			<button class="button" onclick="window.location.href='all_categories.php'">Other Categories</button></div>
		<div style="clear:left"></div>
		</div>
		
		
		
	

		
		<!--Footer section starts here-->
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Build<span>Bit</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="Aboutus.php">About Us</a>
					·
					<a href="Faqs.php">Faq</a>
					·
					<a href="contact.php">Contact</a>
					·
					<a href="PrivacyPolicy.php">Privacy Policy</a>

				</p>

				<p class="footer-company-name">Build Bit by Bit &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>H12 NUST</span> Islamabad, Pakistan</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>090078601</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">buildbit@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Who are we</span>
					We give you the experience of buliding PC bit by bit or buy from our custom builds.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.github.com"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
	</div>
	
<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 4000});
});
</script>	

		

	</body>

</html>
