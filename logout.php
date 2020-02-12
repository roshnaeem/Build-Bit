<?php

session_start();
session_unset();
session_destroy();
header("location:index.php"); //sending user back to Main Page
exit();




?>
