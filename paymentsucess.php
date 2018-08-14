<?php
session_start();
$name=$_SESSION['name'];

$servername = "localhost";
$username = "root";
$password = "";
$db ="reg";



    
$conn = mysqli_connect($servername, $username, $password, $db);

    $conn = mysqli_connect("localhost", "root", "", "reg");

   
    if(!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

	$query="SELECT * FROM bookingdetails where name='$name'";
	$results=mysqli_query($conn,$query);
	
	while($row = mysqli_fetch_assoc($results))
    {
        $price = $row['Despri'];
	}
	
if (isset($_POST['inser']))
{
    $namecard = $_POST['namecard'];
	$cardnum = $_POST['cardnum'];
    $exp= $_POST['expmonth'];
	$cvv = $_POST['cvv'];
	$Despri = $_POST['despri'];
	

	

	
    // attempt insert query execution
	$sql = "INSERT INTO pay (`namecard` , `cardnum` , `exp`, `cvv` ,`despri` ) VALUES ('$namecard', '$cardnum', '$exp', '$cvv' ,'$Despri')".

	$result = mysqli_query($conn, $sql);

	
    if(mysqli_query($conn, $sql)){
		header('Location:thanks.php');
        
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

}

















?>




























<!DOCTYPE html>








<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: #80ced6;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}


h2 {

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
  border: 0.2px solid lightgrey;
  border-radius: 1px;
  margin: 3px 2px 12px 12px;

}


body {
   


	 
	 
  
  
}
</style>
</head>
<body>
<div class="container">
 <form method="post" action="paymentsucess.php" >

				  <center><h2> PAYMENT </h2></center>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="namecard" placeholder="Rin Samad" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnum" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Destination Price</label>
            
                <input type="text" id="despri" value="RM <?php echo $price; ?>" disabled>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
			 
<br><input type="checkbox" name="checkbox" value="check" id="agree" required> I have read and agree to the Terms and Conditions and Privacy Policy
<br>



   <div>
			<input type="hidden" id="despri" name="despri" value="<?php echo $price; ?>" >
			<input type="submit" name="inser" class="btn">
          </div>
  </form>        
    
        
      


</body>
</html>
