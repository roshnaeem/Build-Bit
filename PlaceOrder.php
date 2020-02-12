<?php
session_start();
?>

<?php include 'conn.php' ?>

<?php
//Create an order by moving it from the cart to the paid table in database

if ((isset($_POST['Card'])) or (isset($_POST['OtherPay']))){
	$Customer_ID = $_SESSION['Customer_ID'];
	
	//Fetching all entries for this customer in cart
	$sql = "SELECT * FROM orders WHERE Customer_ID = $Customer_ID";
	$result=mysqli_query($conn,$sql);
	
	while ($row = mysqli_fetch_assoc($result)){
		$Category = $row['Category_Name'];
		$Product = $row['Product_ID'];
		$Order = $row['ORDER_ID'];
		
		// Handling payment method card
		if (isset($_POST['Card'])){
			$account = $_POST['accountNum'];
			$sql2 = "INSERT INTO paid VALUES (NULL, $Customer_ID, '$Category', $Product, 1, $account, NULL)";
		}
		
		// Handling the other payment method
		else if (isset($_POST['OtherPay'])){
			$purse = $_POST['purse'];
			$sql2 = "INSERT INTO paid VALUES (NULL, $Customer_ID, '$Category', $Product, 2, NULL, $purse)";
		}
		$result2=mysqli_query($conn,$sql2);
		if ($result2){
			echo "Success";
		}
		echo $sql2;
		$sql3 = "DELETE FROM orders WHERE ORDER_ID = $Order";
		$result3=mysqli_query($conn,$sql3);
	}	
	header("location: index.php");
}





?>