<?php
if(isset($_POST["btnActualizar"])){
    $idEquipo=$_POST["idEquipo"];
    $numOrden=$_POST["numOrden"];
    $fechaEmision=$_POST["fechaEmision"];

    $idMantCorrectivo=$_POST["id"];
    $diagnostico=$_POST["diagnostico"];
    $actividad=$_POST["actividad"];
    $nomTecnico=$_POST["nomTecnico"];
    $fechaInicio=$_POST["fechaInicio"];
    $fechaFinal=$_POST["fechaFinal"];
   
    $sql=$conexion->query("UPDATE mantcorrectivo set numOrden='$numOrden', diagnostico='$diagnostico', actividad='$actividad', fechaInicio='$fechaInicio', fechaFinal='$fechaFinal', nomTecnico='$nomTecnico', fechaEmision='$fechaEmision', idEquipo='$idEquipo' where idMantCorrectivo=$idMantCorrectivo");

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
                window.location.href="./lista_mant_correctivo.php";
            }
          });
          </script>';
        
    }else{
        echo '<div class="alert alert-danger">Error al registrar</div>';
    }
}

?>