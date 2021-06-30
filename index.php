<?php

include_once("shivonaferns.html")
 include_once('database.php');

  if(isset($_POST['submitbtn']))
{	 
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	  //$query1 = "create table if not exists user (email varchar(225),password varchar(255))";
	 $query = "INSERT INTO user(email,password) values ('$email','$password')";
	 if($result = pg_query($query)){
		echo "Data Added Successfully.";
	 }
	 else{
		echo "Error.";
	 }
}
  
?>
