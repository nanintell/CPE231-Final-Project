  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$r=1;
$query = " select name, duty, 
max(salary) as salary 
from staff
group by duty
order by salary;";

$result = mysqli_query($con, $query);
echo "<table border='1' align='center' class='table table-hover'>";
echo "<tr>";
echo "<td>"."No."."</td> ";
echo "<td>"."Name"."</td> ";	
echo "<td>"."Duty"."</td> ";				
echo "</tr>";
foreach( $result as $row ) {
	echo "<tr>";
	echo "<td>" .$r++ ."."."</td> ";
	echo "<td>" .$row["name"] .  "</td> ";
	echo "<td>" .$row["duty"] .  "</td> ";
	echo "</tr>";
	
}
	echo "</table>";	
?> 

</table>
