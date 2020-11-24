<?php 
    include("basedatos.php");

    if (isset($_POST['btnedit'])){
        $id=$_GET['id'];
        $name=$_POST['nombre'];
        $marca=$_POST['marca'];
        $precio=$_POST['precio'];
        $descripcion=$_POST['descripcion'];

        $objeto=new basedatos();
        $consulta="UPDATE productos SET nombre='$name', marca='$marca', precio='$precio', descripcion='$descripcion' WHERE id='$id'";
        $objeto->editar_datos($consulta);
        
        
        header("location:./../productos.php");
    }
?>
