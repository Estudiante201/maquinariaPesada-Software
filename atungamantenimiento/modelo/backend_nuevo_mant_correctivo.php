<?php
if(isset($_POST["btnguardar"])){
    $idEquipo=$_POST["idEquipo"];
    $numOrden=$_POST["numOrden"];
    $fechaEmision=$_POST["fechaEmision"];
    //$nomCliente=$_POST['nomCliente'];
    $diagnostico=$_POST["diagnostico"];
    $actividad=$_POST["actividad"];
    $nomTecnico=$_POST["nomTecnico"];
    $fechaInicio=$_POST["fechaInicio"];
    $fechaFinal=$_POST["fechaFinal"];

    $sql=$conexion->query("insert into mantcorrectivo(numOrden, diagnostico, actividad, fechaInicio, fechaFinal, 
    nomTecnico, fechaEmision, idEquipo) values('$numOrden', '$diagnostico', '$actividad', '$fechaInicio', '$fechaFinal', '$nomTecnico', '$fechaEmision', $idEquipo)");
    
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
                window.location.href="./manten_correctivo.php";
            }
          });
          </script>';
        
    }else{
        echo '<div class="alert alert-danger">Error al registrar</div>';
    }
}

?>