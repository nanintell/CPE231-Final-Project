<?php
// Start the session
session_start();

require 'connect.php';
//clear session
session_unset();

// Set php variables
$ID = mysqli_real_escape_string($con,$_POST['ID']);
$Pass =  mysqli_real_escape_string($con,$_POST['pass']);
$choice = mysqli_real_escape_string($con,$_POST['choice']);
$_SESSION['choice'] = $choice;
$_SESSION['ID'] = $ID;

//query customer
if($choice == 'customer'){

    $sql = "SELECT customerID,name FROM customer WHERE customerID = '$ID' AND pass = '$Pass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(empty($row['name'])){
      echo "ID หรือ Password ไม่ถูกต้อง!";
      echo "<script>setTimeout(\"location.href = 'login.html';\",1500);</script>";
    }else {
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['Pass'] = $Pass;
      $_SESSION['name'] = $row['name'];

      header("Location: customerview.php"); //go to customer view
      exit;
    }

  } else {
  $sql = "SELECT staffID,name FROM staff WHERE staffID = '$ID' AND pass = '$Pass'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if(empty($row['name'])){
    echo "ID หรือ Password ไม่ถูกต้อง!";
    echo "<script>setTimeout(\"location.href = 'login.html';\",1500);</script>";
  }else {
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['Pass'] = $Pass;
    $_SESSION['name'] = $row['name'];

    header("Location: staffview.php"); //go to staff view
    exit;
  

  }
}


//close sql
mysqli_close($con);

 ?>
