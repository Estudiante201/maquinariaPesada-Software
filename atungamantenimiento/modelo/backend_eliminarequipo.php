<?php
    include("./conexion.php");

    $idEquipo=$_GET["id"];

    $sql=$conexion->query("delete from equipos where idEquipo=$idEquipo");
    
    if($sql==1){
      echo '<script language="javascript">
      window.location.href="../lista_equipo.php";
        </script>';
            
        
    }

?>