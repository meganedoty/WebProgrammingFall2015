<h1>Manger bien <small>enregistrer vos repas journalier</small></h1>
        <h2><?=$message?></h2>
        <div class="panel panel-success">
            <div class="panel-heading">Votre data</div>
            <div class="pannel-body">
                <dl class="dl-horizontal">
                    <dt>Nom</dt>
                    <dd><?=$person['Name']?></dd>
                    <dt>Age</dt>
                    <dd><?=$person['Age']?></dd>
                    <dt>But Calorique</dt>
                    <dd><?=$person['CalorieGoal']?></dd>
                    <dt>Consommation d'Aujourd'hui</dt>
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
              Nouvelle Entrée</a>
            <a href="delete.php" class="btn btn-danger">
              <i class="glyphicon glyphicon-thumbs-down"></i>
              Tout Supprimer <span class="badge"><?=count($food)?></span></a>
            
            <table class="table table-condensed table-striped table-hover">
              <caption>Ce que vous avez mangé jusqu'ici aujourd'hui.</caption>
             <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Heure</th>
                  <th>Calories</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn-xs btn-default"><i class="glyphicon glyphicon-thumbs-down"></i></a>
                      <a href="edit.php?id<?=$i?>" title="Edit" class="btn-xs btn-default"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn-xs btn-default"><i class="glyphicon glyphicon-fire"></i></a>
                  </th>
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