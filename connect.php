<?php
$con=mysqli_connect("localhost","root","","nonairline");


if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($con,"utf8");
?>
