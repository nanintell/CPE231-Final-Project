  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$r=1;
$query = " SELECT (s.name)AS staffname ,COUNT(s.name)AS count
FROM staff s, flight f
WHERE f.pilotID = s.staffID
GROUP BY s.name
ORDER BY count DESC;";

$result = mysqli_query($con, $query);
echo "<table border='1' align='center' class='table table-hover'>";
echo "<tr>";
echo "<td>"."No."."</td> ";
echo "<td>"."Name"."</td> ";	
echo "<td>"."Count"."</td> ";				
echo "</tr>";
foreach( $result as $row ) {
	echo "<tr>";
	echo "<td>" .$r++ ."."."</td> ";
	echo "<td>" .$row["staffname"] .  "</td> ";
	echo "<td>" .$row["count"] .  "</td> ";
	echo "</tr>";
	
}
	echo "</table>";	
?> 

</table>
