<?php
include("db.php");
$titulo = '';
$descripción= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tareas WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo = $row['titulo'];
    $descripción = $row['descripción'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo= $_POST['titulo'];
  $descripción = $_POST['descripción'];

  $query = "UPDATE tareas set titulo = '$titulo', descripción = '$descripción' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea Actualizada con Exito';
  $_SESSION['message_type'] = 'advertencia';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Actualizar Titulo">
        </div>
        <div class="form-group">
        <textarea name="descripción" class="form-control" cols="30" rows="10"><?php echo $descripción;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
