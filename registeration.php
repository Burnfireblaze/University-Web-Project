<?php
session_start();
//header('location:login.html');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST,'password');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userregisteration";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('connect error'.mysqli_connect_errno().mysqli_connect_error()); 
}
else{
		$sql = "INSERT INTO usertable (username, email, password) 
		values ('$username' ,'$email' , '$password')";
		
		if ($conn->query($sql))
		{
			echo "REGISTRATION SUCCESFULL";
		}
		else{
			echo "USERNAME ALREADY IN USE";}
	}
?>