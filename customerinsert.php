<?php

session_start();
//connect
include 'connect.php';

//query sql to find
$name = $_POST['name'];
$sql= "SELECT name FROM customer WHERE name='$name'";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    echo "<script>setTimeout(\"location.href = 'customersignup.html';\",1500);</script>";
}

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);



if($row['name'] != NULL){
  mysqli_close($con);
  echo "ชื่อนี้เคยใช้ในการสมัครแล้ว กรุณาติดต่อผู้ดูแลระบบ";
  echo "<script>setTimeout(\"location.href = 'customersignup.html';\",1500);</script>";
}else {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $idcard = mysqli_real_escape_string($con, $_POST['idcard']);
  $birth = mysqli_real_escape_string($con,$_POST['birth']);
  $gender = mysqli_real_escape_string($con,$_POST['gender']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $pass = mysqli_real_escape_string($con,$_POST['pass']);

  $sql="INSERT INTO customer(name, idcard,birth,gender,email,phone,pass) 
  VALUES('$name','$idcard','$birth','$gender','email','$phone','$pass')";  

  if (mysqli_query($con,$sql)){
    $_SESSION['name'] = $name;
    mysqli_close($con);
    header("Location: customerrecive.php");
    exit;
  }
}
?>
