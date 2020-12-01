<?php

$con = mysqli_connect('localhost', 'root', '', 'final_project');

if(!$con) {
  die("Database Connection Failed".mysqli_error($con));
}

?>