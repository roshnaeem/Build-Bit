<?php
    session_start();
?>

<?php
//Returning user that didnt follow proper path here
if (empty($_POST['mbid'])){
		header("location: Building.php");
		die();
}

// getting filtered results in case of a call from search button
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $price1 = $_POST['price1'];
    $price2 = $_POST['price2'];


    // search in all table columns
    // using concat mysql function
    $query = "SELECT P.P_ID,P.Pname,P.CoreSpeed,P.Power,P.Price,P.Cores,P.Threads,P.CacheSize, S.Name,P.RAMType
						FROM Processor P join Motherboard M USING (Socket_ID) join Socket S USING (Socket_ID) WHERE   (P.Price  BETWEEN '$price1' and '$price2') AND CONCAT(P.Pname, P.Price) LIKE '%".$valueToSearch."%'
						 AND MB_ID=".$_POST['mbid']; 
    $result = filterTable($query);
    
}
 else {
	//this query executed in normal flow, other is in case of search
    $query = "SELECT P.P_ID,P.Pname,P.CoreSpeed,P.Power,P.Price,P.Cores,P.Threads,P.CacheSize, S.Name,P.RAMType
						FROM Processor P join Motherboard M USING (Socket_ID) join Socket S USING (Socket_ID)
						Where MB_ID=".$_POST['mbid'];
    $result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
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
	<link rel="stylesheet" type="text/css" href="CSS/building.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<?php include 'conn.php' ?>
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
			Pick a Microprocessor
		</div>
		<div class="mainbuild">
			<form style="font-size: 2vw; margin: 2%;" method="POST" action="BuildingProcessor.php">
			<ul style="width:100%;">
				<li class="li-search"> Search <input type="search" name="valueToSearch" placeholder="Search here"/> </li>
				<li class="li-range"> Price range <input type="number" name="price1" value="0" step="20" min="0"/>
				to <input type="number" name="price2" value="5000" step="20" min="0"/> </li>
				<?php echo '<input type="hidden" name="mbid" value=' . $_POST['mbid'] . '>'; ?>
				<li> <input type="submit" name="search" value="go"/> </li>
			</ul>
			</form>
			<table class="tablehead" >
				<tr>
					<th width="80%" > Part name </th>
					<th width="20%" > Price </th>
				</tr>
			</table>
			<div class="maintable">
			<form method="POST" action="BuildingGraphicCard.php">
			<table class="partdisp">
			<?php
				if(isset($_POST['submit']) or isset($_POST['search'])){
					if (!empty($_POST['mbid'])){
						echo '<input type="hidden" name="mbid" value=' . $_POST['mbid'] . '>';
						
						if (mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){ //Fetching a displaying results from database
								echo '<tr><td class="partcell"> 
							<input type="radio" name="pid" value='.$row['P_ID'].' />'.$row['Pname'].'</td>
							<td class="partcell">'.$row['Price'].'&#36 
							
							</td> </tr>';
							}
						}
					}
				}
				
			?>	
				
			</table>
			
			</div>
			<div class="AddCart" >
			<input class="CartButton" type="submit" name="submit" value="Proceed to Next"/>
			</form>
			</div>
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
		
	
</body>

	