<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea Guardada con Exito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>