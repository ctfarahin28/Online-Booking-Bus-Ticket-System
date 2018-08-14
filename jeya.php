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

$query="SELECT * FROM seat";
$results=mysqli_query($conn,$query);
 
$name=$_SESSION['name'];
 
 if (isset($_POST['signup']))
{
	if(!empty($_POST['check_list'])) {
		foreach($_POST['check_list'] as $check) {
			$que ="UPDATE seat set name='$name' where seat_no = $check ";
			$res = mysqli_query($conn,$que);
		}
	
		
		header('Location:paymentsucess.php');
	}
}
 ?>
 
 
 
 
 
 
 <!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
body { 
  background: url('http://kevinchassagne.com/assets/images/template/sidebar.png'); 

   background-image: url("bg.jpg"); no-repeat fixed center ;

  font-family: Arial;
  font-size: 12px;
  padding: 8px;


  
 
  
  
}

.center {
  margin: 0 auto;
  width: 20%;
     background-image: url("bg.pg")  no-repeat fixed center ;

}

.center input[type="checkbox"] {
  position: relative;
  display: inline-block;
  min-height: 10px;
  width: 30%;
  background: #ebebeb;
  -webkit-appearance: none;
  -moz-appearance: none;
  -o-appearance: none;
  appearance: none;
}

.center input[type="checkbox"]:after { 
  content: ''; 
  font-size: 2em;
  text-align:left;
  line-height: 50px;
  color: #555555;
  position: absolute;
  margin: auto auto;
  left: 0; right: 0; bottom: 0; top: 0;
  display: block;
  height: 20px;
  width: 20px;
  border-radius: 10%;
  background-image: none;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #ffffff;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
 }

.center input[type="checkbox"]:before { 
  position: absolute;
  margin: auto auto;
  left: 0; right: 0; bottom: 0; top: 0;
  content: '';
  display: block; 
  height: 30px;
  width: 30px;
  border: 2px solid #fff;
  border-radius: 50%;
  -webkit-transition: all 0.1s ease-in;
  -moz-transition: all 0.1s ease-in;
  -ms-transition: all 0.1s ease-in;
  -o-transition: all 0.1s ease-in;
  transition: all 0.1s ease-in;
}

.center input[type="checkbox"]:hover:before {
  height: 40px;
  width: 40px;
}

.center input[type="checkbox"]:checked:before {
  height: 50%;
  width: 50%;
  background: #dd3455;
  border: none;
  border-radius: 0;
}

.center input[type="checkbox"]:focus {
  outline: none;
}

.center input[type="checkbox"].a:after { content: 'A'; } 
.center input[type="checkbox"].b:after { content: 'B'; }
.center input[type="checkbox"].c:after { content: 'C'; }


.center input[type="checkbox"]:checked:after { content: '✓'; } body { 
  background: url('http://kevinchassagne.com/assets/images/template/sidebar.png'); 
}

.center {
  margin: 0 auto;
  width: 40%;
}

.center input[type="checkbox"] {
  position: relative;
  display: inline-block;
  min-height: 60px;
  width: 25%;
  background: #ebebeb;
  -webkit-appearance: none;
  -moz-appearance: none;
  -o-appearance: none;
  appearance: none;
}

.center input[type="checkbox"]:after { 
  content: ''; 
  font-size: 1.3em;
  text-align: center;
  line-height: 40px;
  color: #555555;
  position: absolute;
  margin: auto auto;
  left: 0; right: 0; bottom: 0; top: 0;
  display: block;
  height: 40px;
  width: 40px;
  border-radius: 30%;
  background-image: none;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #ffffff;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
 }

.center input[type="checkbox"]:before { 
  position: absolute;
  margin: auto auto;
  left: 0; right: 0; bottom: 0; top: 0;
  content: '';
  display: block; 
  height: 60px;
  width: 60px;
  border: 2px solid #fff;
  border-radius: 50%;
  -webkit-transition: all 0.1s ease-in;
  -moz-transition: all 0.1s ease-in;
  -ms-transition: all 0.1s ease-in;
  -o-transition: all 0.1s ease-in;
  transition: all 0.1s ease-in;
}

.center input[type="checkbox"]:hover:before {
  height: 40px;
  width: 40px;
}

.center input[type="checkbox"]:checked:before {
  height: 40%;
  width: 40%;
  background: #dd3455;
  border: none;
  border-radius: 0;
}

.center input[type="checkbox"]:focus {
  outline: none;

}

.center input[type="checkbox"].a:after { content: '1'; } 
.center input[type="checkbox"].b:after { content: '2'; }
.center input[type="checkbox"].c:after { content: '3'; }
.center input[type="checkbox"].d:after { content: '4'; } 
.center input[type="checkbox"].e:after { content: '5'; } 
.center input[type="checkbox"].f:after { content: '6'; } 
.center input[type="checkbox"].g:after { content: '7'; } 
.center input[type="checkbox"].h:after { content: '8'; }
.center input[type="checkbox"].i:after { content: '9'; } 
.center input[type="checkbox"].j:after { content: '10';} 
.center input[type="checkbox"].k:after { content: '11';} 
.center input[type="checkbox"].l:after { content: '12';}
.center input[type="checkbox"].m:after { content: '13';} 
.center input[type="checkbox"].n:after { content: '14';} 
.center input[type="checkbox"].o:after { content: '15';}
.center input[type="checkbox"].p:after { content: '16';}
.center input[type="checkbox"].q:after { content: '17';} 
.center input[type="checkbox"].r:after { content: '18'; }
.center input[type="checkbox"].s:after { content: '19'; } 
.center input[type="checkbox"].t:after { content: '20'; } 
.center input[type="checkbox"].u:after { content: '21'; }
.center input[type="checkbox"].v:after { content: '22'; }
.center input[type="checkbox"].w:after { content: '23'; } 
.center input[type="checkbox"].x:after { content: '24'; }
.center input.y:after { content: 'DVR';}

.center input[type="checkbox"].z:after { content: 'OKU';} 

 
 

 div {
 
 border: 1.5px solid blue;
  border-radius: 0.1px;
    padding: 5px 20px 15px 20px;
  box-shadow: 0 0 0 2rem skyblue;
  border-radius: 5px;
  font:  1.4rem arial;
  margin: 2rem;
  padding: 1rem;
  outline-offset: 0.5rem;
}
 


 

 
 

 








.center input[type="checkbox"]:checked:after { content: '✓'; } 

.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 40%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}


.btn:hover {
    opacity: 1;
	  background-color: #45a049;

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


</style>
</head>
<form method="post" action="jeya.php">

<center><h2> SELECT YOUR SEAT </h2></center> &emsp; &emsp;
<body>
      


<style>
body {
    background-color: #80ced6;
	  font: bold 1rem arial;
	 
  
  
}
</style>	


  <div class="center">
    <p> <center>
	&emsp; &emsp;&emsp;
	<input type="checkbox" name="Z" class="z"/>
	&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;
	 <input type="checkbox"  name="Y" class="exfilter" disabled="" />
	  &emsp; &emsp;&emsp;
	  
	  
	<?php
	
		
	
	
while($row = mysqli_fetch_assoc($results))
    {
        $seat = $row['seat_no'];
		$huruf= $row['huruf'];
		$name= $row['name'];
		
		if($name!=="") {
			$test="disabled";
		} else
		$test="";
	
        echo "<input type='checkbox' name='check_list[]' value='$seat' class='$huruf' $test>";
		if($seat%3==0){
		echo "     ";
		}   
		
		
		if($seat%3==1){
		echo "     ";
		}
    }

?>
	
	
	  
	 
</center>

    </p>
	 
	</div>
	<center> <button type="submit" name="signup" class="btn" >Send </button></center>
  </div>
 </form>
</body>

 
</html> 
