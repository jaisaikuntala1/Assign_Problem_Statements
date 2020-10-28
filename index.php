<!DOCTYPE html>

<?php
    require 'common.php';
    if (isset($_SESSION['t_id'])) {   header('location: ps_page.php'); } 
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enter team ID</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <h1>Enter your team ID</h1>
                    <form method="POST" action="ps_page.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="team_id" placeholder="Enter team ID">
                        </div>
                        

                        <input href = 'ps_page.php' type="submit" class="btn btn-primary btn-block" value="Submit">
                        
                    </form>
                    
                    
                    
                    <br><br><br><br>
                    
                    
                    
                    
                </div>
             
            </div>
        </div>
        
           <div class="container-fluid">
                    <div class="row">
                        <div class="jumbotron">
                        <h3>Enter your team ID in order to select your problem statement!</h3>
                    </div>
                    
                    </div>
                </div>
    </body>
</html>