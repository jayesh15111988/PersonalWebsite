<?php
/* Old details from silo server - Now migrating from silo to bravenet
$con = mysql_connect("silo.cs.indiana.edu","rf_sn_0923","jk+rf-sn=my+sql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  $db = mysql_select_db("rf_sn_0923", $con);
  if(!$db) 
	{
		die("Unable to select database");
	}
	*/
$con = mysql_connect("sql11.bravehost.com","koebe23","baseball23");
if (!$con)
  {
//echo $con;
  die('Could not connect: ' . mysql_error());
  }
  $db = mysql_select_db("network_2705085", $con);
  if(!$db) 
	{
		die("Unable to select database");
	}

	
	?>
  
 