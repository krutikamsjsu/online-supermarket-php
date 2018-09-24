<?php
$con = mysql_connect("localhost","id5737826_project272","krutika@123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("id5737826_project", $con);
?>