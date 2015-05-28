<?php
// Create connection
$connDB = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connDB->connect_error) {
  die("Connection failed: " . $connDB->connect_error);
}

//Run an sql script on the database and return the result
function runSql($sql) {
  global $connDB;
  $result = $connDB->query($sql);
  return $result;
}
?>