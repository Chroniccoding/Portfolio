<?php
//When the submit button is pushed
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	
	$password = $_POST['password'];
	
	
	
//Connect to database

$db = mysqli_connect("127.0.0.1","theguy12_ryan","Newpass123","theguy12_motivation");

//Make sure the email is valid

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mysqli_close($db);
    }
}