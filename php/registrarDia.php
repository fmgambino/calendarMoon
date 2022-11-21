<?php
include 'conect.php';

$fechaHoy11 =$_POST['fechaHoy'];
$fechaHoy = date("d/m/Y", strtotime($fechaHoy11));
$text1 =$_POST['text1'];
$text2 =$_POST['text2'];
$tetx3 =$_POST['text3'];
$titulo =$_POST['titulo'];


 if($fechaHoy){

    $insertar="INSERT INTO `datos`(`fechaHoy`, `text1`, `text2`, `text3`, `titulo`) VALUES ('$fechaHoy','$text1','$text2','$tetx3','$titulo')";
    $resultado=mysqli_query($DBConnection,$insertar);
    echo '<script language="javascript">alert("Registrato con successo");
    window.location.href = "welcomeAdmin.php";;
         </script>';
         mysqli_free_result($resultado);
 }else{
    echo '<script language="javascript">alert("Errore registrare");
    window.history.go(-1);
    </script>';
 }
 
 mysqli_close($DBConnection);
?>