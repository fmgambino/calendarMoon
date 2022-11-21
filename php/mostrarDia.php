<?php
include 'conect.php';

$fechaHoy11 =$_POST['dia'];



$ConsultarHoy="SELECT * FROM `datos` WHERE `fechaHoy` = '$fechaHoy11'";
$resultado=mysqli_query($DBConnection,$ConsultarHoy);
if ($row = mysqli_fetch_array($resultado)) {
    
    $titulo = $row['titulo'];
    $text1 = $row['text1'];
    $text2 = $row['text2'];
    $text3 = $row['text3'];
    $url = $row['imagen'];
}


?>