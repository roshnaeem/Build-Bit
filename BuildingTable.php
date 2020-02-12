<?php
session_start();
?>
			<?php
			
				//Retrieving a product ID for newly created Computer
				if(isset($_POST['submitpart'])){
						$Compid = $_POST['CompId'];
						//echo $Compid;
						$connect = mysqli_connect("localhost", "root", "", "buildit");
						$query="SELECT Product_ID FROM computer Where '$Compid'=Comp_ID";
						$SummaryData=mysqli_query($connect,$query);

						//echo "hi there";

						
						//Inserting the PC into the cart
						while($SummaryRow=mysqli_fetch_array($SummaryData)){
						//echo "$SummaryRow";
							$pid=$SummaryRow['Product_ID'];
							$price=$SummaryRow['Price'];
							echo "$pid";
							$connect = mysqli_connect("localhost", "root", "", "buildit");
						 	$query1= "INSERT INTO `orders`(Customer_ID, Category_Name,Product_ID) VALUES (".$_SESSION['Customer_ID'].",'computer','$pid')";
							echo $query1;
						 	echo "hi again";
						 	$data= mysqli_query($connect,$query1);
						 	echo "plis";
						 	header("location:cart.php");
						 }
						

					}
					else {
						//Redirecting lost user 
						header("location: Building.php");
					}


			?>