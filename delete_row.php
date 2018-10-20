<?php

$val = $_GET["val"];
echo $val;

$connect = mysqli_connect("localhost" , "root" , "12345678" , "friends");
$query = "DELETE FROM friends WHERE id=$val";
$res = mysqli_query($connect,$query);

header("location:index.php")

?>