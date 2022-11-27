
<?php

include 'conect.php';     


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$foto = $_FILES['foto'];
$foto1 = $_FILES['foto1'];
$foto2 = $_FILES['foto2'];
$foto3 = $_FILES['foto3'];
$foto4 = $_FILES['foto4'];
$foto5 = $_FILES['foto5'];
$foto6 = $_FILES['foto6'];
$foto7 = $_FILES['foto7'];
$fechaHoy1 =$_POST['fechaHoy'];
$fechaHoy = date("d-m-Y", strtotime($fechaHoy1));
$text1 =$_POST['text1'];
$text2 =$_POST['text2'];
$text3 =$_POST['text3'];
$text4 =$_POST['text4'];
$text5 =$_POST['text5'];
$text6 =$_POST['text6'];
$text7 =$_POST['text7'];
$text8 =$_POST['text8'];
$titulo =$_POST['titulo'];
$titulo1 =$_POST['titulo1'];
$titulo2 =$_POST['titulo2'];
$titulo3 =$_POST['titulo3'];
$titulo4 =$_POST['titulo4'];
$titulo5 =$_POST['titulo5'];
$titulo6 =$_POST['titulo6'];
$titulo7 =$_POST['titulo7'];


if($fechaHoy){
if($fechaHoy){

    $tmp_name = $foto['tmp_name'];
    if(!empty($tmp_name)) {
        $directorio_destino = "../imagenes";
        $img_file = $foto['name'];
        $img_type = $foto['type'];
        $destino = $directorio_destino . '/' .  $img_file;
        move_uploaded_file($tmp_name, $destino);
    }
            
    $tmp_name1 = $foto1['tmp_name'];
    if(!empty($tmp_name1)) {
        $directorio_destino1 = "../imagenes";
        $img_file1 = $foto1['name'];
        $img_type1 = $foto1['type'];
        $destino1 = $directorio_destino1 . '/' .  $img_file1;
        move_uploaded_file($tmp_name1, $destino1);
    }

    $tmp_name2 = $foto2['tmp_name'];
    if(!empty($tmp_name2)) {
        $directorio_destino2 = "../imagenes";
        $img_file2 = $foto2['name'];
        $img_type2 = $foto2['type'];
        $destino2 = $directorio_destino2 . '/' .  $img_file2;
        move_uploaded_file($tmp_name2, $destino2);
    }
            
    $tmp_name3 = $foto3['tmp_name'];
    if(!empty($tmp_name3)) {
        $directorio_destino3 = "../imagenes";
        $img_file3 = $foto3['name'];
        $img_type3 = $foto3['type'];
        $destino3 = $directorio_destino3 . '/' .  $img_file3;
        move_uploaded_file($tmp_name3, $destino3);
    }
            
    $tmp_name4 = $foto4['tmp_name'];
    if(!empty($tmp_name4)) {
        $directorio_destino4 = "../imagenes";
        $img_file4 = $foto4['name'];
        $img_type4 = $foto4['type'];
        $destino4 = $directorio_destino4 . '/' .  $img_file4;
        move_uploaded_file($tmp_name4, $destino4);
    }
            
            
    $tmp_name5 = $foto5['tmp_name'];
    if(!empty($tmp_name5)) {
        $directorio_destino5 = "../imagenes";
        $img_file5 = $foto5['name'];
        $img_type5 = $foto5['type'];
        $destino5 = $directorio_destino5 . '/' .  $img_file5;
        move_uploaded_file($tmp_name5, $destino5);
    }
            
    $tmp_name6 = $foto6['tmp_name'];
    if(!empty($tmp_name6)) {
        $directorio_destino6 = "../imagenes";
        $img_file6 = $foto6['name'];
        $img_type6 = $foto6['type'];
        $destino6 = $directorio_destino6 . '/' .  $img_file6;
        move_uploaded_file($tmp_name6, $destino6);
    }
            
    $tmp_name7 = $foto7['tmp_name'];
    if(!empty($tmp_name7)) {
        $directorio_destino7 = "../imagenes";
        $img_file7 = $foto7['name'];
        $img_type7 = $foto7['type'];
        $destino7 = $directorio_destino7 . '/' .  $img_file7;
        move_uploaded_file($tmp_name7, $destino7);
    }
            
            $consulta= "UPDATE `datos` SET `imagen`='$destino' WHERE `fechaHoy`='$fechaHoy';";
            
            $validarFecha="SELECT * FROM `datos` WHERE `fechaHoy`='$fechaHoy'";
            $resultadoFechaHoy = mysqli_query($DBConnection, $validarFecha);
            $row98=mysqli_num_rows($resultadoFechaHoy);
            $imgset = '';
            if(isset($destino)) {
                $imgset.= ",`imagen`='$destino'";
            }
            if(isset($destino1)) {
                $imgset.= ",`imagen1`='$destino1'";
            }
            if(isset($destino2)) {
                $imgset.= ",`imagen2`='$destino2'";
            }
            if(isset($destino3)) {
                $imgset.= ",`imagen3`='$destino3'";
            }
            if(isset($destino4)) {
                $imgset.= ",`imagen4`='$destino4'";
            }
            if(isset($destino5)) {
                $imgset.= ",`imagen5`='$destino5'";
            }
            if(isset($destino6)) {
                $imgset.= ",`imagen6`='$destino6'";
            }
            if(isset($destino7)) {
                $imgset.= ",`imagen7`='$destino7'";
            }
            if(isset($destino1)) {
                $imgset.= ",`imagen1`='$destino1'";
            }

            if($row98>=1){

               $modificarDatos ="UPDATE `datos` SET `text1`='$text1',`text2`='$text2',`text3`='$text3',`text4`='$text4',`text5`='$text5',`text6`='$text6',`text7`='$text7',`text8`='$text8',`titulo`='$titulo',`titulo1`='$titulo1',`titulo2`='$titulo2',`titulo3`='$titulo3',`titulo4`='$titulo4',`titulo5`='$titulo5',`titulo6`='$titulo6',`titulo7`='$titulo7'$imgset WHERE `fechaHoy`='$fechaHoy'";
               $resultado99=mysqli_query($DBConnection,$modificarDatos);
              
            }else{
                $insertar="INSERT INTO `datos` SET `fechaHoy`='$fechaHoy',`text1`='$text1',`text2`='$text2',`text3`='$text3',`text4`='$text4',`text5`='$text5',`text6`='$text6',`text7`='$text7',`text8`='$text8',`titulo`='$titulo',`titulo1`='$titulo1',`titulo2`='$titulo2',`titulo3`='$titulo3',`titulo4`='$titulo4',`titulo5`='$titulo5',`titulo6`='$titulo6',`titulo7`='$titulo7'$imgset";
                $resultado=mysqli_query($DBConnection,$insertar);
                
            }
            if ($consulta1)
            {
                move_uploaded_file($tmp_name, $destino);
                return true;
                mysqli_close($DBConnection);

            }
        }
                echo '<script language="javascript">alert("Registrato con successo");
    window.location.href = "welcomeAdmin.php";
         </script>';

}else{
    echo '<script language="javascript">alert("Errore registrare");
    window.history.go(-1);
    </script>';
 }
    //Si llegamos hasta aquí es que algo ha fallado
    return false;














