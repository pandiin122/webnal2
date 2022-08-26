<?php
include("connection.php");

$firstname= $_POST['firstnamecol'];
$lastname=$_POST['lastnamecol'];
$adddate=date('Y-m-d');


$sql ="insert into post(post_firstname,lastname,post_at) values ('".$firstname."','".$lastname."','".$adddate."')";

mysqli_query($conn,$sql);


?>