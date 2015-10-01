<?php 
    $name = 'Agent Dale Cooper';
    $message = "Welcome, $name";
    
    $person = array('Name' => $name, 'Age' => 32, CalorieGoal => 2000);
    
    $food = array(
        array( 'Name' => 'Breakfast', 'Time' => strtotime("one hour ago"), Calories => 400 ),
        array( 'Name' => 'Lunch', 'Time' => strtotime("now"), Calories => 400 ),
        array( 'Name' => 'Dinner', 'Time' => strtotime("now + 1 hour"), Calories => 400 ),
        array( 'Name' => 'Snack', 'Time' => strtotime("6pm"), Calories => 400 )
        );
        
    $food[] = $_REQUEST;
    
        $total = 0;
        foreach ($food as $meal) {
            $total += $meal['Calories'];
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
        <h1>Hello, Twin Peaks!</h1>
        <h2><?=$message?></h2>
        <div class="panel panel-success">
            <div class="panel-heading">Your data</div>
            <div class="pannel-body">
                <dl class="dl-horizontal">
                    <dt>Name</dt>
                    <dd><?=$person['Name']?></dd>
                    <dt>Age</dt>
                    <dd><?=$person['Age']?></dd>
                    <dt>Calorie goal</dt>
                    <dd><?=$person['CalorieGoal']?></dd>
                    <dt>Today's Intake</dt>
                    <dd><?=$total?></dd>
                </dl>
            </div>
        </div>
        <pre>
            <?php var_dump($person); ?>
        </pre>
        
        <div class="row">
          <div class="col-md-8 col-xs-10">
            <a href="edit.php" class="btn btn-success">
              <i class="glyphicon glyphicon-thumbs-up"></i>
              New Record</a>
            <a href="#" class="btn btn-danger">
              <i class="glyphicon glyphicon-thumbs-down"></i>
              Delete All <span class="badge">4</span></a>
            
            <table class="table table-condensed table-striped table-hover">
              <caption>Optional table caption.</caption>
             <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Time</th>
                  <th>Callories</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td><?=$meal['Name']?></td>
                  <td><?=date("M d Y h:i:sa", $meal['Time'])?></td>
                  <td><?=$meal['Calories']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          
          <div class="col-md-4 col-xs-2">
       
          </div>
          <div class="col-md-4 col-xs-10">
              <div class="alert alert-success" role="alert">To discourage you by telling. The real goal of any talk or speech.</div>
              <div class="alert alert-danger" role="alert">Principle to work to make more money while having more fun. Unlucky people.</div>
              
              
              </div>
          </div>
        </div>
    
 
    
    </div><!--container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        (function() {
          
          $(".progress-bar").animate({width: "75%"})
          
          var someName = function() {
            var intendedWidth = $('.progress-bar').width() * .75;
            $('.progress-bar').animate({width: intendedWidth}, 2000);
          }
          
          var myObject = {
            hello: "world",
            intendedWidth: $('progress-bar').width() * .75
          }; //object
          
          someName();
          
          })()
        //last parentheses run function immediately
      //without var a function will become global
      
     //setTimeout(someName, 100);
    </script>
  </body>
</html>