  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$r=1;
$query = " select date(f.takeoff) as flight_date ,count(p.paymentID) as customers
from payment p, flight f
where p.flightID = f.flightID
group by flight_date
ORDER BY customers  DESC";

$result = mysqli_query($con, $query);
echo "<table border='1' align='center' class='table table-hover'>";
echo "<tr>";
echo "<td>"."No."."</td> ";
echo "<td>"."Date"."</td> ";	
echo "<td>"."Customers"."</td> ";				
echo "</tr>";
foreach( $result as $row ) {
	echo "<tr>";
	echo "<td>" .$r++ ."."."</td> ";
	echo "<td>" .$row["flight_date"] .  "</td> ";
	echo "<td>" .$row["customers"] .  "</td> ";
	echo "</tr>";
	
}
	echo "</table>";	
?> 

</table>
