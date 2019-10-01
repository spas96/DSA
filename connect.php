<?php

//A PHP script to esablish a connection to SQL server

//Local machine login
$host="localhost";
$user="root";
$pw="";
$databasename="fet13040615";

/*
UWE details
$host="mysql5";
$user="fet13040615";
$pw="cemslogin";
$databasename="fet13040615";
*/

$db = new mysqli($host, $user, $pw, $databasename);

if($db->connect_errno) {
  echo "Error #: ";
  echo $db->connect_errno;
  echo "<br>";
  echo "Error Msg: ";
  echo $db->connect_error;
  echo "<br>";
  echo "<br>";
  die('Could not connect to the database.');
}
else
  echo "Connected";

?>
