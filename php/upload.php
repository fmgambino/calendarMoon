<?php

include 'conect.php';     


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$foto = $_FILES['foto'];
$fechaHoy =$_POST['fechaHoy'];
$text1 =$_POST['text1'];
$text2 =$_POST['text2'];
$tetx3 =$_POST['text3'];
$titulo =$_POST['titulo'];

if($fechaHoy){

    $insertar="INSERT INTO `datos`(`fechaHoy`, `text1`, `text2`, `text3`, `titulo`) VALUES ('$fechaHoy','$text1','$text2','$tetx3','$titulo')";
    $resultado=mysqli_query($DBConnection,$insertar);
    
         
 }else{
    echo '<script language="javascript">alert("Errore registrare");
    window.history.go(-1);
    </script>';
 }
 
 


$tmp_name = $foto['tmp_name'];
$directorio_destino = "../imagenes";
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];
       
        
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
           
            $destino = $directorio_destino . '/' .  $img_file;
            
            $consulta= "UPDATE `datos` SET `imagen`='$destino' WHERE `fechaHoy`='$fechaHoy';";
            $consulta1=mysqli_query($DBConnection,$consulta);
            
            if ($consulta1)
            {
                move_uploaded_file($tmp_name, $destino);

                echo '<script language="javascript">alert("Registrato con successo");
    window.location.href = "welcomeAdmin.php";;
         </script>';

                return true;
                mysqli_close($DBConnection);

            }
        }
    
    //Si llegamos hasta aquí es que algo ha fallado
    return false;














