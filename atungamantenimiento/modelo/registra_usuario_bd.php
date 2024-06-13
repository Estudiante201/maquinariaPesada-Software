<?php

if(!empty($_POST["btnguardar"])){
    if(empty($_POST["usuario"]) or empty($_POST["clave"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $privilegio=$_POST["privilegio"];
        $nombreCompleto=$_POST["nombre"];
        $sql=$conexion->query("insert into usuarios(usuario,clave,privilegio,nombreCompleto) values('$usuario', '$clave', '$privilegio', '$nombreCompleto')");
        if($sql==1){
            echo '<div class="success"> Usuario registrado correctamente</div>';
            
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
        
    }
}

?>