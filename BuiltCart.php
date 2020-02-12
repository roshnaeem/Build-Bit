<?php
session_start();
?>

<?php include 'conn.php' ?>
<?php

//Adding a built PC into the cart of a customer
if ((isset($_GET['id'])) AND !empty($_SESSION['Customer_ID'])){
	$pid = $_GET['id'];
	$sql= "INSERT INTO `orders`(Customer_ID, Category_Name,Product_ID) VALUES (".$_SESSION['Customer_ID'].",'computer','$pid')";
	$result= mysqli_query($conn,$sql);
	header("location:cart.php");
	
}

else {
	header("location:login.php");
}


?>

