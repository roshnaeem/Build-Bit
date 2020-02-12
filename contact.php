<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/headfoot.css">
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
	
	<title>Contact Info</title>

<style type="text/css">
		@media screen and (max-width:1300px) {
			
			
			
			}
		input {
			font-size: 16px;
			color: black;
		}
		
			
		h1{
			color:#2b061e;
			font-family: serif;
			background-color: #91428e;
			padding-left: 1%;

		}
		h2{
			color: #2b061e;
			margin-left: 1%;
		}

		hr{
			background-color:#2b061e;
		}
		h3{
			font-style: italic;
			color: #91428e;
		}






</style>
</head>
<body>
	<div style="background-color: #fffff2">	
	<div style="width:100%; margin:auto; background-color: #fffff2">
		<div class="nav-bar">
			<ul class="uolist">
				<li>
					<a href="index.php"><img src="Images/logo.png" class="logo"></a>
				</li>
			<!--list-->
			
				
				<?php
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
	</div>
	


		 <h1> Contact Us</h1>

		 <h2>Contact Information & Customer Service</h2>
		 <hr>

		<table style="width:100%; margin: 1% 2% 1% 2%;">
			
			<tr >
				<td style="width:50%;"><h2> Contact Information</h2></td>
				<td style="width:50%;"> <h2>Customer Service</h2></td>
			</tr>
			<tr>
				<td>
					<h3>Pakistan's first tech market</h3><br>
					NUST H-12 ISLAMABAD Campus, <br>Pakistan<br>
			
					<h3>Ready to Book?</h3>
					<b>Call: +92-123456789 </b><br>
					For all other inquiries,
					please call: 051-123456<br>
					<h3> Current Hours</h3>
					Monday-Friday 9am-5pm <br>
					Saturday and Sunday 11am-8pm

				</td>
				<td>
					In order to respond more timely and accurately to your inquiries, please choose the category that most closely resembles your requirment. 
					You can find all type of laptops on our website.<br>
					<h3>General Inquiries</h3><br>
					For general inquiries, please call<br> 
					BuildBit Office<br>
					<b style="color: #91428e;">Contact Info:</b>
					+92-123456789<br>
					




				</td>


			</tr>
		</table>
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