<?php
include 'check.php'
include 'connect.php';
$sq="delete from reg where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:login.php');
?>