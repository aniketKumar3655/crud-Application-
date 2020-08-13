<?php
$a=mysqli_connect("localhost","root","","student");
$id=$_REQUEST['id'];
$query = "DELETE FROM fedata WHERE id=$id"; 
$result = mysqli_query($a,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>