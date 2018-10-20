<?php
define("db_server","localhost");
define("db_user","root");
define("db_pass","");
define("db_name","hotel");
$conn=mysqli_connect(db_server,db_user,db_pass);//create connection
if(!$conn)
{
die("error connection to db server".mysqli_error());
}
$db_select=mysqli_select_db($conn,db_name);//to select from the db
if(!$db_select){
die("error in selection db".mysqli_error($conn));
}
?>