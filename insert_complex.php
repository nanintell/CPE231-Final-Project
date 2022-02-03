 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	//esc//ape variables for security
	$airport_name = mysqli_real_escape_string($con, $_POST['airport']);
	$iata = mysqli_real_escape_string($con, $_POST['iata']);
	$airport_address = mysqli_real_escape_string($con, $_POST['address']);
	$last_used = mysqli_real_escape_string($con, $_POST['used']);
	$airport_status = mysqli_real_escape_string($con, $_POST['status']);
	$airport_limit = mysqli_real_escape_string($con, $_POST['limit_entry']);

	$sql="INSERT INTO airport(name, iataCode, address, lastUsed, status, limitEntry) VALUES 
		('$airport_name', '$iata', '$airport_address', '$last_used', '$airport_status', $airport_limit)";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting airport data\n" ;
	echo "<br>";

	$manager_name = mysqli_real_escape_string($con, $_POST['mname']);
	$manager_salary = mysqli_real_escape_string($con, $_POST['msalary']);
	$manager_address = mysqli_real_escape_string($con, $_POST['maddress']);
	$manager_bday = mysqli_real_escape_string($con, $_POST['mbday']);

	$sql="INSERT INTO staff(name, duty, address, salary, birth, pass, workplace) SELECT  
		'$manager_name', 'Manager', '$manager_address', $manager_salary, '$manager_bday', '1234', `airportID` 
	FROM `airport` WHERE `iataCode` = '$iata'";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting manager data" ;
	echo "<br>";

	$sql="UPDATE airport SET managerID = (SELECT staffID FROM staff WHERE name = '$manager_name') WHERE iataCode = '$iata'";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success updating airport's manager data" ;
	echo "<br>";

	$engineer_name = mysqli_real_escape_string($con, $_POST['ename']);
	$engineer_salary = mysqli_real_escape_string($con, $_POST['esalary']);
	$engineer_address = mysqli_real_escape_string($con, $_POST['eaddress']);
	$engineer_bday = mysqli_real_escape_string($con, $_POST['ebday']);

	$sql="INSERT INTO staff(name, duty, address, salary, birth, pass, workplace) SELECT  
		'$engineer_name', 'Engineer', '$engineer_address', '$engineer_salary', '$engineer_bday', '1234', airportID 
	FROM airport WHERE iataCode = '$iata'";
	if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
	}
	echo "Success inserting engineer data";
	echo "<br>";

	$airplane_type = mysqli_real_escape_string($con, $_POST['type']);
	$flexi = mysqli_real_escape_string($con, $_POST['flexi']);
	$value = mysqli_real_escape_string($con, $_POST['value']);
	$saver = mysqli_real_escape_string($con, $_POST['saver']);
	$airplane_used = mysqli_real_escape_string($con, $_POST['nused']);
	$airplane_status = mysqli_real_escape_string($con, $_POST['status_airplane']);
	$airplane_startdate = mysqli_real_escape_string($con, $_POST['startdate_airplane']);

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
<form name="inpfrm" method="post" action="homepage.php">
<table border='0' align='center' class='table table-hover'>
<tr>
    <input name="reset" type="submit" id="Back" value="Back"/></td>
</tr>
</table>