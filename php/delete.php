<?php       
    session_start();
    include 'conect.php';
    $Conexion = $DBConnection ;
    $id = $_GET["id"];
    $tabla = $_GET["tabla"];
    Eliminar($id , $Conexion , $tabla);
    function  Eliminar($id , $Conexion ,  $tabla) {        
        $delete  = "DELETE FROM ".$tabla." WHERE id=".$id."";        
        if(mysqli_query($Conexion,$delete)) {
           echo '<script>console.log("OBJETO ELIMINADO")</script> ';
        }  
        else{
           echo '<script>console.log("OBJETO NO ELIMINADO")</script> ';
        }
    }
    mysqli_close($Conexion);
    switch ($tabla) {
        case 'topday' : echo '<script>location.href="../php/modificarTopday.php"</script>'; break;
        case 'glosario' : echo '<script>location.href="../php/modificarGosario.php"</script>'; break;
        case 'datos' : echo '<script>location.href="../php/welcomeAdmin.php"</script>';break;
    }
    
?>
