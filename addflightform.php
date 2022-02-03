<?php
  session_start();
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
  } else {
    echo "ไม่ได้อยู่ในระบบ";
    echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
  }
//connect
include 'connect.php';

// recive from form

$price = mysqli_real_escape_string($con,$_POST['price']);
$takeoff = mysqli_real_escape_string($con,$_POST['takeoff']);
$depart = mysqli_real_escape_string($con,$_POST['depart']);
$destination = mysqli_real_escape_string($con,$_POST['destination']);
$arrival = mysqli_real_escape_string($con,$_POST['arrival']);

$sql="insert into flight (price, takeoff, depart, destination, arrival) 
values ('$price', '$takeoff', $depart, $destination, '$arrival');";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting Flight data\n" ;
	echo "<br>";

$pilot_name = mysqli_real_escape_string($con,$_POST['pname']);
$pilot_salary = mysqli_real_escape_string($con,$_POST['psalary']);
$pilot_address = mysqli_real_escape_string($con,$_POST['paddress']);
$pilot_bday = mysqli_real_escape_string($con,$_POST['pbirth']);

$sql="insert into staff(name, duty, address, salary, birth, pass, workplace)
values ('$pilot_name', 'Pilot', '$pilot_address', $pilot_salary, '$pilot_bday', '1234', $depart);";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success inserting Pilot data" ;
echo "<br>";

$type = mysqli_real_escape_string($con, $_POST['type']);
$flexi = mysqli_real_escape_string($con, $_POST['flexiSeat']);
$value = mysqli_real_escape_string($con, $_POST['valueSeat']);
$saver = mysqli_real_escape_string($con, $_POST['saverSeat']);
$used = mysqli_real_escape_string($con, $_POST['used']);
$status = mysqli_real_escape_string($con, $_POST['airplanestatus']);
$start = mysqli_real_escape_string($con, $_POST['startDate']);
$engineerID = mysqli_real_escape_string($con,$_POST['engineerID']);

$sql="insert into airplane (airportID, engineerID, type, flexiSeat, valueSeat, saverSeat, startDate, used, status) 
VALUES ($depart, $engineerID, '$type', $flexi, $value, $saver, $start, $used, '$status');";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success inserting airplane data";
echo "<br>";
$sql="update flight set pilotID = (select staffID from staff where name = '$pilot_name'),
airplaneID = (select airplaneID from airplane where airportID = $depart and engineerID = $engineerID 
and type = '$type' and used = '$used' and status = '$status')
where price = '$price' and takeoff = '$takeoff' and depart = $depart and destination = $destination and 
arrival = '$arrival'";


mysqli_close($con);
?>
  <button type="button" name="back" onclick="location.href='staffview.php'">Back</button>
  <table border='0' align='center' class='table table-hover'>
  <tr>
  
  </tr>
  </table>


