
<?php
session_start();
?>



<?php

if (!empty($_SESSION['Customer_ID'])){
	header("location: index.php");
}

$correctLog = true;


if(isset($_POST['submit']))
{ 
	//$con = mysqli_connect("localhost", "root", "", "buildit");
	$email=$_POST['email'];
	$password=$_POST['password'];
	$login=$_SERVER['HTTP_REFERER'];

	if((!$email)or(!$password)){
		header("Location:$login");
		exit();

	}

	$con = mysqli_connect("localhost", "root", "", "buildit");
	$query="SELECT * FROM user WHERE Email=\"$email\" and Password=\"$password\" ";
	$result=mysqli_query($con, $query);
	$rows= mysqli_num_rows($result);
	if($rows!=0){
		$_SESSION["email"] = $_POST['email'];
		while($row = mysqli_fetch_assoc($result)) {
			$idcust = $row['Customer_ID'];
		}

		$_SESSION["Customer_ID"] = $idcust;
		header("Location:index.php");
		
	}
	else{
		$correctLog = false;
	}
	

}

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
	
	<title>Login Page</title>
	<style type="text/css">
			input {
				font-size: 16px;
				color: black;
			}
		.background1{
			background-color:#2b061e;
			width:50%;
			height: auto;
			padding: 3% 0% ;
			margin: 10% 0% 10% 0%;
			color: #2b061e;
			border-radius: 2%;
			
			box-shadow: 10px 10px 10px #2b061e;

		}	
		.background2{

			font-size: 2vw;
			font-family: serif;
			background-color:#2b061e; 
			color:#fffff2;
			width:50%;
			margin: 5% 3%;
			height: auto;
			padding: 2% 2%;
			border-radius: 15%;
			box-sizing: border-box;
			

		}
		.ttext{
			
			color:#fffff2;
			font-size: 2vw;
			text-shadow: 1px 1px #2b061e;
	
		}
		input {
			align-items: center;
		   	width: 50%;
		    padding: 1% 2%;
		    margin: 1% 20%;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    border-color: #91428e;
		   

		}
		input[type=submit]{
			width:25%;
			font-size: 1.5vw ;
			background-color:transparent;
			color: #fffff2;
			padding: 1% 1%;
			display: inline-block;
			height: auto;
			font-family: serif;
			border:none;
			cursor: pointer;
			margin: 1% 0%;
			transition:transform;
			transition-duration:0.3s;
		}
		input[type=submit]:hover{
			color: #fffffe;
			background-color:#dfaee8;
			transform: scale(1.25);}
		}
		
		
		
		.input:active {
			transform: translateY(4px);
			border: none;
		}
		
		.input:focus {
			outline:none;
		}
		}
		
		
		@media screen and (max-width:1300px) {
			
			
			
			.background1{
				padding: 7% 10%;


			}
			.background2{
				width:100%;
				padding: 10% 20%;


			}
			.ttext{
				font-size: 5vw;
				

			}
			input[type=submit]{
				width: 40%;
			}
			.logoo{
			width:50% ;
			height:auto; 
			}
			input{
				width: 100%;
				margin-left: 0%;
			}
			}

	</style>
</head>
<body>

<div style="color: white; width:100%; margin:auto;background-attachment: fixed; background-image: url('https://images.wallpaperscraft.com/image/keyboard_text_apple_keyboard_letters_73444_1920x1080.jpg');">
	<div style="width:100%; margin:auto; background-color: #fffff2">
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

	<center >

	<div class="background2">
	<img src="Images/logo.png" class="logoo" style= "width:80%">
	<h2>Login to your Account</h2>
	
		<div class="background1">
	<form action="login.php" method="post">
		<!-- username -->
		<font class="ttext">Email:</font>
		<input type="email" name="email"  placeholder="Enter Email"  ><br>
		<!-- password -->
		<font class="ttext">Password:</font><br>
		<input type="password" name="password" placeholder="Password" ><br>
		


		</div>
		<?php 
		if (!$correctLog){
			echo "<div style='color:red'>Incorrect Username or password</div>";
		}
		
		?>
		<input type="submit" style="font-size:3vw" name="submit" value="log-in">
		

	</div>

	</center>
	
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

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</form>
</div>
</body>
</html>