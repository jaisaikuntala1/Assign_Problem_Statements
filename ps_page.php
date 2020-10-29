
<?php
require 'common.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $team_id = mysqli_real_escape_string($con, $_POST['team_id']);
        $_SESSION['t_id'] = $team_id;
        $select_query = "select * from ps where team_id = '$team_id'";
        $result = mysqli_query($con,$select_query) or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        $total_rows_fetched = mysqli_num_rows($result);
        if($total_rows_fetched >0){
            echo '<h2>This team has already opted their problem statement.</h2>';
            session_unset();
            session_destroy();
        }
        else{
           header("Location:prob_stat.php");
            
            
        }
        ?>
    </body>
</html>
