<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/headfoot.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		FAQs
	</title>
	
	<style>
		
		input {
		font-size: 16px;
		color: black;
	}
	
		h1{
			color:#2b061e;
			font-family: serif;
			background-color: #91428e;
			padding-left: 1%;

		}
		
	
		
		@media screen and (max-width:1300px) {
			
			}
			
		}

		.content{
			padding: 1% 0%;

		}
	</style>
</head>
<body>
<div style="color: #91428e; width:100%; margin:auto;background-size: cover;  height: 100%; background-attachment: fixed; background-image: url('Images/Background1.jpg');">
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
		
		
		<div class="content">
		 <h1> &nbsp;&nbsp;&nbsp;&nbsp;FAQs</h1>

		 
<div class="container" style="width:95%; margin:auto;>
  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none;"><b style="color: #91428e;">What is this website about?</b></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">The product is a database as mentioned earlier. It should allow a naive user to
be able to access an entire list of computer parts available. The database makes it easy for the user to pick
parts of the PC he plans to build by listing details of each component and prices. A user can easily search for
the appropriately priced part with adequate features that he requires.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none;"><b style="color: #91428e;">What services do we provide?</b> </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">-Providing a variety of different models of PC parts.<br>
				-Mentioning an entire list of parts required for a PC.<br>
				-Filtering parts according to a given constraint which could be specified by the user.<br>
 				-Providing some already specified builds that could be chosen directly by the customer instead of selecting each part.<br>
 				-Lists price of individual components and total price of PC.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="text-decoration:none;"><b style="color: #91428e;">What can a user do?</b> </a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">A user may build an entire PC out of the given parts or make changes to some
already available builds to suit his needs.<br> A user may also filter parts within a specific price range or
specification range which he may require for the PC he plans to build or a part he requires to modify in his
already built PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="text-decoration:none;"><b style="color: #91428e;">What services do we provide?</b> </a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">-Providing a variety of different models of PC parts.<br>
				-Mentioning an entire list of parts required for a PC.<br>
				-Filtering parts according to a given constraint which could be specified by the user.<br>
 				-Providing some already specified builds that could be chosen directly by the customer instead of selecting each part.<br>
 				-Lists price of individual components and total price of PC.</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="text-decoration:none;"><b style="color: #91428e;">What services do we provide?</b> </a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">-Providing a variety of different models of PC parts.<br>
				-Mentioning an entire list of parts required for a PC.<br>
				-Filtering parts according to a given constraint which could be specified by the user.<br>
 				-Providing some already specified builds that could be chosen directly by the customer instead of selecting each part.<br>
 				-Lists price of individual components and total price of PC.</div>
      </div>
    </div>
	
	
  </div> 
</div>


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
  </div>   
</body>
</html>
