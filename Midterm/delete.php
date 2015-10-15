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
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Waffle? Waffle! <small>Remember every waffle</small></h1>
                <h6>Delete mode :(</h6>
            </div>
            
            <form class="form-horizontal" action="" method="post">
                <div class="alert alert-danger" id="myAlert">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>You're sure that you'd like to deleate <?=$meal['Name']?>?</h3>
                    <input type="submit" calue="delete" class="btn btn-danger" />
                    <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
                </div>
            </form>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>