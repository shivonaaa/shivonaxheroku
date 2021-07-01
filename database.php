<?php
$host        = "host = ec2-3-89-0-52.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d6gp8vqko1kjp4";
   $credentials = "user = qgesydgngnicok password=efbe6e85ebd0bbe3bcb94aeb5a79e66a5c62ac58e72534d3f2ee3b716aee4746";
   $db = pg_connect( "$host $port $dbname $credentials");
?>
