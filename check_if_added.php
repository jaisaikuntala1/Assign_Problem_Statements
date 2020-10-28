<?php

function check_if_added_to_cart($item_id)
{
   
    $con = mysqli_connect('remotemysql.com','mVi7q2eMp4','EBhy6Qld9F','mVi7q2eMp4')or die(mysqli_error($con));
    $select_query = "select * from ps where problem_stat = '$item_id'";
    $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
    
    if($total_rows_fetched >=1){
        return 1;
    }
    else{
        return 0;
    }
    
 
}

?>