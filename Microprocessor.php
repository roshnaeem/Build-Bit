<?php
session_start();
?>
<?php

	//To search Microprocessor according to name and price range
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['name'];
    $price1 = $_POST['price1'];
    $price2 = $_POST['price2'];


    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `processor` WHERE   (`Price`  BETWEEN '$price1' and '$price2') AND CONCAT(`PName`, `Price`) LIKE '%".$valueToSearch."%'" ;
    $search_result = filterTable($query);
    
}
 else {
 	
    $query = "SELECT * FROM `processor`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
	
    $connect = mysqli_connect("localhost", "root", "", "buildit");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php /*Handling part submission*/
$MessageFail = "";
				if(isset($_POST['submitpart'])){
					if(isset($_POST['radiobutton'])){$radioVal = $_POST["radiobutton"];
					$query="SELECT Product_ID FROM `processor` WHERE '$radioVal'= P_ID";}
					if (isset($_POST['radiobutton'])){
						header("location:cart.php");
						//echo "$radioVal";
						$search_result = myfunction($query);
						 while($row = mysqli_fetch_array($search_result)){
						 	$pid=$row['Product_ID'];
						 	

						 	$connect = mysqli_connect("localhost", "root", "", "buildit");
						 	$query1= "INSERT INTO `orders`(Customer_ID, Category_Name,Product_ID) VALUES (".$_SESSION['Customer_ID'].",'processor','$pid')";

						 
						 	$data= mysqli_query($connect,$query1);
						 }
					}
					else{
							$MessageFail = "Please choose one part";
					}


				}
						function myfunction($query)
					{
					    $connect = mysqli_connect("localhost", "root", "", "buildit");
					    $filter_Result = mysqli_query($connect, $query);
					    return $filter_Result;
					}


			?>


<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/headfoot.css">
	<link rel="stylesheet" type="text/css" href="CSS/Category.css">
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
	.li-search {
		font-size:2vw;
		width: 40%;
		margin-right: 10%;
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
		<div class="titlebuild">
			<br/>
			Pick a Microprocessor
		</div>
		<div class="mainbuild">
			<!-- Start of form -->

			<form style="font-size: 2vw; margin: 2%;" action="Microprocessor.php" method="post">
			<ul style="width:100%;">

				<!-- search by name -->
				<li class="li-search"> Search <input type="search" name="name" placeholder="Search here"/> </li>

				<!-- search by price -->
				<li class="li-range"> Price range <input type="number" name="price1" value="0" step="10" min="0"/> to 

				<input type="number" name="price2" value="5000" step="10" min="0"/> </li>
				<li>

					<!-- action -->
				<input type="submit" name="search" value="go"/> </li>

			</ul>
			</form>
			<table class="partdisp tablehead" >
				<tr>
					<th width="80%" > Part name </th>
					<th width="20%" > Price </th>
				</tr>
			</table>
			<div class="maintable">
			<form action="Microprocessor.php" method="post">
			<table class="partdisp">
			<?php while($row = mysqli_fetch_array($search_result)):?>
						<?php
                echo '<tr><td class="partcell"> 
				<input type="radio" name="radiobutton" value='.$row['P_ID'].'/>'.$row['PName'].'</td>
					<td class="partcell">'.$row['Price'].'&#36 </td> </tr>'; ?>
                <?php endwhile;?>
			</table>
			</div>

			<!-- Cart Button starts. -->
			

			<?php echo $MessageFail ?>
			<div class="AddCart">
			<input class="CartButton" type="submit" name="submitpart" value="Add to Cart" />
			</div>
		</form>
				<!-- Cart button ends -->


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