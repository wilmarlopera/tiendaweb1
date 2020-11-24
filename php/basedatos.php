<?php
    
    class basedatos{
        public $usuario = "root";
        public $password = "";


        function __construct(){

        }

        function conectar(){
            try{
                $datos="mysql:host=localhost;dbname=productos";
                $conectar=new PDO($datos,$this->usuario,$this->password);
                return($conectar);

            }
            catch(PDOexeption $error){
                echo ($error->getMessage());
            }
        }

        function agregarDatos($consultasql){
            $conectar=$this->conectar();
            $agregar=$conectar->prepare($consultasql);
            $resultado=$agregar->execute();

            if($resultado ){
                echo ("datos agregados");
                
            }
            else{
                echo ("error sin datos");
            }
        }

        function consultar_datos($consultasql){
            $conectar=$this->conectar();
            $consulta=$conectar->prepare($consultasql);
            $consulta->setfetchMode(PDO::FETCH_ASSOC);
            $resultado=$consulta->execute();

            return($consulta->fetchALL());
        }

        function eliminar_datos($consultasql){
            $conectar=$this->conectar();
            $eliminar=$conectar->prepare($consultasql);
            $resultado=$eliminar->execute();

            if ($resultado){
                echo ("datos eliminados");
            }

            else {
                echo ("datos no se eliminaron");

            }
        }
        
        function editar_datos($consulta_sql){
            $conectar=$this->conectar();
            $editar=$conectar->prepare($consulta_sql);
            $resultado=$editar->execute();

            if ($resultado){
                echo ("datos actualizados");
            }

            else {
                echo ("datos no se actualizaron");
                

            }  
        }
    }
?>
