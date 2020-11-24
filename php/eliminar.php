<?php 

    include("basedatos.php");

    $id= $_GET['id'];
    
    $objeto= new basedatos();
    $consulta="DELETE  FROM productos WHERE id ='$id'";
    $objeto->eliminar_datos($consulta);
    header("location:./../productos.php");


?>
  