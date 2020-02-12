<?php session_start()
 ?>

<?php
$ErrMsg = "";


if (!empty($_SESSION['Customer_ID'])){
	header("location: index.php");
}
	
	function newuser(){
		
		global $ErrMsg;
		$Firstname=$_POST['firstname'];
		$Lastname=$_POST['lastname'];
		$Country=$_POST['browser'];
		$Email=$_POST['email'];
		$Email=$_POST['confirmemail'];
		$Password=$_POST['password'];
		$Password=$_POST['confirmpassword'];
		$DoB=$_POST['birthDate'];

		$query= "INSERT INTO `user`(FirstName,LastName,Country,Email,Password,DoB) VALUES ('$Firstname','$Lastname','$Country','$Email','$Password','$DoB')";

		if ($_POST["password"] === $_POST["confirmpassword"]) {
			if($_POST['email']=== $_POST['confirmemail']){
				$con = mysqli_connect("localhost", "root", "", "buildit");
				$data= mysqli_query($con,$query);

				if($data){
					
					//SESSION ADDING ID
					//query to check email and password
					$query1= "SELECT Customer_ID FROM `user` WHERE Password= '$_POST[password]' AND Email='$_POST[email] '";
					$result= mysqli_query($con, $query1);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							$idcust = $row['Customer_ID'];
						}
						$_SESSION["Customer_ID"] = $idcust;
					
					}
					
					header("location:index.php");
				}
				else{
					$ErrMsg = "Report Error to developer!";
				}
			}
			else{
				$ErrMsg = "Email Does Not Match!";
			}

		}
		else{
			$ErrMsg = "Password Does Not Match!";
		}

	}
	 function signup(){
			global $ErrMsg;
	 	
	 		$con = mysqli_connect("localhost", "root", "", "buildit");
	 		//query to check email and password
	 		$query1= "SELECT * FROM `user` WHERE Email='$_POST[email] '";
	 		$query= mysqli_query($con, $query1);


	 		//query to fetch data
	 		if(!$row= mysqli_fetch_array($query,MYSQLI_ASSOC)){
	 			newuser();
	 		}
	 		else{
	 			$ErrMsg = "Email Already In Use!";
	 		}



	 	
	 }
	 if(isset($_POST['submitaction']))
	{
	    signup();
	}


	
	

?>

<?php 
if(isset($_POST["email"])){
    
}	
?>




<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
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
	
<style type="text/css">
		
		@media screen and (max-width:1300px) {
			
			
			}
		input {
			color:black;
			font-size: 14px;
			align-items: center;
		   	width: 50%;
		    padding: 1% 2%;
		    margin: 1% 20%;
		    display: inline-block;
		    border: 5px solid #ccc;
		    border-radius: 4px;
		    border-color: #91428e;
		    box-sizing: border-box;

		}
		.rosh{
			width:2%;
			padding: 0%;
			margin: 1% 0% 1% 20%;
		}
		.ttext{
			margin-left: 13%;
			color:#91428e;
			font-size: 25px;
			text-shadow: 1px 1px #2b061e;
	
		}
		.popUp{
			
			display: inline-block;
			text-align: center;

			width:25%;
			font-size: 4vw ;
			background-color:#91428e;
			color: #fffff2;
			padding: 3% 3%;
			border: 2px solid white;
			border-radius: 10%;
		}
		input[type=submit]{
			width:15%;
			font-size: 1vw ;
			background-color:#91428e;
			color: #fffff2;
			padding: 1% 1%;
			display: inline-block;
			height: auto;
			font-family: serif;
			border: 2px solid white;
			border-radius: 10%;
			cursor: pointer;
			margin: 1% 0%;
		}
		input[type=submit]:hover{
			background-color: #2b061e;
		}
		
			
		@media screen and (max-width:900px) {
			
			li {
				display:block;

			}
			.popUp{
				
			position: absolute;
			display: inline-block;
			text-align: center;

			width:25%;
			font-size: 4vw ;
			
			}
			
			}
	

</style>
</head>
<body>

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
	
<form style="background-color:#fffff2 " action="signup.php" method="post">
	<br>
	
	<?php 
		echo "<div style='text-align:center ; color:red ; font-size:24px'> $ErrMsg </div>";
	?>

	<!-- Name -->
	<font class="ttext">First Name</font><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required="">
	<br>
    <font class="ttext">Last Name</font><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required="">
	<br>

	<!-- Country -->
    <font class="ttext">Country</font><br>
    <input list="Country" name="browser" placeholder="Enter Your Country" required="">
  <datalist id="Country">
  	<option value="Canada">
  	<option value="China">
  	<option  value="France">
  	<option value="Germany">
  	<option value="Germany">
  	<option value="Greece">
  	<option value="India">
  	<option value="Italy">
  	<option value="Malaysia">
  	<option value="Mexico">
  	<option value="Norway">
    <option  value="Pakistan">
    <option value="Poland">
    <option value="Spain">
    <option value="Turkey">
    <option value="USA">
    <option value="UK">
    
  </datalist><br>
    <br>

    <!-- Email -->
    <font class="ttext">Email</font><br>
    <input type="email" id="email" name="email" placeholder="Your Email Address.." required=""><br>
    <font class="ttext">Confirm Email Address</font><br>
    <input type="email" id="email" name="confirmemail" placeholder="Confirm Your Email Address.." required=""><br>

    <!-- Password -->
    <font class="ttext">Password</font><br>
    <input type="Password" id="myInput" id="txtpassword" name="password" placeholder="Your password.." required=""><br>
    <font class="ttext">Confirm Password</font><br>
     <input type="Password" id="myInput2"  id="confirmtxtpassword" name="confirmpassword" placeholder="Confirm Your password.." required=""><br>

     <input style= "margin-left:20%;" class="rosh" type="checkbox" onclick="myFunction()">
    
     <font style="color:#2b061e; font-size: 20px; margin-bottom: 1%;">Show Password</font><br>

    <!--  Date of Birth -->
    <font class="ttext">Date of Birth</font><br>
    <input type="date" name="birthDate" required=""><br>

    <!-- action  --> 
  <center>
    <input type="submit" value="Submit"  id="btnSubmit" name="submitaction" >
</center>

 <script>
 	/* function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("confirmtxtpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }*/
function myFunction() {
	var y= document.getElementById("myInput2");
    var x = document.getElementById("myInput");
    if (y.type && x.type === "password") {
        x.type = "text";
        y.type =  "text";
    } else {
        x.type = "password";
        y.type = "password";
    }
}
</script>




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



</body>
</html>

