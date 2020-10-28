<?php
require 'common.php';
if(!isset($_SESSION['t_id'])){header('location:index.php');}
?>

<?php

$ps_id = $_GET['id'];
$tem_id = $_SESSION['t_id'];


$insert_query = "insert into ps values('$tem_id','$ps_id')";
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
echo 'The Problem Statement assigned to you is :'.$ps_id;
session_unset();
session_destroy();
?>