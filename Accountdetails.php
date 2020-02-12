<?php
session_start();

if (empty($_SESSION['Customer_ID'])){
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Info</title>
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
	.card{
		width:10%;
		height: auto;

	}
	.clear{
		clear: both;
	}
	
		.open-button {
			  background-color: #91428e;
			  color: #2b061e;
			  padding: 1.5% 1.5%;
			  font-size: 3vw;
			  border: 1px solid #2b061e;
			  border-radius:5px;
			  cursor: pointer;
			  opacity: 0.8;
			  position: relative;
			  width: 100%;
			  height auto;
			  box-shadow: 3px 3px #2b061e;
			  transition:transform;
			  transition-duration:0.3s;
		}
		.open-button:hover{
			  color: #fffffe;
		      transform: scale(1.1);
		}
		
		.open-button:active {
			transform: translateY(3px);
			border: none;
		}
		
		.open-button:focus {
			outline:none;
		}
		.ttext{
			
			color:#91428e;
			font-size: 3vw;
	
		}
		
		@media screen and (max-width:1300px) {
			
			
			
			}
	
		
		input[type=submit]{
			background-color:#91428e;
			color: #fffff2;
			border: 2px solid white;
			border-radius: 10%;
			width: 15%;
			padding: 2%;
			font-size: 1.5vw;

		}
		.btncancel{
			background-color:#91428e;
			color: #fffff2;
			border: 2px solid white;
			border-radius: 10%;
			width: 15%;
			padding: 2%;
			font-size: 1.5vw;

		}
		.btncancel:hover{
			font-size: 2vw;
			background-color: #2b061e;
		}

		input[type=submit]:hover{
			background-color: #2b061e;
			font-size: 2vw;
		}

		.form-popup { 
			 
		  position: relative;
		  border: 3px solid #91428e;
		  width: 50%;
		  
		}
		.form-popup2{
		
		  position: relative;
		   display: none;
		  margin: 0% 10% 0% 50%;
		  border: 3px solid #91428e;
		  width: 50%;
		  
		}
		.form-container {
		  max-width: 100%;
		  padding: 2%;
		  background-color: #fffff2;
		}


		.form-container input[type=text], .form-container input[type=month], .form-container input[type=email], .form-container input[type=number], .form-container input[type=password] {
				  width: 100%;
				  padding: 15px;
				  margin: 5px 0 22px 0;
				  border: none;
				  background: #f1f1f1;
		}




	
	




</style>
</head>
<body >
<div style="width:100%; margin:auto; background-color:#dfaee8;">
		<div style="width:100%; margin:auto; background-color:#dfaee8;">
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
		</div>

<div style="background-color: #dfaee8; width:90%; margin:auto">	
		
		
		<div>
		</br>
		<div style="float:left"><button class="open-button" onclick="openForm()" >Credit or Debit Card </button></div>
		<div style="float:right"><button style="float: right;" class="open-button" onclick="openForm2()" >Other Payment option</button></div>
		<div style="float:left"><img class="card" src="http://pngimg.com/uploads/mastercard/mastercard_PNG11.png">
		<img class="card" src="http://icons-for-free.com/free-icons/png/512/345580.png">
		<img class="card" src="http://icons-for-free.com/free-icons/png/512/2224481.png">
		<img style="width:25%; height:auto;padding: 1.5%; float:right" src="https://logos-download.com/wp-content/uploads/2016/02/webmoney_logo_blue.png"></div>
		<div style="clear:left"></div>
		</div>
			

		<!-- Form for cards -->
		<div class="form-popup" id="myForm">
  			<form action="PlaceOrder.php" method="POST" class="form-container">
			  	<font class="ttext">Card Holder Name</font><br>
			    <input type="text" id="fname" name="firstname" placeholder="First name" style="width:48.5%;">&nbsp&nbsp&nbsp
			    <input type="text" id="lname" name="lastname" placeholder="Last name" style="width:48.5%;"><br>
			   <font class="ttext">Account number</font><br>
			    <input type="text"  name="accountNum" placeholder="Your Card number..">
				<br>
				<font class="ttext">Security Code</font><br>
			    <input type="text"  name="Securitycode" placeholder="Security Code">
				<br>
			    <font class="ttext">Expiry Date (MM/YY)</font> <br>
			    <input type="month"  name="lastname" placeholder="MM/YY.">
			    <br>
			    <input type="submit" name="Card" value="Done">
			    
  			</form>
		</div>

	<!-- The second form -->
	<div class="form-popup2" id="myForm2">

			<form action="PlaceOrder.php" method="POST" class="form-container">
			
			  	<font class="ttext">Email ID</font><br>
			    <input type="Email"  name="Email" placeholder="Email" ><br>
			    <font class="ttext">	Password</font><br>
			    <input type="password"  name="passwordweb" placeholder="Password"  ><br>
			   <font class="ttext">Purse</font><br>
			    <input type="text"  name="purse" placeholder="Your Purse">
				<br>
				<font class="ttext">Amount</font><br>
			    <input type="text"  name="Amount" placeholder="Amount">
				<br>
			    <font class="ttext">Invoice #</font> <br>
			    <input type="number"  name="invoice num" placeholder="Invoice Number">
			    <br>
			    <input type="submit" name="OtherPay" value="Done">
			   
				<br>
  			</form>
		</div>

		
			

		<!-- Footer -->
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
</div>

<script>
function openForm() {
	if (document.getElementById("myForm2").style.display = "none") {
    document.getElementById("myForm").style.display = "block";}
}
function openForm2() {
	if (document.getElementById("myForm").style.display = "none") {
    document.getElementById("myForm2").style.display = "block";
}
}


</script>

</body>
</html>