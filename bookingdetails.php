 <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db ="reg";



    
$conn = mysqli_connect($servername, $username, $password, $db);

    $conn = mysqli_connect("localhost", "root", "", "reg");

   
    if(!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    

if (isset($_POST['signup'])){
	
    $name = $_POST['firstname'];
	$ic = $_POST['ic'];
    $Departure_date = $_POST['DATE'];
	$time = $_POST['time'];
	$dest = $_POST['Destination'];
	$price=substr($dest, -5);
	
	$_SESSION['name'] = $name;

	
    // attempt insert query execution
	$sql = "INSERT INTO bookingdetails (`name` , `ic` , `dep_date`, `masa` , `dest` , `Despri` ) VALUES ('$name', '$ic', '$Departure_date', '$time', '$dest', '$price')".

	$result = mysqli_query($conn, $sql);

	
    if(mysqli_query($conn, $sql)){
		header('Location:jeya.php');
        
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

}
    
	?>
	






 
<html>
<body>
<head>
<style>
#header {
    background-color: aqua;
    color: slateblue;
    font-size:60px;
    text-align: center;
	  width: 700px;
    height: 50px;
    padding: 100px;
    border: 2px solid red;
	font-weight: bold;
font-family: sherif;
color: black;
font-size: 35px;
  background-color: #f2f2f2;
  padding: 1px 1px 1px 1px;
  border: 0.2px solid grey;
  border-radius: 1px;
  margin: 3px 2px 12px 12px;
} 
.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}



</style>
</head>
<body>
<center>
<br><br>
<body style="background-color:powderblue ;">
<h1 id="header">BOOKING FORM</h1>
<img src="Skyline.gif" width=400px; height=200px>
<h2 style="color:Sienna;">Tour with the Bus</h2>
<br><br>
<form method="post" action="bookingdetails.php">
  NAME:
  <input name="firstname" type="text" required>&emsp;
  
  IC/PASSPORT:
  <input name="ic" type="text" required>
  <br><br><br>
  
  DEPARTURE DATE:
  <input type="date" name="DATE" required>&emsp;&emsp;
  
  TIME: <select name="time" TIME="AMPM" required>
  <option value="--:--">--.--/--.--</option>
  <option value="18:00:00">6.00AM-6.00PM</option>
  <option value="12:00:00">12.00AM-12.00PM</option>
 
  </select>
  <br><br>
  DESTINATION : <select name="Destination" required>
    <option value= "-">-</option>
    <option value="JOHOR BAHRU - KOTA TINGGI RM 5.70">JOHOR BAHRU - KOTA TINGGI RM 5.70</option>
    <option value="JOHOR BAHRU - MERSING RM 14.70">JOHOR BAHRU - MERSING  RM 14.70</option>
    <option value="JOHOR BAHRU - SEGAMAT RM 20.20">JOHOR BAHRU - SEGAMAT RM 20.20</option>
    <option value="JOHOR BAHRU - MUAR RM 18.70">JOHOR BAHRU - MUAR RM 18.70</option>
    <option value="JOHOR BAHRU - BATU PAHAT RM 13.00">JOHOR BAHRU - BATU PAHAT RM 13.00</option>
    <option value="JOHOR BAHRU - KLUANG RM 11.70">JOHOR BAHRU - KLUANG RM 11.70</option>
    <option value="JOHOR BAHRU - PONTIAN RM 11.00">JOHOR BAHRU - PONTIAN RM 11.00</option>
    <option value="KOTA TINGGI - JOHOR BAHRU RM 5.70">KOTA TINGGI - JOHOR BAHRU RM 5.70</option>
    <option value="KOTA TINGGI - MERSING RM 8.00">KOTA TINGGI - MERSING RM 8.00</option>
    <option value="KOTA TINGGI - SEGAMAT RM 22.60">KOTA TINGGI - SEGAMAT RM 22.60</option>
    <option value="KOTA TINGGI - MUAR RM 21.00">KOTA TINGGI - MUAR RM 21.00</option> 
    <option value="KOTA TINGGI - BATU PAHAT RM 20.70">KOTA TINGGI - BATU PAHAT RM 20.70</option>     
    <option value="KOTA TINGGI - KLUANG RM 10.70">KOTA TINGGI - KLUANG RM 10.70</option>
    <option value="KOTA TINGGI - PONTIAN RM 17.00">KOTA TINGGI - PONTIAN RM 17.00</option>
    <option value="MERSING - JOHOR BAHRU RM 14.70">MERSING - JOHOR BAHRU RM 14.70</option>
    <option value="MERSING - KOTA TINGGI RM 8.00">MERSING - KOTA TINGGI RM 8.00</option>
    <option value="MERSING - SEGAMAT RM 21.90">MERSING - SEGAMAT RM 21.90</option>
    <option value="MERSING - MUAR RM 22.70">MERSING - MUAR RM 22.70</option>
    <option value="MERSING - BATU PAHAT RM 25.00">MERSING - BATU PAHAT RM 25.00</option>
    <option value="MERSING - KLUANG RM 11.80">MERSING - KLUANG RM 11.80</option>
    <option value="MERSING - PONTIAN RM 23.70">MERSING - PONTIAN RM 23.70</option>
    <option value="SEGAMAT - JOHOR BAHRU RM 20.20">SEGAMAT - JOHOR BAHRU RM 20.20</option>
    <option value="SEGAMAT - KOTA TINGGI RM 22.60">SEGAMAT - KOTA TINGGI RM 22.60</option>
    <option value="SEGAMAT - MERSING RM 21.90">SEGAMAT - MERSING RM 21.90</option>
    <option value="SEGAMAT - MUAR RM 17.90">SEGAMAT - MUAR RM 17.90</option>
    <option value="SEGAMAT - BATU PAHAT RM 12.90">SEGAMAT - BATU PAHAT RM 12.90</option>
    <option value="SEGAMAT - KLUANG RM 14.80">SEGAMAT - KLUANG RM 14.80</option>
    <option value="SEGAMAT - PONTIAN RM 21.90">SEGAMAT - PONTIAN RM 21.90</option>    
    <option value="MUAR - JOHOR BAHRU RM 18.70">MUAR - JOHOR BAHRU RM 18.70</option>
    <option value="MUAR - KOTA TINGGI RM 21.00">MUAR - KOTA TINGGI RM 21.00</option>
    <option value="MUAR - MERSING RM 22.70">MUAR - MERSING RM 22.70</option>
    <option value="MUAR - SEGAMAT RM 17.90">MUAR - SEGAMAT RM 17.90</option>
    <option value="MUAR - BATU PAHAT RM 7.70">MUAR - BATU PAHAT RM 7.70</option>
    <option value="MUAR - KLUANG RM 16.00">MUAR - KLUANG RM 16.00</option>
    <option value="MUAR - PONTIAN RM 22.70">MUAR - PONTIAN RM 22.70</option>
    <option value="BATU PAHAT - JOHOR BAHRU RM13.00">BATU PAHAT - JOHOR BAHRU RM13.00</option>
    <option value="BATU PAHAT - KOTA TINGGI RM 20.70">BATU PAHAT - KOTA TINGGI RM 20.70</option>
    <option value="BATU PAHAT - MERSING RM25.00">BATU PAHAT - MERSING RM25.00</option>
    <option value="BATU PAHAT - SEGAMAT RM12.90">BATU PAHAT - SEGAMAT RM12.90</option>
    <option value="BATU PAHAT - MUAR RM7.70">BATU PAHAT - MUAR RM7.70</option>
    <option value="BATU PAHAT - KLUANG RM 12.00">BATU PAHAT - KLUANG RM 12.00</option>
    <option value="BATU PAHAT - PONTIAN RM 18.90">BATU PAHAT - PONTIAN RM 18.90</option>
    <option value="KLUANG - JOHOR BAHRU RM 11.70">KLUANG - JOHOR BAHRU RM 11.70</option>
    <option value="KLUANG - KOTA TINGGI RM 10.90">KLUANG - KOTA TINGGI RM 10.90</option>
    <option value="KLUANG - MERSING RM 11.80">KLUANG - MERSING RM 11.80</option>
    <option value="KLUANG - SEGAMAT RM14.80">KLUANG - SEGAMAT RM14.80</option>
    <option value="KLUANG - MUAR RM 16.00">KLUANG - MUAR RM 16.00</option>
    <option value="KLUANG - BATU PAHAT RM12.00">KLUANG - BATU PAHAT RM12.00</option>
    <option value="KLUANG - PONTIAN RM 16.70">KLUANG - PONTIAN RM 16.70</option>
    <option value="PONTIAN - JOHOR BAHRU RM 11.00">PONTIAN - JOHOR BAHRU RM 11.00</option>
    <option value="PONTIAN - KOTA TINGGI RM 17.00">PONTIAN - KOTA TINGGI RM 17.00</option>
    <option value="PONTIAN - MERSING RM 23.70">PONTIAN - MERSING RM 23.70</option>
    <option value="PONTIAN - SEGAMAT RM 21.90">PONTIAN - SEGAMAT RM 21.90</option>
    <option value="PONTIAN - MUAR 22.70">PONTIAN - MUAR RM 22.70</option>
    <option value="PONTIAN - BATU PAHAT 18.90">PONTIAN - BATU PAHAT RM 18.90</option>
    <option value="PONTIAN - KLUANG RM 16.70">PONTIAN - KLUANG RM 16.70</option>
     
  </select>
  <br><br><br>
  
  </div>
			
			<input type="submit" name="signup" value="continue" class="btn">
          </div>
  </center>
</form>

</body>

</html>