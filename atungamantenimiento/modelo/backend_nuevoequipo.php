<?php
if(isset($_POST["btnguardar"])){
    if(empty($_POST["codigoEquipo"]) or empty($_POST["nombreEquipo"]) or empty($_POST["marca"]) or empty($_POST["modelo"]) or empty($_POST["serie"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
        $codigoEquipo=$_POST["codigoEquipo"];
        $nombreEquipo=$_POST["nombreEquipo"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $serie=$_POST["serie"];
        $sql=$conexion->query("insert into equipos(codigoEquipo,nombreEquipo,marca,modelo,serie) values('$codigoEquipo', '$nombreEquipo', '$marca', '$modelo', '$serie')");
        if($sql==1){
            //echo '<div class="success"> Equipo registrado correctamente</div>';
            echo '<script language="javascript">
            Swal.fire({
                icon: "success",
                title: "Datos guardados con exito",
                confirmButtonText: "OK",
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href="equipo.php";
                }
              });
              </script>';
            
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
        
    }
}

?>