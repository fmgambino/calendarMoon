<?php

include 'conect.php';

$text =$_POST['text'];
$titulo =$_POST['titulo'];
$id =$_POST['id'];

$foto = $_FILES['imagen'];
$tmp_name = $foto['tmp_name'];
$imgset = '';
if(!empty($tmp_name)) {
    $directorio_destino = "../imagenes";
    $img_file = $foto['name'];
    $img_type = $foto['type'];
    $destino = $directorio_destino . '/' .  $img_file;
    move_uploaded_file($tmp_name, $destino);
    $imgset = ", `imagen` = '$destino'";
}

            $consulta="UPDATE `topday` SET `text1`='$titulo',`text2`='$text'$imgset WHERE `id`='$id'";
            $resultadoFechaHoy = mysqli_query($DBConnection, $consulta);
            
            if ($resultadoFechaHoy){
                echo '<script language="javascript">alert("Modifica con successo");
    window.history.go(-1);
         </script>';
            }else{
                             echo '<script language="javascript">alert("Errore di modifica");
    window.history.go(-1);
         </script>';
            }
            
            ?>