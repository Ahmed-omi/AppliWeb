<?php
require 'db.php';
$sql = 'SELECT * FROM membres';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Clients</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Nom</th>
          <th>mail</th>
          <th>Delete</th>
          <th>Action</th>
          <th>Create</th>

        </tr>

      <?php
      include "clients.php";

        foreach($clients as $key => $value){
          echo
          "<tr>
          <td>". $clients[$key]['id']. "</td>
          <td>". $clients[$key]['date']. "</td>
          <td>". $clients[$key]['nom']. "</td>
          <td>". $clients[$key]['mail']. "</td>

          <td> <a href=\"delete.php?id= ". $clients[$key]['id'] ." \">Suprimer</a> </td>
          <td> <a href=\"edit.php?id= ". $clients[$key]['id'] ." \">Edit</a> </td>
          <td> <a href=\"inscription.php?id= ". $clients[$key]['id'] ." \">Create</a> </td>

          </tr>";

        };
      ?>
    </table>
  </div>
</div>
</div>
<a href=\"espace-membre.php". $clients[$key]['id'] ." \">Member Area</a>
<?php require 'footer.php'; ?>
