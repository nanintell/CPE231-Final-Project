  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$ID = $_SESSION['ID'];

$r=1;
$query = " select customerID,pName,pIDcard,type,price,fightID,discount,serviceprice
from payment
where customerID = '$ID';

$result = mysqli_query($con, $query);


?> 

</table>
