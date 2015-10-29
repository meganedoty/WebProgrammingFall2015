<?php
    my_print($model);
    ?>
    
    <a href="?action=edit" class="btn btn-success">
              <i class="glyphicon glyphicon-thumbs-up"></i>
              Nouvelle Entrée</a>
            <a href="delete.php" class="btn btn-danger">
              <i class="glyphicon glyphicon-thumbs-down"></i>
              Tout Supprimer <span class="badge"><?=count($model)?></span></a>
    
<table class="table table-striped">
    <thead>
        <tr>
            <th>Actions</th>
            <th>Name</th>
            <th>Birthday</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $row): ?>
        <tr>
            <th scope="row">
                <div class="btn-group" role="group" aria-label="...">
                  <a href="" title="View" class="btn-xs btn-default"><i class="glyphicon glyphicon-thumbs-down"></i></a>
                  <a href="?action=edit&id<?=$row['id']?>" title="Edit" class="btn-xs btn-default"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="?action=delete&id=<?=$row['id']?>" title="Delete" class="btn-xs btn-default"><i class="glyphicon glyphicon-fire"></i></a>
             </th>
            <td><?=$row['Name']?></td>
            <td><?=$row['Birthday']?></td>
        </tr>    
        <?php endforeach; ?>
    </tbody>
</table>