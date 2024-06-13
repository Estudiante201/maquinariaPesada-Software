<?php
    include("./conexion.php");

    $idMantCorrectivo=$_GET["id"];

    $sql=$conexion->query("delete from mantcorrectivo where idMantCorrectivo=$idMantCorrectivo");
    
    if($sql==1){
      echo '<script language="javascript">
      window.location.href="../lista_mant_correctivo.php";
        </script>';
            
        
    }

?>