<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Encorps | Food & fitness tracker</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-center"> 
        <h1 class="text-uppercase">Encorps</h1>
        <h2>World's simplest food and fitness tracker.</h2>
        
        <div id="signupform" class="text-center">
          <div class="input-group">
            <input type="text" class="form-control input-lg center" id="usernameInput" placeholder="Username">
          </div>
          <div class="input-group">
            <input type="email" class="form-control input-lg" id="emailInput" placeholder="Email">
          </div>
          <div class="input-group">
            <input type="password" class="form-control input-lg" id="passwordInput" placeholder="Password">
          </div>
        </div><!-- signupform -->
        
        <button type="button" class="btn btn-primary">Sign Up Now</button>
        <p><a href="#">I already have an account!</a></p>
        </div><!-- container-->
    </div><!--jumbotron-->
    
    <div class="container text-center">
      <h3>Great features. Great design.</h3>
      
      <div class="col-sm-4" id="appfeatures">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        <h4>Food logging</h4>
        <p>Keep track of what you eat and when you eat it. See energy consumption throughout the day.</p>
      </div>
      
      <div class="col-sm-4">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        <h4>Nutrition breakdown</h4>
        <p>It's not only about how much you consume, but the quality of nutrients you're getting.</p>
      </div>
      
      <div class="col-sm-4">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        <h4>Daily Requirements</h4>
        <p>Make sure you're meeting energy requirements, track fruits and veggies, as well as water consumption.</p>
      </div>
      
    </div><!--appfeatures-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($) {
        $(function() {
          $("#signupform").hide(); 
          
          $("button").on('click', function(e){
            var self="this";
            $("#signupform").slideToggle();
          });
        });
      })(jQuery);
    </script>
  </body>
</html>