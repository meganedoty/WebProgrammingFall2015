<?php
    var_dump($_GET);
    var_dump($_POST);
    var_dump($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food: Log Edit</title>

    <!-- Bootstrap wtfhtmlcss dzone parse
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <div class="container">
      
       <div class='alert alert-info'>
              <button type="button" class=" close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <b>Offre special!</b> une crepe gratuite aujourd'hui!
        </div>
      
        <div class="page-header">
          <h1>Manger bien <small>enregistrer vos repas journalier</small></h1>
          <h6>tres important</h6>
        </div>
        <form class="form-horizontal" action="./" method="post">
          
            <div class='alert'style="display: none" id="myAlert">
              <button type="button" class=" close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3></h3>
            </div>
            
          <div class="form-group">
            <label for="txtName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtName" name="name" placeholder="Nom du repas">
            </div>
          </div>
          <div class="form-group">
            <label for="calories" class="col-sm-2 control-label">Kcal</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="txtCalories" name="calories" placeholder="Kcal se trouvaient dans ce repas">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtTime">Heure du repas</label>
            <div class="col-sm-10">
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span></div>
                  <input type="date" class="form-control" id="txtTime" name="txtTime" placeholder="Amount">
                  <div class="input-group-addon">.00</div>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Souvenir les crepes
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" id="wafflebutton">(sonnorie du four)</button>
            </div>
          </div>
        </form>
        <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar"  style="width: 0%">
                <span >0</span>% Waffles
              </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
    <script type="text/javascript">
      (function($) {
        $(function() {
          
          var $inputs = $("input");
          
          
          $("#wafflebutton").on('click', function(e){
            var self = this;
            //$('.progress-bar').css({width: '80%'});
           // $(self).prop("disabled", true);
            $(self).hide().after().html("On y va...");
            var per = 0;
            var interval = setInterval(function(){
              per += 10;
              $(".progress-bar").css("width", per + "%");
              $(".progress-bar span").text(per);
              if(per >= 100) {
                clearInterval(interval);
                
                if(!$("#txtTime").val()){
                  $inputs.css({ backgroundColor: "#FFAAAA" });
                  $(self).prop("disabled", false).html("Faites le de nouveau");  
                  $('#myAlert').addClass('alert-danger').show().find('h3').html('Tant pis, vous en avez manque. Il vaut toujours le coup !');
                  toastr.error("Tant pis, vous en avez manque. Il vaut toujours le coup !");
                  console.log("self");
                } else {
                  //display success
                  //$("form").preprend("<div class='alert alert-success'>Congrats on the waffle</div>");
                  $('#myAlert').removeClass('alert-danger').addClass('alert-success').show().find('h3').html("Vous l\'avez fait ! Tres bien, bravo.");
                  $inputs.css({ backgroundColor: "#AAFFAA" });
                  toastr.success("Vous l\'avez fait ! Tres bien, bravo.");
                  console.log("self");
                }
                console.error("this line should never be reached")
              }
            }, 200);
            return false;
          })
          $(".close").on('click', function(e) {
            var self="this";
            $('.alert').closest(".alert").slideUp();
          });
          $("input[type='number']").spinner();
          $("input[type='date']").datepicker();
        });
      })(jQuery);
    </script>
  </body>
</html>