<?php
session_start();
  $waffle = $_SESSION['waffle'];
  if(!$waffle){
    $_SESSION['waffle'] = $waffle = array(
      array( 'Batter' => 'Buttermilk', 'Toppings' => 'Maple Syrup', 'Time' => strtotime("one hour ago"), Quantity => 3 ),
      array( 'Batter' => 'Multigrain', 'Toppings' => 'Chocolate Chips', 'Time' => strtotime("now"), Quantity => 2),
      array( 'Batter' => 'Chocolate', 'Toppings' => 'Whipped Cream', 'Time' => strtotime("now + 2 hours"), Quantity => 6),
      array( 'Batter' => 'Blueberry', 'Toppings' => 'Ice Cream', 'Time' => strtotime("11pm"), Quantity => 2),
      );
  }
  
  $total = 0;
  foreach ($waffle as $meal) {
   $total += $meal['Quantity'];
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <h1>Waffle Tracker</h1>
        
        <div class="row">
            <div class="col-md-8 col-xs-10">
                <a href="edit.php" class="btn btn-success">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    Add waffle consumption
                </a>
            </div><!-- col 8 -->
            
            <table class="table table-condensed table-striped table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>Batter</th>
                  <th>Toppings</th>
                  <th>Time</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($waffle as $i => $meal): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn-xs btn-default"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn-xs btn-default"><i class="glyphicon glyphicon-fire"></i></a>
                    </div>
                  </th>
                  <td><?=$meal['Batter']?></td>
                  <td><?=$meal['Toppings']?></td>
                  <td><?=date("M d Y h:i:sa", $meal['Time'])?></td>
                  <td><?=$meal['Quantity']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div> <!-- row -->
      </div> <!-- container -->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>