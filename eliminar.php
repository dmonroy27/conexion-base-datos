<?php
      include 'conexion.php';

    $id = $_REQUEST['Id'];
    $sql = "DELETE FROM libros WHERE id='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:mostar.php");
    }

?>