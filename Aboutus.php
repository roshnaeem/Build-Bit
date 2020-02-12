<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Info</title>
	<link rel="stylesheet" type="text/css" href="CSS/headfoot.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="CSS/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

	<style type="text/css">
		input {
			font-size: 16px;
			color: black;
		}
		
		.personinfoleft {
			float:left;
			width: 70%;
			margin:0% 5%;
			
		}
		
		.personinforight {
			float:right;
			width: 70%;
			margin:0% 5%;
			
		}
		
		.imagepersonleft {
			width: 20%;
			float: left;
			
		}
		
		.imagepersonright {
			width: 20%;
			float: right;
		}
		
		.imageperson {
			width: 100%;
			display:block;
			border: 1px solid #91428e;
			border-radius: 5px;
		}
		
		.aboutusinfo {
			width: 70%; 
			margin:auto; 
			margin-top: 70px;
			background-color: rgba(0,0,0,0.9);
			color:#dfaee8;
			clear: both;
			border: 2px solid #2b061e;
		}
		
		h1{
			color:#2b061e;
			font-family: serif;
			background-color: #91428e;
			padding-left: 1%;
		}
			
		h2{
			color: #dfaee8;
			margin-left: 1%;
		}
		hr{
			background-color:#2b061e;
		}
		h3{
			font-style: italic;
			color: #91428e;
		}
		@media screen and (max-width:1300px) {
			
			.imagepersonleft, .imagepersonright{
				float:none;
				align: center;
				margin: auto;
				width: 200px;
				height:auto;
			}
			
			.personinfoleft, .personinforight{
				float:none;
				text-align: left;
			}
		}
	</style>
</head>
<body>
	<div style="color: #91428e; width:100%; margin:auto;background-size: cover;  height: 100%; background-attachment: fixed; background-image: url('Images/Background2.jpg');">
		<div class="nav-bar">
			<ul class="uolist">
				<li>
					<a href="index.php"><img src="Images/logo.png" class="logo"></a>
				</li>
			<!--list-->
			
				
				<?php /* Displaying separate options on navigation bar for logged in user and visitor*/
				if(isset($_SESSION) && !empty($_SESSION)){
						echo
						/*cart will show now*/
						'<li class="nav-list-box" >
							<a class="Hometag" href="cart.php" "> Cart </a>
						</li>
						<li class="nav-list-box" >
							<a class="Hometag" href="logout.php" "> Log Out </a>
						</li>';
				}
				else{
					echo '<li class="nav-list-box">
						<a class="Hometag" href="signup.php"> Sign up </a>
					</li>
					<li class="nav-list-box">
						<a class="Hometag" href="login.php"> Log in </a>
					</li>';
				}

				?>
			</ul>
		</div>
	


		 <h1> About Us </h1>

		 
		  <div class="aboutusinfo">
			<div class="imagepersonleft">
				<img class="imageperson" src="Images/value.jpg">
			</div>
			<div class="personinfoleft">
				<h2> Values</h2>
				<p>The company provides compatibility check and create summary of all the parts selected by users. This summary is shown to users before proceeding to cart and payment so they can verify all the parts selected.  
				
				</p>
			</div>
			<div style="clear:both"></div>
		 </div>

		  <div class="aboutusinfo">
			<div class="imagepersonright">
				<img class="imageperson" src="Images/mouse.jpg">
			</div>
			<div class="personinforight">
				<h2> Brand</h2>
				<p>The company makes laptop and desktop models of all types, all with according to your choice" The company caters to a variety of users and assure compatibility of all computer parts of your PC.... "Its brand is a top choice for gaming hardware with everything from entry-level laptops to beastly, and costly, desktop rigs." 
				
				</p>
			</div>
			<div style="clear:both"></div>
		 </div>
		 
		 <div class="aboutusinfo">
			<div class="imagepersonleft">
				<img class="imageperson" src="Images/philo.jpg">
			</div>
			<div class="personinfoleft">
				<h2> Philosophy</h2>
				<p> The purpose behind creating this website was to faciliate users who are not much familiar with technical areas of computer building but desire to make their own PC. They would not have to research further for every part of computer they choose to be in their PC. Everything is done by BuildBit for them.
				
				</p>
			</div>
			<div style="clear:both"></div>
		 </div>
		 
		 

		<!--  Footer -->
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Build<span>Bit</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="Aboutus.php">About us</a>
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

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</div>



</body>
</html>