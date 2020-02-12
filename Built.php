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
		Pre-designed PC
	</title>
	
	<style>
		input {
			font-size: 16px;
			color: black;
		}
		
		
		.mainbuild {
			width : 80%;
			margin:auto;
			font-size: 4vw;
		
		}
		
		.titlebuild {
			width : 95%;
			margin:auto;
			font-size: 4vw;
		}
		
		.maintable {
				max-height: 500px;
				min-height: 200px;
				overflow: auto;
				background-color: rgba(223,174,232,0.9);
				border:none;
				color: black;
		}
		
		.partdisp {
			font-size:1.5vw;
			width :100%;
			
		}
		
		.partcell {
			border-bottom: 1px solid #2b061e;
			border-right: 1px solid #2b061e;
			padding: 5px;
			width: 70%
		}
		
		.partcellast {
			border-bottom: 3px solid #2b061e;
			border-right: 1px solid #2b061e;
			padding: 5px;
			width: 15%
		}
		
		.imagecell {
			display:block;
			margin:auto;
			width: 100%;
		}
		
		.pricecell {
			text-align:center;
			font-size:2vw;
			width:15%; 
			border-bottom: 3px solid #2b061e;
		}
		
		.li-search {
			font-size:2vw;
			width: 40%;
			margin-right: 5%;
		}
		
		.li-range {
			font-size:2vw;
			width: 40%;
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
			
			
			
			.partdisp, .li-search, .li-range {
				font-size:22px;
			}
			
			.pricecell {
				font-size: 24px;
			}
			
			.maintable {
				height:1200px;
			}
			
		}
	</style>
</head>

<body>
	<div style="color: white; width:100%; margin:auto;background-attachment: fixed; background-image: url('Images/Background1.jpg');">
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
		<div class="titlebuild">
			<br/>
			Choose your PC
		</div>
		<div class="mainbuild">
			<div class="maintable">
			<form>
			<table class="partdisp">
				
				<tr>
					<td class="partcellast" rowspan="5" width="20%"> 
						<img class="imagecell" src="https://4.imimg.com/data4/OO/HL/MY-2941808/dell-pc-500x500.jpg" >
					</td>
					<td class="partcell"> Core i7-4770k 3.6GHz Quadcore</td>
					<td rowspan="5" class="pricecell"> 2557.99$ </td> 
				</tr>
				<tr>
					<td class="partcell"> 16 GB DDR3 RAM</td>
				</tr> 
				<tr>
					<td class="partcell"> Nvidia GTX 1080Ti</td>
				</tr> 
				<tr>
					<td class="partcell"> MX500 SSD </td>
				</tr>
				<tr>
					<td class="partcellast"> <a  style="color: blue;" href="BuiltCart.php?id=55"> Add To Cart >> </a> </td>
				</tr>
				
				<tr>
					<td class="partcellast" rowspan="5" width="20%"> 
						<img class="imagecell" src="https://www.startech.com.bd/image/cache/catalog/Brand%20PC/ASUS/ROG/ROG%20GT51CH-1-500x500.jpg">
					</td>
					<td class="partcell"> Core i7-6700k 3.6GHz Quadcore</td>
					<td rowspan="5" class="pricecell"> 947.99$ </td> 
				</tr>
				<tr>
					<td class="partcell"> 16 GB DDR4 RAM</td>
				</tr> 
				<tr>
					<td class="partcell"> Nvidia GTX 1050Ti</td>
				</tr> 
				<tr>
					<td class="partcell"> 750GB Western Digital Hard disk </td>
				</tr>
				<tr>
					<td class="partcellast"> <a style="color: blue;" href="BuiltCart.php?id=56"> Add To Cart >> </a> </td>
				</tr>
				
				<tr>
					<td class="partcellast" rowspan="5" width="20%"> 
						<img class="imagecell" src="https://www.bhphotovideo.com/images/images2500x2500/asus_gl12cm_ds762_i7_8700k_3_2ghz_8gb_1421462.jpg">
					</td>
					<td class="partcell"> Core i7-6700HQ 3.4GHz Quadcore</td>
					<td rowspan="5" class="pricecell"> 1264.99$ </td> 
				</tr>
				<tr>
					<td class="partcell"> 16 GB DDR3 RAM</td>
				</tr> 
				<tr>
					<td class="partcell"> Nvidia GTX 660ti</td>
				</tr> 
				<tr>
					<td class="partcell"> 750GB Western Digital Hard disk </td>
				</tr>
				<tr>
					<td class="partcellast"> <a style="color: blue;" href="BuiltCart.php?id=57"> Add To Cart >> </a> </td>
				</tr>
				
				<tr>
					<td class="partcellast" rowspan="5" width="20%"> 
						<img class="imagecell" src="https://www.webantics.com/content/images/thumbs/008/0087966_lenovo-v310z-i3-7100-195-hd-all-in-one-desktop-pc_600.jpeg">
					</td>
					<td class="partcell"> Core i7-6700HQ 3.4GHz Quadcore</td>
					<td rowspan="5" class="pricecell"> 2600.99$ </td> 
				</tr>
				<tr>
					<td class="partcell"> 8 GB DDR4 RAM</td>
				</tr> 
				<tr>
					<td class="partcell"> Nvidia GTX 960M</td>
				</tr> 
				<tr>
					<td class="partcell"> 2TB Samsung Hard disk </td>
				</tr>
				<tr>
					<td class="partcellast"> <a style="color: blue;" href="BuiltCart.php?id=58"> Add To Cart >> </a> </td>
				</tr>
				
				<tr>
					<td class="partcellast" rowspan="5" width="20%"> 
						<img class="imagecell" src="https://4.imimg.com/data4/SU/TJ/MY-29352968/lenovo-desktop-computer-500x500.jpg">
					</td>
					<td class="partcell"> Core i7-6700HQ 3.4GHz Quadcore</td>
					<td rowspan="5" class="pricecell"> 460.99$ </td> 
				</tr>
				<tr>
					<td class="partcell"> 4 GB DDR3 RAM</td>
				</tr> 
				<tr>
					<td class="partcell"> Nvidia GTX 960M</td>
				</tr> 
				<tr>
					<td class="partcell"> 500GB Seagate Thin Hard disk </td>
				</tr>
				<tr>
					<td class="partcellast"> <a style="color: blue;" href="BuiltCart.php?id=59"> Add To Cart >> </a> </td>
				</tr>
					
			</table>
			
			</div>
		</div>
		
		<!--Footer-->
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

	