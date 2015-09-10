<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <h1>Hello, Pawnee!</h1>
        
        <div class="row">
          <div class="col-md-8 col-xs-10">
            <a href="#" class="btn btn-success">
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
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Brendanowitz</td>
                  <td>@mbr</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Leslie</td>
                  <td>Knope</td>
                  <td>@recallknope_dont</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ann</td>
                  <td>Perkins</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="col-md-4 col-xs-2">
              <span class="label label-success">Success</span>
              <span class="label label-info">Info</span>
              <span class="label label-warning">Warning</span>
          </div>
          <div class="col-md-4 col-xs-10">
              <div class="alert alert-success" role="alert">To discourage you by telling. The real goal of any talk or speech.</div>
              <div class="alert alert-danger" role="alert">Principle to work to make more money while having more fun. Unlucky people.</div>
              
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                  <span>75% Amazing</span>
                </div>
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
      
      
     //setTimeout(someName, 100);
    </script>
  </body>
</html>