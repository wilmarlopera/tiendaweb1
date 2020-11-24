<?php

    include("basedatos.php");

    if (isset($_POST['btn'])){
        $name=$_POST['nombre'];
        $marca=$_POST['marca'];
        $precio=$_POST['precio'];
        $imagen=$_POST['imagen'];
        $descripcion=$_POST['descripcion'];

        $objetoBD=new basedatos();
        $consultasql="INSERT INTO productos(nombre,marca,precio,imagen,descripcion) VALUES('$name', '$marca',' $precio',' $imagen',' $descripcion')";
        $objetoBD->agregardatos($consultasql);
        header("location:./../index.html");

        
    }

?>
    