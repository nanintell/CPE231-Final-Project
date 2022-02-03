  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$r=1;
$query = " select flightID,price,takeoff,depart,destination,arrival
FROM flight";

$result = mysqli_query($con, $query);
echo "<table border='1' align='center' class='table table-hover'>";
echo "<tr>";
echo "<td>"."FlightID"."</td> ";
echo "<td>"."Price"."</td> ";	
echo "<td>"."Take Off"."</td> ";
echo "<td>"."Depart"."</td> ";
echo "<td>"."Destination"."</td> ";
echo "<td>"."Arrival"."</td> ";		
echo "</tr>";
foreach( $result as $row ) {
	echo "<tr>";
	echo "<td>" .$row["flightID"] .  "</td> ";
	echo "<td>" .$row["price"] .  "</td> ";
    echo "<td>" .$row["takeoff"] .  "</td> ";
    echo "<td>" .$row["depart"] .  "</td> ";
    echo "<td>" .$row["destination"] .  "</td> ";
    echo "<td>" .$row["arrival"] .  "</td> ";
	echo "</tr>";
	
}
	echo "</table>";	
?> 

</table>
