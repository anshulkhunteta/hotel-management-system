<?php
$conn1=mysqli_connect('localhost','root',"");
mysqli_select_db($conn1,"bank");

$conn2=mysqli_connect('localhost','root',"");
mysqli_select_db($conn2,"hotel");
?>