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

$pName = mysqli_real_escape_string($con,$_POST['pname']);
$pIDcard = mysqli_real_escape_string($con,$_POST['pidcard']);
$type = mysqli_real_escape_string($con,$_POST['type']);
$flightID = mysqli_real_escape_string($con,$_POST['FlightID']);
$method = mysqli_real_escape_string($con,$_POST['method']);
$discount = mysqli_real_escape_string($con,$_POST['discount']);

$sql="insert into payment(pName, pIDcard, type, flightID, method, discount)
values ('$pName', '$pIDcard', '$type', $flightID, '$method', $discount)";

if (!mysqli_query($con,$sql)) 
{
die('Error: ' . mysqli_error($con));
}
echo "Success inserting Payment data\n" ;
echo "<br>";

$cname = mysqli_real_escape_string($con,$_POST['name']);
$cIDcard = mysqli_real_escape_string($con,$_POST['idcard']);
$cbday = mysqli_real_escape_string($con,$_POST['birth']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);

$sql="insert into customer(name, idcard, birth, gender, email, phone, pass) 
values ('$cname', '$cIDcard', '$cbday','$gender', '$email', '$phone', '1234')";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success inserting Customer data" ;
echo "<br>";

$serviceID = mysqli_real_escape_string($con,$_POST['serviceID']);

$sql="insert into servicebooking(serviceID, paymentID) 
select $serviceID, payment.paymentID from payment 
where pIDcard = '$pIDcard' and type = '$type' and flightID = $flightID and method = '$method'";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success inserting Service Booking data" ;
echo "<br>";

$sql="update payment set customerID = (select customerID from customer where idcard = '$cIDcard'),
seviceprice = (select sum(s.price) from service s, servicebooking sb, payment p where sb.serviceID = s.serviceID and p.paymentID = sb.paymentID and p.pIDcard = '$pIDcard' and p.type = '$type' and p.flightID = $flightID and p.method = '$method')
where pIDcard = '$pIDcard' and type = '$type' and flightID = $flightID and method = '$method'";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success update payment";
echo "<br>";

	
$sql="update payment set price = (select price from flight where flightID = $flightID) + seviceprice - discount
where pIDcard = '$pIDcard' and type = '$type' and flightID = $flightID and method = '$method'";

if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Success update Price data";
echo "<br>";

mysqli_close($con);
?>
<button type="button" name="back" onclick="location.href='staffview.php'">Back</button>
<table border='0' align='center' class='table table-hover'>

</table>



