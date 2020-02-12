<?php
session_start();

if (empty($_SESSION['Customer_ID'])){
	header("location: login.php");
}

?>


	

<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
	<title>
	cart
	</title>
	
	<style>
		input {
			font-size: 16px;
			color: black;
		}
		.cartbuild {
			width : 95%;
			margin:auto;
			font-size: 4vw;
		}
		
		
		.partdisp {
			font-size:1.5vw;
			width: 80%;
			background-color: rgba(223,174,232,0.4);
			color: black;
			
		}
		
		.partcell {
			border-bottom: 3px solid #2b061e;
			border-right: 1px solid #2b061e;
			padding: 5px;
			width: 25%;
		}
		
		.partcellast {
			border-bottom: 3px solid #2b061e;
			border-right: 1px solid #2b061e;
		}
		
		.imagecell {
			display:block;
			margin:auto;
		}
		
		.pricecell {
			text-align:center; 
			font-size:2vw; 
			width:25%; 
			border-bottom: 3px solid #2b061e;
			border-right: 1px solid #2b061e;
		}
		
		.Qtycell {
			border-bottom:3px solid #2b061e; 
			border-right:1px solid #2b061e;
			width: 15%;
		}	
		
		.AddCart{
			background-color: transparent;
			position: relative;
		}
		
		.CartButton {
			position: absolute;
			right: 0px;
			top: 10px;
			background-color: #2b061e;
			font-size: 2vw;
			color: #dfaee8;
			padding: 10px;
			border: none;
			transition:transform;
			transition-duration:0.3s;
		}
		
		.CartButton:hover {
		color: #fffffe;
		transform: scale(1.25);}
		
		.CartButton:active {
			transform: translateY(4px);
			border: none;
		}
		
		.CartButton:focus {
			outline:none;
		}
		
		.maintable {
				max-height: 500px;
				min-height: 200px;
				overflow: auto;
				background-color: rgba(255,255,255,0.9);
				border: 1.5px solid white;
				color: black;
		}
		
		
		@media screen and (max-width:1300px) {
		.mainbuild {
				width : 80%;
				margin:auto;
				font-size: 28px;
			}	
			
			.titlebuild {
				width : 80%;
				margin:auto;
				font-size: 32px;
			}
			
			
			
			.partdisp, .li-search, .li-range, .pricecell {
				font-size:20px;
			}
			
			.tablehead {
				font-size:24px;
			}
		.maintable {
				height:1200px;
			}
		}
	
	</style>
</head>

<body>
	<div style="color: white; width:100%; margin:auto;background-attachment: fixed; background-image: url('Images/Background2.jpg');">
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
		
		
		<div class="cartbuild" style="padding-left:15px; width:80%; margin:auto">
			<br/>
			My Cart
			
		</div>
		<br/>
		<div style="width: 80%; background-color: dfaee8; margin:auto;">
		<table class="partdisp" style="background-color:#2b061e; font-size:2.5vw; color: #fffff2; padding-left:15px; width:100%;">
				<tr>
					<th width="25%" > Category </th>
					<th width="25%" > Product ID </th>
					<th width="25%" > Product name </th>
					<th width="25%" >Price  </th>

				</tr>
			</table>

		<div class="maintable">
		<form>
			<table class="partdisp" style="margin:auto; width: 100%" >
				
				<tr>
					<!-- <td class="partcellast" width="20%"> 
						<img class="imagecell" src="https://images-na.ssl-images-amazon.com/images/I/51XqY3bfccL.jpg" width="100vw" height="100vw">
					</td> -->

		<?php
	/*query to get tablename*/
	$connect = mysqli_connect("localhost", "root", "", "buildit");
	$Customer_ID = $_SESSION['Customer_ID'];
	$query="SELECT ORDER_ID, Category_Name, Product_ID  FROM `orders` WHERE Customer_ID = $Customer_ID";
	$data=mysqli_query($connect,$query);
	while($row = mysqli_fetch_array($data)){

		echo '<tr><td><a href="DeleteCartValue.php?id='.$row['ORDER_ID'].'"><i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a>';
	
		/*get tablename*/
		$Productid = $row['Product_ID'];
		$TableName= $row['Category_Name'];
		//echo  "$TableName <br>"; 
		echo '<td class="partcell">'. $TableName.'</td>';
		echo '<td class="partcell">'.  $Productid.'</td> ';

		/*query to go into table and get price*/
		$Tablequery= "SELECT Price  FROM  $TableName WHERE '$Productid'= Product_ID";
		$Tabledata= mysqli_query($connect,$Tablequery);

		/*Product name try*/
		
		if($TableName==="motherboard"){

				$Productquery= "SELECT MBname  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['MBname'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="power_supply"){

				$Productquery= "SELECT PSName  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['PSName'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="processor"){

				$Productquery= "SELECT PName  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['PName'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="memory"){

				$Productquery= "SELECT MemName  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['MemName'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="ram"){

				$Productquery= "SELECT Type  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['Type'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="graphic_card"){

				$Productquery= "SELECT GCName  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['GCName'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="accessories"){

				$Productquery= "SELECT AName  FROM  $TableName WHERE '$Productid'= Product_ID";
				$Productdata= mysqli_query($connect,$Productquery);
				$Productrow = mysqli_fetch_array($Productdata);

					$ProductName=$Productrow['AName'];
					echo '<td class="partcell">'.$ProductName.' </td>';
				}
		elseif($TableName==="computer"){

				
					echo '<td class="partcell">Computer </td>';
				}


		if($Tablerow = mysqli_fetch_array($Tabledata)){

				$Productprice = $Tablerow['Price'];

				echo '<td class="pricecell">'.$Productprice.' </td></tr>' ;
		
		}
		

	}

?>
            </table>
		</form>
		</div>
		
		
		<div class="AddCart">
		<br/>
		<br/>
			<button class="CartButton" onclick="window.location.href='Accountdetails.php'" name="submitpart">Proceed to Checkout </button>
		</div>
		
		</div>
	
		
		
	<!-- Footer -->
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