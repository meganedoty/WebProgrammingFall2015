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
  };
  
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
    
      <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">The Waffle</a>
          </div>
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Databases <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Batters</a></li>
                <li><a href="#">Toppings</a></li>
              </ul>
            </li>
          </ul>
          
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log out</a></li>
              </ul>
            </li>
          </ul>
          </div><!-- container fluid -->
        </div>
      </nav>
    
      <div class="container">
        <h1>Waffle Tracker</h1>
        
        <div class="row">
            <div class="col-md-8 col-xs-10">
                <a href="edit.php" class="btn btn-success">
                    <i class="glyphicon glyphicon-thumbs-up"></i>
                    Add waffle consumption
                </a>
                
                <a href="delete.php" class="btn btn-danger">
                  <i class="glyphicon glyphicon-thumbs-down"></i>
                  Delete All <span class="badge"><?=count($waffle)?></span>
                </a>
            <!--</div><!-- col 8 -->
            
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
        
        <div class="col-md-4 col-xs-2">
          <div class="alert alert-success" role="alert">If you believe enough, you can eat all the waffles</div>
          <div class="panel panel-default">
            <div class="panel-heading">Stay hydrated while eating waffles</div>
            <div class="panel-body text-center">
              <div class="row">
                <a href="#" class="btn btn-success" id="wateradd">+</a>
                <a href="#" class="btn btn-danger" id="waterdelete">-</a>
              </div>
              Cups of water: <span>0</span>
            </div>
          </div>
        </div>
      </div> <!-- container -->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function() {
        var i = 0;
        $('#watteradd').on('click', function(e){
          var self = this;
          i = i++;
          $("span").text("i");
        });
        $('#waterdelete').on('click', function(e){
          var self="this";
          i = i--;
          $(".row span").text("i");
        })
      })
    </script>
    </body>
  </html>