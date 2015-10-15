<?php
session_start();
  $food = $_SESSION['food'];
  if($_POST){
    unset($food[$_POST['id']]);
    $_SESSION['food'] = $food;
    header('Location: ./');
  }
  
  $meal = $food[$_REQUEST['id']];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food: Log Delete</title>

    <!-- Bootstrap wtfhtmlcss dzone parse
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <div class="container">
      
        <div class="page-header">
          <h1>Manger bien <small>supprimer un repas</small></h1>
          <h6>tres important</h6>
        </div>
        <form class="form-horizontal" action="" method="post">
          
            <div class='alert alert-danger' id="myAlert">
              <button type="button" class=" close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h3>Vous etes sur que vous voudriez supprimer <?=$meal['Name']?>?</h3>
              <input type="submit" value="delete" class="btn btn-danger" />
              <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
    <script type="text/javascript">
      (function($) {
        $(function() {
          
          
        });
      })(jQuery);
    </script>
  </body>
</html>