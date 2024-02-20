<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Titulo = $_POST['Titulo'];
  $Descripción = $_POST['Descripción'];
  $query = "INSERT INTO tareas(Titulo, Descripción) VALUES ('$Titulo', '$Descripción')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea Guardada con Exito';
  $_SESSION['message_type'] = 'exito';
  header('Location: index.php');

}

?>