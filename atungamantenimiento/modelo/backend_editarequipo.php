<?php
if(isset($_POST["btnActualizar"])){
    
    $idEquipo=$_POST['id'];
    $codigoEquipo=$_POST["codigoEquipo"];
    $nombreEquipo=$_POST["nombreEquipo"];
    $marca=$_POST["marca"];
    $modelo=$_POST["modelo"];
    $serie=$_POST["serie"];

    $sql=$conexion->query("UPDATE equipos set codigoEquipo='$codigoEquipo', nombreEquipo='$nombreEquipo', marca='$marca', modelo='$modelo', serie='$serie' where idEquipo='$idEquipo'");
    
    if($sql==1){
            //echo '<div class="success"> Equipo registrado correctamente</div>';
            echo '<script language="javascript">
            Swal.fire({
                icon: "success",
                title: "Actualizado con exito",
                confirmButtonText: "OK",
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href="lista_equipo.php";
                }
              });
              </script>';
            
        
    }
}

?>