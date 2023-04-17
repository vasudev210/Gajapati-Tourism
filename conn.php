<?php
/*
Author: netxbax
*/

// serve, user, password, neme database
$conn = mysqli_connect("localhost","root","","images");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect: " . mysqli_connect_error();
  }
?>