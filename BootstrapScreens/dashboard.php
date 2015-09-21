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
    <nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Encorps</a>
        </div>
      
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Databases <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Food</a></li>
              <li><a href="#">Exercise</a></li>
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
      <h3>Hello! Welcome to your dashboard.</h3>
      
      <div class="col-sm-8">
        <div class="alert alert-warning" role="alert">
          <a href="#" class="alert-link">You're doing great! Keep in mind you still haven't hit your intake for today.</a>
        </div>
        <h4>Food</h4>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for food...">
          <span class="input-group-btn">
            <button class="btn btn-default">Go!</button>
          </span>
        </div>
        <h5>Breakfast</h5>
        <ul class="list-group">
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
        </ul>
        <h5>Lunch</h5>
        <ul class="list-group">
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
        </ul>
        <h5>Dinner</h5>
        <ul class="list-group">
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
          <li class="list-group-item">Food</li>
        </ul>
        <h5>Snacks</h5>
        <ul class="list-group">
          <li class="list-group-item">Food</li>
        </ul>
      </div><!-- col-sm-8-->
      
      
      <div class="col-sm-4">
        <h4>Since signing up:</h4>
        <ul class="list-group">
          <li class="list-group-item"><span class="badge">23</span><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Days tracked</li>
          <li class="list-group-item"><span class="badge">72</span><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Miles jogged</li>
          <li class="list-group-item"><span class="badge">167</span><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Cups of water consummed</li>
        </ul>
      </div><!-- col-sm-4-->
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>