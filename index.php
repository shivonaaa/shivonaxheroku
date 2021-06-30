<?php

include_once("shivonaferns.html")
 //include_once("database.php")
 $host        = "host = ec2-54-145-224-156.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = ddclaq7bt5689h";
   $credentials = "user = iptoqvhcamsfjd password=63a6364abf6d776bb81c2eafecb287f28202f2cca4cb13908ee81588724f93f9";
   $db = pg_connect( "$host $port $dbname $credentials");

//   if(isset($_POST['submitbtn']))
// {	 
// 	 $email = $_POST['email'];
// 	 $password = $_POST['password'];
// 	  //$query1 = "create table if not exists user (email varchar(225),password varchar(255))";
// 	 $query = "INSERT INTO user(email,password) values ('$email','$password')";
// 	 if($result = pg_query($query)){
// 		echo "Data Added Successfully.";
// 	 }
// 	 else{
// 		echo "Error.";
// 	 }
// }
  
?>
