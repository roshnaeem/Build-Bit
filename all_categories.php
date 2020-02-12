<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	

	<title>
		Categories
	</title>
	
	<style>
		input {
			font-size: 16px;
			color: black;
		}
		.rowcat {
			border:20px;
			width:100%;
			height:auto;
			
		}
			
		.cellcat {
			width:33%;
			height:25%;
			padding-left : 3%;
			padding-right: 3%;
			padding-top: 10%;
			}	
			
		.text{
		position:relative;
		text-align:centre;
		color:#0e0004;
		transition: transform;
		transition-duration: 0.3s;
		}
		
		.text:hover {
			box-shadow: 3px 3px 5px;
			transform: scale(1.1);
		}
		
		.textimage{
			position: absolute;
			width:100%;
			color : #fffff2;
			font-size: 3.3vw;
			background-color: rgba(0,0,0,0.5);
			text-align: center;
		}
		
		
		
		.catimage{
			display : block;
			width : 100%;
			height : 100%;
			align : center;
			border: 10px solid #dfaee8;
			opacity: 1;
		}
		
		
		@media screen and (max-width:1300px) {
			.
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
		
		
		<table style="width:75%; height:100%; margin:auto;">
			<tr class="rowcat">
				<td class="cellcat"><div class="text" onclick="window.location.href='Built.php'"><img src="https://4.imimg.com/data4/CO/YS/MY-29352968/samsung-desktop-computer-500x500.jpg" class="catimage">
				<div class="textimage"> Pre Built PC </div>
				</div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Building.php'"><img src="https://assets.umart.com.au/newsite/images/201703/source_img/38431_P_1488953358610.jpg" class="catimage">
				<div class="textimage"> Custom PC </div>
				</div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Motherboard.php'"><img src="https://images-cdn.azureedge.net/azure/in-resources/199ee40b-11b8-466c-b005-1d0eeaefb4a2/Images/ProductImages/Source/fmbg31.jpg;width=600" class="catimage">
				<div class="textimage"> Motherboard </div>
				</div></td></td>
			</tr>
				
			<tr class="rowcat">
				<td class="cellcat"><div class="text" onclick="window.location.href='Memory.php'"><img src="https://5.imimg.com/data5/VJ/KW/MY-37649712/computer-hard-disk-500x500.jpg" class="catimage">
				<div class="textimage"> Memory </div></div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Microprocessor.php'"><img src="https://5.imimg.com/data5/SC/NX/MY-15842914/intel-core-i7-processor-500x500.jpg" class="catimage">
				<div class="textimage"> Processor </div>
				</div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Ram.php'"><img src="https://www.omall.co.ke/wp-content/uploads/CRUCIAL-4GB-DDR3-RAM-Desktop-Memory-_2-1.jpg" class="catimage">
				<div class="textimage"> RAM </div>
				</div></td>
			</tr>
			
			<tr class="rowcat">
				<td class="cellcat"><div class="text" onclick="window.location.href='Graphiccard.php'"><img src="https://5.imimg.com/data5/GS/MP/MY-43406652/computer-graphic-card-500x500.jpg" class="catimage">
				<div class="textimage"> Graphic Card </div>
				</div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Powersupply.php'"><img src="https://images-na.ssl-images-amazon.com/images/I/41ui4SCf4hL._SX466_.jpg" class="catimage">
				<div class="textimage"> Power supply </div>
				</div></td>
				<td class="cellcat"><div class="text" onclick="window.location.href='Accessories.php'"><img src="http://www.analogueseduction.net/user/products/large/square_louped_hd_201_01_sq_music_portable_sennheiser.png" class="catimage">
				<div class="textimage"> Accessories </div>
				</div></td>
			</tr class="rowcat">
		
		</table>	
			
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
</body>
</html>