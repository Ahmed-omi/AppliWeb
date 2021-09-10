
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM membres WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if ( isset($_POST['name']) && isset($_POST['email']) ) {
  $nom = $_POST['name'];
  $mail = $_POST['email'];
  $sql = 'UPDATE membres SET nom=:nom, mail=:mail WHERE id=:id';
  $statement = $connection->prepare($sql);

	if($statement->execute([':nom' => $nom, ':mail' => $mail, ':id' => $id])){
    header("Location:curd.php");
  }

}


 ?>

<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">

        <div class="form-group">
          <label for="name">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">mail</label>
          <input type="email" value="<?= $person->mail; ?>" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
