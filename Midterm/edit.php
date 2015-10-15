<?php
session_start();
    $waffle = $_SESSION['waffle'];
    if($_POST){
        if(isset($_GET['id'])){
            $waffle[$_GET['id']] = $_POST;
        } else {
            $waffle = $_POST;
        }
        $waffle[] = $_POST;
        $_SESSION['waffle'] = $waffle;
        header('Location: ./');
    }
    
    if($_GET['id']){
        $meal = $waffle[$_GET['id']];
    } else {
        $meal = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Waffle: Log Edit</title>

    <!-- Bootstrap wtfhtmlcss dzone parse
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Waffle? Waffle! <small>Remember every waffle</small></h1>
                <h6>Edit mode</h6>
            </div>
            
            <form class="form-horizontal" action="" method="post">
                <div class="alert" style="display: none" id="myAlert">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3></h3>
                </div>
                
                <div class="form-group">
                    <label for="txtBatter" class="col-sm-2 control-label">Batter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtBatter" name="batter" placeholder="Type of batter" value="<?=$meal['Batter']?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="txtToppings" class="col-sm-2 control-label">Toppings</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtToppings" name="toppings" placeholder="Toppings used" value="<?=$meal['Toppings']?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="txtDate" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="txtTime" name="txtTime" placeholder="Date" value="<?=$meal['Time']?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="txtQuantity" name="quantity" placeholder="Number of waffles eaten" value="<?=$meal['Quantity']?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success" id="wafflebutton">Boop!</button>
                    </div>
                </div>
            </form>
        </div><!--container-->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>