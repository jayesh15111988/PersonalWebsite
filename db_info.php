<?php

$con = mysql_connect("sql11.bravehost.com","koebe23","baseball23");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $db = mysql_select_db("network_2705085", $con);
  if(!$db) 
	{
		die("Unable to select database");
	}
	
	?>
  
 