
<html>
<head>
<title> Review User Booking Details Data</title>



<body>

<table style = "width;500px;"   colspan="2" border="5">


<tr><th colspan="1"><h1>Details</h1></th></tr>
<tr>

<th>NAME</th>
<th>IC/PASSPORT</th>
<th>DEPARTURE_DATE</th>
<th>TIME</th>
<th>DEPARTURE</th>
<th>ARRIVAL</th>

</tr>


</head>

<?php

while($bookingdetails=mysqli_fetch_assoc($result))
	

{
	
?>

	<tr>
<td><?php echo $bookingdetails['name'];?></td>
<td><?php echo $rows['ic'];?></td>
<td><?php echo $rows['dep_date'];?></td>
<td><?php echo $rows['masa'];?></td>
<td><?php echo $rows['Departure'];?></td>
<td><?php echo $rows['Arrival'];?></td>




</tr>

<?php

}

?>







</table>

</body>
</html>




<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="reg";

$conn = mysqli_connect($servername, $username, $password, $db);

$conn = mysqli_connect("localhost", "root", "", "reg");



mysqli_query($conn,"select * from students");

$sql = "SELECT * FROM  'bookingdetails' ";

$result = mysqli_query($conn,$sql);

















?>