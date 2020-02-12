<?php
    session_start();
	
	//Returning user that didnt follow proper path here
	if (!isset($_POST['psid'])){
		header("location: Building.php");
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
	<div style=" width:100%; margin:auto;background-attachment: fixed; background-image: url('Images/Background1.jpg');">
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
		
		<?php 
				function getPrice($TN, $id, $idn){ //Retrieving Price of given part
					$conn = mysqli_connect("localhost", "root", "", "buildit");
					$sql = "Select Price FROM ".$TN." WHERE ".$idn." = ".$id;
					$result=mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					return $row['Price'];
				}
				function getInfo($TN, $id, $idn){ //Retrieving Complete info of part
					$conn = mysqli_connect("localhost", "root", "", "buildit");
					$sql = "Select * FROM ".$TN." WHERE ".$idn." = ".$id;
					$result=mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					return $row;
				}
				
				
				if(isset($_POST['submit'])){
					
					if (!empty($_POST['psid'])){
						
						$mbid = $_POST['mbid'];
						$pid = $_POST['pid'];
						$gcid = $_POST['gcid'];
						$rid = $_POST['rid'];
						$memid = $_POST['memid'];
						$psid = $_POST['psid'];
						
						//Retrieving prices and information for creating a summary
						
						$mbprice = getPrice("Motherboard", $_POST['mbid'], "MB_ID");
						$pprice = getPrice("processor", $_POST['pid'], "P_ID");
						$gcprice = getPrice("graphic_card", $_POST['gcid'], "GC_ID");
						$rprice = getPrice("ram", $_POST['rid'], "RAM_ID");
						$memprice = getPrice("memory", $_POST['memid'], "Mem_ID");
						$psprice = getPrice("power_supply", $_POST['psid'], "PS_ID");
						
						$totalprice = $mbprice + $pprice +$gcprice +$rprice + $memprice + $psprice;
						
						$mbrow = getInfo("Motherboard", $_POST['mbid'], "MB_ID");
						$prow = getInfo("processor", $_POST['pid'], "P_ID");
						$gcrow = getInfo("graphic_card", $_POST['gcid'], "GC_ID");
						$rrow = getInfo("ram", $_POST['rid'], "RAM_ID");
						$memrow = getInfo("memory", $_POST['memid'], "Mem_ID");
						$psrow = getInfo("power_supply", $_POST['psid'], "PS_ID");
						
						$sql = "INSERT INTO computer 
						VALUES (NULL, 'User', NULL, ".$totalprice.",".$mbid.",".$pid.",".$gcid.",".$rid.",".$memid.",".$psid.",NULL)";
						/*echo $sql;*/
						$result=mysqli_query($conn,$sql);
						$sql = "SELECT * FROM computer ORDER BY Comp_ID DESC LIMIT 1"; 
						$result=mysqli_query($conn,$sql);
						$row = mysqli_fetch_assoc($result);
						$Compid = $row['Comp_ID'];
						
					}
				}
				
			?>
		
		<div class="titlebuild" style="color:white;">
			<br/>
			Summary
			<br/>
		</div>
		<div class="mainbuild" style="font-size:14px;">
		<div class="container" style="width:95%; margin:auto;>
  
  
  <!-- Bootstrap used to display data in a user friendly way -->
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none;"><b style="color: #91428e;">
		  Total Price : <?php echo $totalprice ?> $</b></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"> - Motherboard's Price = <?php echo $mbprice?> $ <br/>
		 - Processor's Price = <?php echo $pprice?> $ <br/>
		 - Graphic Card's Price = <?php echo $gcprice?> $ <br/>
		 - RAM's Price = <?php echo $rprice?> $ <br/>
		 - Memory's Price = <?php echo $memprice?> $ <br/>
		 - Power Supply's Price = <?php echo $psprice?> $ <br/>
		
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none;"><b style="color: #91428e;">
		  Motherboard : <?php echo $mbrow['MBname'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"> - <?php if($mbrow['RAMType']==1) echo 'Supports DDR4 RAM'; else echo 'Supports DDR3 RAM' ?><br>
			 - Has <?php echo $mbrow['USB2'] ?> USB2.0 ports <br>
			 - Has <?php echo $mbrow['USB3'] ?> USB3.0 ports <br>
			 - Has <?php echo $mbrow['USB3'] ?> RAM slots <br></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none;"><b style="color: #91428e;">
		  Processor : <?php echo $prow['PName'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"> - <?php if($prow['RAMType']==1) echo 'Supports DDR4 RAM'; else echo 'Supports DDR3 RAM' ?><br>
			 - Clock speed : <?php echo $prow['CoreSpeed'] ?> GHz <br>
			 - Has  <?php echo $prow['Cores'] ?> Cores <br>
			 - Has <?php echo $prow['Threads'] ?> Threads <br>
			 - Cache Size : <?php echo $prow['CacheSize'] ?> MB <br></div>
      </div>
    </div>
	
	
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none;"><b style="color: #91428e;">
		  Graphic Card : <?php echo $gcrow['GCName'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"> - Clock speed : <?php echo $gcrow['ClockSpeed'] ?> MHz <br>
			 - <?php echo $gcrow['Memory'] ?> GB Dedicated memory <br></div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none;"><b style="color: #91428e;">
		  RAM : <?php echo $rrow['Type'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"> - Size : <?php echo $rrow['Size'] ?> GB <br>
			 - <?php echo $rrow['speed'] ?> MHz <br></div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none;"><b style="color: #91428e;">
		  Memory : <?php echo $memrow['MemName'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body"> - <?php echo $memrow['MemSize'] ?> GB space <br></div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="text-decoration:none;"><b style="color: #91428e;">
		  Power supply : <?php echo $psrow['PSName'] ?></b> </a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body"> - Provides <?php echo $psrow['Power'] ?> Watts of Power <br></div>
      </div>
    </div>
  </div>


<!-- Add to cart button -->

	<form action="BuildingTable.php" method="post">


			

		<?php
			echo '<input type="hidden" name="CompId" value='.$Compid.'>';
		?>
		



		<div class="AddCart">
			<input class="CartButton" type="submit" name="submitpart" value="Add to Cart" />
			</div>

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
		
	
</body>

	