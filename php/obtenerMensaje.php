<?php
include 'conect.php';
header('Content-Type: application/json; charset=utf-8');

$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];

$traerdatos= "SELECT * FROM `datos` WHERE `fechaHoy` = '" .$dia . '-' . $mes .'-' .$ano . "'";
//$traerdatos="SELECT * FROM `datos` WHERE fechaHoy='11-08-2022'";
$resultado=mysqli_query($DBConnection,$traerdatos);
if ($row = mysqli_fetch_row($resultado)) {
    
    $someObj = (object)[];
    $someObj->id = $row[0];
    $someObj->fechaHoy = $row[1];
    $someObj->text1 =  $row[2];
    $someObj->text2 = $row[3];
    $someObj->text3 = $row[4];
    $someObj->text4 = $row[5];
    $someObj->text5 = $row[6];
    $someObj->text6 = $row[7];
    $someObj->text7 = $row[8];
    $someObj->text8 = $row[9];
    $someObj->titulo = $row[10];
    $someObj->titulo1 = $row[11];
    $someObj->titulo2 = $row[12];
    $someObj->titulo3 = $row[13];
    $someObj->titulo4 = $row[14];
    $someObj->titulo5= $row[15];
    $someObj->titulo6 = $row[16];
    $someObj->titulo7 = $row[17];
    $someObj->imagen = $row[18];
    $someObj->imagen1 = $row[19];
    $someObj->imagen2 = $row[20];
    $someObj->imagen3 = $row[21];
    $someObj->imagen4 = $row[22];
    $someObj->imagen5 = $row[23];
    $someObj->imagen6 = $row[24];
    $someObj->imagen7 = $row[25];
    echo json_encode($someObj);
} else {
    echo "{}";
}
?>