<!DOCTYPE html>

<?php
require 'common.php';
if(!isset($_SESSION['t_id'])){header('location:index.php');}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Select a problem statement</title>
    </head>
    <body>
        
        <?php
 
    include 'check_if_added.php';
    ?>
      <br><br><br>
        <div class="container">
          <div class="col-xs-12">
              <table class="table table-striped table-borders table-hover table-responsive">
                  <tbody>
                      <tr><th>Problem Statement Number</th><th>Select</th></tr>
                      
                      <tr><td>Problem Statement 1</td><td><?php
                             
                                  if(check_if_added_to_cart(1)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 2</td><td><?php
                             
                                  if(check_if_added_to_cart(2)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 3</td><td><?php
                             
                                  if(check_if_added_to_cart(3)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 4</td><td><?php
                             
                                  if(check_if_added_to_cart(4)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 5</td><td><?php
                             
                                  if(check_if_added_to_cart(5)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 6</td><td><?php
                             
                                  if(check_if_added_to_cart(6)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 7</td><td><?php
                             
                                  if(check_if_added_to_cart(7)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 8</td><td><?php
                             
                                  if(check_if_added_to_cart(8)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 9</td><td><?php
                             
                                  if(check_if_added_to_cart(9)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 10</td><td><?php
                             
                                  if(check_if_added_to_cart(10)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 11</td><td><?php
                             
                                  if(check_if_added_to_cart(11)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 12</td><td><?php
                             
                                  if(check_if_added_to_cart(12)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 13</td><td><?php
                             
                                  if(check_if_added_to_cart(13)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 14</td><td><?php
                             
                                  if(check_if_added_to_cart(14)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 15</td><td><?php
                             
                                  if(check_if_added_to_cart(15)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 16</td><td><?php
                             
                                  if(check_if_added_to_cart(16)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 17</td><td><?php
                             
                                  if(check_if_added_to_cart(17)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 18</td><td><?php
                             
                                  if(check_if_added_to_cart(18)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 19</td><td><?php
                             
                                  if(check_if_added_to_cart(19)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 20</td><td><?php
                             
                                  if(check_if_added_to_cart(20)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 21</td><td><?php
                             
                                  if(check_if_added_to_cart(21)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 22</td><td><?php
                             
                                  if(check_if_added_to_cart(22)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 23</td><td><?php
                             
                                  if(check_if_added_to_cart(23)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 24</td><td><?php
                             
                                  if(check_if_added_to_cart(24)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 25</td><td><?php
                             
                                  if(check_if_added_to_cart(25)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 26</td><td><?php
                             
                                  if(check_if_added_to_cart(26)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 27</td><td><?php
                             
                                  if(check_if_added_to_cart(27)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 28</td><td><?php
                             
                                  if(check_if_added_to_cart(28)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 29</td><td><?php
                             
                                  if(check_if_added_to_cart(29)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 30</td><td><?php
                             
                                  if(check_if_added_to_cart(30)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 31</td><td><?php
                             
                                  if(check_if_added_to_cart(31)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=31" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 32</td><td><?php
                             
                                  if(check_if_added_to_cart(32)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 33</td><td><?php
                             
                                  if(check_if_added_to_cart(33)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 34</td><td><?php
                             
                                  if(check_if_added_to_cart(34)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>
                      <tr><td>Problem Statement 35</td><td><?php
                             
                                  if(check_if_added_to_cart(35)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>PS already taken!</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              
                              ?></td></tr>

                          
                      
                  </tbody>
              </table>
              
          </div>
      </div>
        
        
           
    </body>
</html>