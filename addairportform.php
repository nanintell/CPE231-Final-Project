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

$airportname = mysqli_real_escape_string($con,$_POST['airportname']);
$iata = mysqli_real_escape_string($con,$_POST['iataCode']);
$airportaddress = mysqli_real_escape_string($con,$_POST['airportaddress']);
$lastUsed = mysqli_real_escape_string($con,$_POST['lastUsed']);
$airportstatus = mysqli_real_escape_string($con,$_POST['airportstatus']);
$limitEntry = mysqli_real_escape_string($con,$_POST['limitEntry']);

$sql="INSERT INTO airport(name, iataCode,address,managerID,lastUsed,status,limitEntry) 
VALUES('$airportname','$iata','$airportaddress',NULL,'$lastUsed','$airportstatus','$limitEntry')";
if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting airport data\n" ;
	echo "<br>";

$managername = mysqli_real_escape_string($con,$_POST['managername']);
$managersalary = mysqli_real_escape_string($con,$_POST['managersalary']);
$manageraddress = mysqli_real_escape_string($con,$_POST['manageraddress']);
$managerbirth = mysqli_real_escape_string($con,$_POST['managerbirth']);

$sql="INSERT INTO staff(name, duty, address, salary, birth, pass, workplace) SELECT  
'$managername','Manager','$manageraddress', $managersalary, '$managerbirth', '1234', `airportID` 
FROM `airport` WHERE `iataCode` = '$iata'";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success inserting manager data" ;
echo "<br>";

$sql="UPDATE airport SET managerID = (SELECT staffID FROM staff WHERE name = '$managername') WHERE iataCode = '$iata'";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success updating airport's manager data" ;
echo "<br>";

$engineer_name = mysqli_real_escape_string($con, $_POST['engineername']);
	$engineer_salary = mysqli_real_escape_string($con, $_POST['engineersalary']);
	$engineer_address = mysqli_real_escape_string($con, $_POST['engineeraddress']);
	$engineer_bday = mysqli_real_escape_string($con, $_POST['engineerbirth']);

	$sql="INSERT INTO staff(name, duty, address, salary, birth, pass, workplace) SELECT  
		'$engineer_name', 'Engineer', '$engineer_address', '$engineer_salary', '$engineer_bday', '1234', airportID 
	FROM airport WHERE iataCode = '$iata'";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting engineer data";
	echo "<br>";

	$airplane_type = mysqli_real_escape_string($con, $_POST['type']);
	$flexi = mysqli_real_escape_string($con, $_POST['flexiSeat']);
	$value = mysqli_real_escape_string($con, $_POST['valueSeat']);
	$saver = mysqli_real_escape_string($con, $_POST['saverSeat']);
	$airplane_used = mysqli_real_escape_string($con, $_POST['used']);
	$airplane_status = mysqli_real_escape_string($con, $_POST['airplanestatus']);
	$airplane_startdate = mysqli_real_escape_string($con, $_POST['startDate']);

	$sql="INSERT INTO airplane(airportID, engineerID, type, flexiSeat, valueSeat, saverSeat, used, status, startDate) SELECT
		workplace, staffID, '$airplane_type', $flexi, $value, $saver, $airplane_used, '$airplane_status', '$airplane_startdate'
		FROM staff
		WHERE name = '$engineer_name' ";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting airplane data";
	echo "<br>";

  mysqli_close($con);
  ?>
  <button type="button" name="back" onclick="location.href='staffview.php'">Back</button>
  <table border='0' align='center' class='table table-hover'>
  <tr>
      <input name="reset" type="submit" id="Back" value="Back"/></td>
  </tr>
  </table>


?>
