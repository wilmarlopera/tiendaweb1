<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="css/productos.css">
</head>
<body>
    <?php 
        include("php/basedatos.php");

        $objetoBD=new basedatos();
        $consultasql="SELECT * FROM  productos WHERE 1 ";
        $resultado=$objetoBD->consultar_datos($consultasql);

    ?> 
    <div class="cont">
        <nav>
            <h1>tienda de laura</h1>
            <a href="index.html">registro</a>
            <a href="productos.php">productos</a>
        </nav>
        <div class="mar">
            <?php foreach($resultado as $resultados): ?>
                <div class="cubo">
                    <img src="<?php echo $resultados['imagen']; ?>" alt="imagen producto">
                    <p><?php  echo $resultados['nombre'];?></p>
                    <p><?php  echo $resultados['marca'];?></p>
                    <p><?php  echo $resultados['precio'];?></p>
                    <p><?php  echo $resultados['descripcion'];?></p>
                    <div class="btns">
                        <a class="b" onclick="mostrar()">editar</a>
                        <a class="r" href="php/eliminar.php?id=<?php  echo $resultados['id'];?>">eliminar</a>
                    </div>
                </div>
                <div id="Modal">
                    <form action="php/editar.php?id=<?php echo $resultados['id']; ?>"method="POST">
                        <span onclick="ocultar()">&times;</span>
                        <h2>editar datos</h2>
                        <input type="text" name="nombre" value="<?php  echo $resultados['nombre'];?>">
                        <input type="text" name="marca" value="<?php  echo $resultados['marca'];?>">
                        <input type="text" name="precio"value="<?php  echo $resultados['precio'];?>">
                        <input type="text" name="descripcion"value ="<?php  echo $resultados['descripcion'];?>">
                        <input type="submit" name="btnedit" value="enviar">
                        
                    </form>
                </div>
            <?php endforeach  ?>

               
        </div>
        <footer>
            <p>derechos reservados &copy;</p>
        </footer>
    </div>
</body>
</html>

<script>
    function mostrar(){
       document.getElementById('Modal').style.display='block';
    }
    function ocultar(){
       document.getElementById('Modal').style.display='none';
    }
</script>