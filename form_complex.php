  
 <?php
$con=mysqli_connect("localhost","root","","nonairline");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?> 

  <form name="inpfrm" method="post" action="Insert_complex.php">
	<table width="500" height="18" border="0" align="left" cellpadding="0" cellspacing="0">
	<tr>
		<td height="30" align="right"></td>
		<td width="105" align="left"> Airport Form </td>
	</tr>
	<tr>
		<td height="30" align="right" >Airport : </td>
		<td width="105" align="left"><input name="airport" type="text" id="airport" size="50" value="" maxlength="50"></td>
	</tr>
	<tr>
		<td height="30" align="right" >IATA Code : </td>
		<td width="105" align="left"><input name="iata" type="text" id="iata" size="30" value="" maxlength="30"></td>
	</tr>
	<tr>
		<td height="30" align="right" >Address : </td>
		<td width="105" align="left"><input name="address" type="text" id="address" size="30" value="" maxlength="30"></td>
	</tr>
	<tr>
		<td height="30" align="right" >Last Used : </td>
		<td width="105" align="left"><input name="used" type="date" id="used" size="30" value="" maxlength="30"></td>
	</tr>
	<tr>
		<td height="30" align="right" >Status : </td>
		<td width="105" align="left"><input name="status" type="text" id="status" size="30" value="" maxlength="30"></td>
	</tr>
	<tr>
		<td height="30" align="right" >Limit Entry : </td>
		<td width="105" align="left"><input name="limit_entry" type="number" id="limit_entry" size="30" value="" maxlength="30"></td>
	</tr>
	<tr>
		<td height="30" align="right"></td>
		<td width="105" align="left"> Manager </td>
	</tr>
	<tr>
		<td height="30" align="right" >Name : </td>
		<td width="100" align="left"><input name="mname" type="text" id="mname" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Salary : </td>
		<td width="100" align="left""><input name="msalary" type="number" id="msalary" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Address : </td>
		<td width="100" align="left"><input name="maddress" type="text" id="maddress" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Birthday : </td>
		<td width="100" align="left"><input name="mbday" type="date" id="mbday" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right"></td>
		<td width="105" align="left"> Engineer </td>
	</tr>
	<tr>
		<td height="30" align="right" >Name : </td>
		<td width="100" align="left"><input name="ename" type="text" id="ename" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Salary : </td>
		<td width="100" align="left"><input name="esalary" type="number" id="esalary" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Address : </td>
		<td width="100" align="left"><input name="eaddress" type="text" id="eaddress" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Birthday : </td>
		<td width="100" align="left"><input name="ebday" type="date" id="ebday" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right"></td>
		<td width="105" align="left"> Responsible Airplane </td>
	</tr>
	<tr>
		<td height="30" align="right" >Type : </td>
		<td width="100" align="left"><input name="type" type="text" id="type" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Flexi Seats : </td>
		<td width="100" align="left"><input name="flexi" type="number" id="flexi" size="6" value="" maxlength="3"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Value Seats : </td>
		<td width="100" align="left"><input name="value" type="number" id="value" size="6" value="" maxlength="3"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Saver Seats : </td>
		<td width="100" align="left"><input name="saver" type="number" id="saver" size="6" value="" maxlength="3"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Start Seats : </td>
		<td width="100" align="left"><input name="start" type="number" id="start" size="6" value="" maxlength="3"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Start Date : </td>
		<td width="100" align="left"><input name="startdate_airplane" type="date" id="start" size="30" value="" maxlength="30"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Used : </td>
		<td width="100" align="left"><input name="nused" type="number" id="nused" size="6" value="" maxlength="3"> </td>
	</tr>
	<tr>
		<td height="30" align="right" >Status : </td>
		<td width="100" align="left"><input name="status_airplane" type="text" id="status_airplane" size="30" value="" maxlength="30"> </td>
	</tr>	
	<tr>
		<td height="30" align="right" ></td>
	    <td width="100" align="right"><input name="INSERT" type="submit" id="INSERT" value="INSERT" /></td>
	</tr> 
	</table>