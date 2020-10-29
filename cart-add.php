<?php
require 'common.php';
if(!isset($_SESSION['t_id'])){header('location:index.php');}
?>

<?php

$ps_id = $_GET['id'];
$tem_id = $_SESSION['t_id'];


$insert_query = "insert into ps values('$tem_id','$ps_id')";
$enquire_query = "select * from ps where problem_stat = '$ps_id'";
$enquire_query_result = mysqli_query($con,$enquire_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($enquire_query_result);
if($total_rows_fetched>0){
    header('location : prob_stat.php');
}
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
echo '<h3>The Problem Statement assigned to you is :</h3>'.$ps_id;
session_unset();
session_destroy();
?>