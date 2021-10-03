<?php
include('welcome.php');

$mydb="my_db";
$conn = mysqli_connect("localhost","root","",$mydb);

// insert data in database using php
if(count($_POST)>0){
	
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$sql = "INSERT INTO `data`( `firstname`, `lastname`,`gender`,`email`) 
		VALUES ('$firstname','$lastname','$gender','$email')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		echo"data is uploaded";	} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	
}
   ?>