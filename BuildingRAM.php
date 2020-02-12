<?php
    session_start();
?>

<?php include 'conn.php' ?>
<?php
//Returning user that didnt follow proper path here
if (!isset($_POST['gcid'])){
		header("location: Building.php");
}


// getting filtered results in case of a call from search button
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $price1 = $_POST['price1'];
    $price2 = $_POST['price2'];

	$sqlMB="SELECT SR.DDR4 FROM Motherboard M JOIN SupportsRAM SR 
			USING (RAMType) WHERE MB_ID=".$_POST['mbid'];
						
	$sqlP = "SELECT SR.DDR4 FROM Processor M JOIN SupportsRAM SR
			USING (RAMType) WHERE P_ID=".$_POST['pid'];
						
	$resultMB=mysqli_query($conn,$sqlMB);
	$resultP=mysqli_query($conn,$sqlP);
						
						
	//Retrieving RAM compatibility for Motherboard and Processor
	if($rowMB = mysqli_fetch_assoc($resultMB)){
		$DDR4MB = $rowMB['DDR4'];
	}
		
	if($rowP = mysqli_fetch_assoc($resultP)){
		$DDR4P = $rowP['DDR4'];
	}
		
	//Running query for compatible RAM in case of search
	if ($DDR4P && $DDR4MB){
		$query = "Select * FROM RAM WHERE (Price  BETWEEN '$price1' and '$price2') AND CONCAT(Type, Size, Speed) LIKE '%".$valueToSearch."%'";
	} else {
		$query = "SELECT * FROM RAM WHERE Type='DDR3' AND (Price  BETWEEN '$price1' and '$price2') AND CONCAT(Type, Size, Speed) LIKE '%".$valueToSearch."%'";
	}

    // search in all table columns
    // using concat mysql function
    
    $result = filterTable($query);
    
}
 else {
    $sqlMB="SELECT SR.DDR4 FROM Motherboard M JOIN SupportsRAM SR 
			USING (RAMType) WHERE MB_ID=".$_POST['mbid'];
						
	$sqlP = "SELECT SR.DDR4 FROM Processor M JOIN SupportsRAM SR
			USING (RAMType) WHERE P_ID=".$_POST['pid'];
						
	$resultMB=mysqli_query($conn,$sqlMB);
	$resultP=mysqli_query($conn,$sqlP);
						
	if($rowMB = mysqli_fetch_assoc($resultMB)){
		$DDR4MB = $rowMB['DDR4'];
	}
		
	if($rowP = mysqli_fetch_assoc($resultP)){
		$DDR4P = $rowP['DDR4'];
	}
		
		
	//Running query for compatible RAM without a search filter
	if ($DDR4P && $DDR4MB){
		$query = "Select * FROM RAM";
	} else {
		$query = "SELECT * FROM RAM WHERE Type='DDR3'";
	}

    // search in all table columns
    // using concat mysql function
    
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
			Pick a RAM
		</div>
		<div class="mainbuild">
			<form style="font-size: 2vw; margin: 2%;" method="POST" action="BuildingRAM.php">
			<ul style="width:100%;">
				<li class="li-search"> Search <input type="search" name="valueToSearch" placeholder="Search here"/> </li>
				<li class="li-range"> Price range <input type="number" name="price1" value="0" step="20" min="0"/>
				to <input type="number" name="price2" value="5000" step="20" min="0"/> </li>
				<li> <?php echo '<input type="hidden" name="gcid" value=' . $_POST['gcid'] . '>';
						echo '<input type="hidden" name="mbid" value=' . $_POST['mbid'] . '>';
						echo '<input type="hidden" name="pid" value=' . $_POST['pid'] . '>'; ?><input type="submit" name="search" value="go"/> </li>
			</ul>
			</form>
			<table class="tablehead" >
				<tr>
					<th width="25%" > Type </th>
					<th width="25%" > Speed </th>
					<th width="25%" > Size </th>
					<th width="25%" > Price </th>
				</tr>
			</table>
			<div class="maintable">
			<form method="POST" action="BuildingMemory.php">
			<table class="partdisp">
			<?php
				if(isset($_POST['submit']) or isset($_POST['search'])){
					if (!empty($_POST['gcid'])){
						echo '<input type="hidden" name="gcid" value=' . $_POST['gcid'] . '>';
						echo '<input type="hidden" name="mbid" value=' . $_POST['mbid'] . '>';
						echo '<input type="hidden" name="pid" value=' . $_POST['pid'] . '>';
						
						if (mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){ //Displaying results fetched from database
								echo '<tr><td class="partcell" width="25%"> 
								<input type="radio" name="rid" value='.$row['RAM_ID'].' />'.$row['Type'].'</td>
								<td class="partcell" width="25%">'.$row['speed'].'Ghz'.'</td>
								<td class="partcell" width="25%">'.$row['Size'].'GB'.'</td>
								<td class="partcell" width="25%">'.$row['Price'].'&#36
								</td> </tr>';
							}
						} else echo '0 results';
					}
				}
				
			?>	
				
			</table>
			
			</div>
			<div class="AddCart" >
			<input class="CartButton" type="submit" name="submit" value="Proceed to next"/>
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

	