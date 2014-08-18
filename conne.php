<?php

/*
$con = mysql_connect("silo.cs.indiana.edu","b561_f11_32","b561_f11_32");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
echo "connected";
}

  $db = mysql_select_db("b561_f11_32", $con);
  if(!$db) 
	{
		die("Unable to select database");
	}
*/

$con = mysql_connect("sql11.bravehost.com","koebe23","baseball23");
if (!$con)
  {
echo $con;
  die('Could not connect: ' . mysql_error());
  }
else
{
echo "connected";
}

  $db = mysql_select_db("network_2705085", $con);
  if(!$db) 
	{
		die("Unable to select database");
	}
else
{
echo "magic";
}


 ?>