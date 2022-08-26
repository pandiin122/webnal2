<?php
include("connection.php");

$id = $_POST['postid'];
$firstname= $_POST['firstnamecol'];
$lastname=$_POST['lastnamecol'];


//echo $id;

$sql ="UPDATE post SET post_firstname='".$firstname."',lastname='".$lastname."' where id='".$id."'";

mysqli_query($conn,$sql);



?>