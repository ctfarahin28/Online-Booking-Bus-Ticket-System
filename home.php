<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db ="reg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['signup']))
{
    $name = $_POST['name'];
	$password = $_POST['password'];
	
	
	
	$sql = "SELECT name, password FROM user where name='$name' and password='$password'";
	$result = mysqli_query($conn, $sql);
	
	
	
 //ctoney ctoney123
 if ($name =='user' AND $password=='user123') {
    echo "You have logged in!";
} else if ($name =='user' AND $password=='user123') {
    echo "you have logged in!";
} else {
    echo "You have not requested a login form!";
} 
	
	
	if($result->num_rows === 1) {
		header('Location: bookingdetails.php');
	}
	else header('Location: home.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
		
    background: lightblue url("busmotion.gif") no-repeat fixed center 
	
  
}

body 6
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox ; /* IE10 */
    display: flex;
    width: 40%;
    margin-bottom: 4px;
}

.icon {
    padding: 10px;
    background: blue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid blue;
}

/* Set a style for the submit button */

.btn {
  background-color: blue;
  color: white;
  padding: 6px;
  margin: 7px 0;
  border: none;
  width: 40%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 14px;
}

.btn:hover {
    opacity: 1;
}
h1{

  width: 400px;
    height: 30px;
    padding: 80px;
    border: 0.5px invisible;
   
	font-weight: bold;
font-family: Times New Roman;
color: black;
font-size: 40px;
  

}



</style>
</head>
<body>
</style>
</head>
<body>
<center>
<form method="post" action="home.php">

  <h1>SIGN IN </h1>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="name">


  </div>

 
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button type="submit" name="signup" class="btn" >Sign In </button>
</form>
</center>
</body>
</html>
