<?php
session_start();
?>
<?php include 'conn.php' ?>
<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql = "DELETE FROM ORDERS WHERE ORDER_ID=".$id;
    if (mysqli_query($conn, $sql)){
        header("Location: cart.php");
        die();
    }
}
 
?>
