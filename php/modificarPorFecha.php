<?php
include 'conect.php'; 
$fechaHoy1 =$_POST['fechaHoy'];
$fechaHoy = date("d-m-Y", strtotime($fechaHoy1));
$buscarPorFecha = "SELECT * FROM `datos` WHERE `fechaHoy`='$fechaHoy'";
$resultadoFecha = mysqli_query($DBConnection, $buscarPorFecha);
$rows=mysqli_num_rows($resultadoFecha);
if ($row = mysqli_fetch_row($resultadoFecha)) {
    
    $id = $row[0];
    $fechaHoy = $row[1];
    $text1 =  $row[2];
    $text2 = $row[3];
    $text3 = $row[4];
    $text4 = $row[5];
    $text5 = $row[6];
    $text6 = $row[7];
    $text7 = $row[8];
    $text8 = $row[9];
    $titulo = $row[10];
    $titulo1 = $row[11];
    $titulo2 = $row[12];
    $titulo3 = $row[13];
    $titulo4 = $row[14];
    $titulo5= $row[15];
    $titulo6 = $row[16];
    $titulo7 = $row[17];
    $imagen = $row[18];
    $imagen1 = $row[19];
    $imagen2 = $row[20];
    $imagen3 = $row[21];
    $imagen4 = $row[22];
    $imagen5 = $row[23];
    $imagen6 = $row[24];
    $imagen7 = $row[25];
    
}

if($rows>=1){?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/welcomeAdmin.css">
    
    <link rel="stylesheet" type="text/css" href="../Librerias/ALERTIFY/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../Librerias/boostrap/css/bootstrap.css">
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript">
     ////FUNCIONES DE CARRAR MODALES CALENDARIOS ////
            function NuevoModalCalendarioCerrar2(){
                document.getElementById('modal2').classList.add("hide");
                document.getElementById('btnNuevoModal22').classList.add("hide");
                document.getElementById('btnNuevoModal1').classList.remove("hide");
                document.getElementById('btnNuevoModal2').classList.add("hide")
            }
              function NuevoModalCalendarioCerrar3(){
                document.getElementById('modal3').classList.add("hide");
                document.getElementById('btnNuevoModal22').classList.remove("hide");
                document.getElementById('btnNuevoModal33').classList.add("hide");
                document.getElementById('btnNuevoModal2').classList.remove("hide");
                document.getElementById('btnNuevoModal3').classList.add("hide");
            }
              function NuevoModalCalendarioCerrar4(){
                document.getElementById('modal4').classList.add("hide");
                document.getElementById('btnNuevoModal33').classList.remove("hide");
                document.getElementById('btnNuevoModal44').classList.add("hide");
                document.getElementById('btnNuevoModal3').classList.remove("hide");
                document.getElementById('btnNuevoModal4').classList.add("hide");
            }
              function NuevoModalCalendarioCerrar5(){
                document.getElementById('modal5').classList.add("hide");
                document.getElementById('btnNuevoModal44').classList.remove("hide");
                document.getElementById('btnNuevoModal55').classList.add("hide");
                document.getElementById('btnNuevoModal4').classList.remove("hide");
                document.getElementById('btnNuevoModal5').classList.add("hide");
            }
            function NuevoModalCalendarioCerrar6(){
                document.getElementById('modal6').classList.add("hide");
                document.getElementById('btnNuevoModal55').classList.remove("hide");
                document.getElementById('btnNuevoModal66').classList.add("hide");
                document.getElementById('btnNuevoModal5').classList.remove("hide");
                document.getElementById('btnNuevoModal6').classList.add("hide");
            }
            function NuevoModalCalendarioCerrar7(){
                document.getElementById('modal7').classList.add("hide");
                document.getElementById('btnNuevoModal66').classList.remove("hide");
                document.getElementById('btnNuevoModal77').classList.add("hide");
                document.getElementById('btnNuevoModal6').classList.remove("hide");
                document.getElementById('btnNuevoModal7').classList.add("hide");
            }
            function NuevoModalCalendarioCerrar8(){
                document.getElementById('modal8').classList.add("hide");
                document.getElementById('btnNuevoModal77').classList.remove("hide");
                document.getElementById('btnNuevoModal88').classList.add("hide");
                document.getElementById('btnNuevoModal7').classList.remove("hide");
                document.getElementById('btnNuevoModal8').classList.add("hide");
            }
            ////FUNCIONES DE ABRIR CALENDARIOS ////
               function NuevoModalCalendario(){
            document.getElementById('modal2').classList.remove("hide");
            document.getElementById('btnNuevoModal22').classList.remove("hide");
            document.getElementById('btnNuevoModal1').classList.add("hide");
            document.getElementById('btnNuevoModal2').classList.remove("hide");
            
        }
            function NuevoModalCalendario1(){
            document.getElementById('modal3').classList.remove("hide");
            document.getElementById('btnNuevoModal22').classList.add("hide");
            document.getElementById('btnNuevoModal33').classList.remove("hide");
            document.getElementById('btnNuevoModal2').classList.add("hide");
            document.getElementById('btnNuevoModal3').classList.remove("hide");
            
        }
          
            function NuevoModalCalendario2(){
            document.getElementById('modal4').classList.remove("hide");
            document.getElementById('btnNuevoModal33').classList.add("hide");
            document.getElementById('btnNuevoModal44').classList.remove("hide");
            document.getElementById('btnNuevoModal3').classList.add("hide");
            document.getElementById('btnNuevoModal4').classList.remove("hide");
            
        }
            function NuevoModalCalendario3(){
            document.getElementById('modal5').classList.remove("hide");
            document.getElementById('btnNuevoModal44').classList.add("hide");
            document.getElementById('btnNuevoModal55').classList.remove("hide");
            document.getElementById('btnNuevoModal4').classList.add("hide");
            document.getElementById('btnNuevoModal5').classList.remove("hide");
            
        }
         function NuevoModalCalendario4(){
            document.getElementById('modal6').classList.remove("hide");
            document.getElementById('btnNuevoModal55').classList.add("hide");
            document.getElementById('btnNuevoModal66').classList.remove("hide");
            document.getElementById('btnNuevoModal5').classList.add("hide");
            document.getElementById('btnNuevoModal6').classList.remove("hide");
            
        }
         function NuevoModalCalendario5(){
            document.getElementById('modal7').classList.remove("hide");
            document.getElementById('btnNuevoModal66').classList.add("hide");
            document.getElementById('btnNuevoModal77').classList.remove("hide");
            document.getElementById('btnNuevoModal6').classList.add("hide");
            document.getElementById('btnNuevoModal7').classList.remove("hide");
            
        }
         function NuevoModalCalendario6(){
            document.getElementById('modal8').classList.remove("hide");
            document.getElementById('btnNuevoModal77').classList.add("hide");
            document.getElementById('btnNuevoModal88').classList.remove("hide");
            document.getElementById('btnNuevoModal7').classList.add("hide");
            document.getElementById('btnNuevoModal8').classList.remove("hide");
            
        }
        //////  FUNCIONES DE TEXTO (WIPY )/////
            function textCentrado(){
                document.getElementById('text').classList.add("center");
                document.getElementById('text').classList.remove("centerLeft");
                document.getElementById('text').classList.remove("centerRight");
            }
            function textIzquierda(){
                document.getElementById('text').classList.add("centerLeft");
                document.getElementById('text').classList.remove("center");
                document.getElementById('text').classList.remove("centerRight");
            }
            function textDerecha(){
                document.getElementById('text').classList.add("centerRight");
                document.getElementById('text').classList.remove("center");
                document.getElementById('text').classList.remove("centerLeft");
            }
        
            function Negrita(){
                document.getElementById('text').classList.add("blod");
                document.getElementById('negrita1').classList.remove("hide");
                document.getElementById('negrita').classList.add("hide");
                
            }
            function Negrita1(){
                document.getElementById('text').classList.remove("blod");
                document.getElementById('negrita1').classList.add("hide");
                document.getElementById('negrita').classList.remove("hide");
            }
            function subRayada(){
                document.getElementById('text').classList.add("subrayado");
                document.getElementById('subrayada').classList.add("hide");
                document.getElementById('subrayada1').classList.remove("hide");
            }
            function subRayada1(){
                document.getElementById('text').classList.remove("subrayado");
                document.getElementById('subrayada').classList.remove("hide");
                document.getElementById('subrayada1').classList.add("hide");
            }
            function italica(){
                
                document.getElementById('text').classList.add("italicaC");
                document.getElementById('Italica').classList.add("hide");
                document.getElementById('Italica1').classList.remove("hide");
            }
            function italica1(){
                document.getElementById('text').classList.remove("italicaC");
                document.getElementById('Italica').classList.remove("hide");
                document.getElementById('Italica1').classList.add("hide");
            }
            
            
            function NuevoTamaño(){
               let selectedValue = document.getElementById("seleccion").value;
             console.log(selectedValue);
             if(selectedValue == 12){
                 document.getElementById('text').classList.add("font12");
                 document.getElementById('text').classList.remove("font14");
                 document.getElementById('text').classList.remove("font16");
                 document.getElementById('text').classList.remove("font20");
                 document.getElementById('text').classList.remove("font24");
             }else if(selectedValue == 14){
                 document.getElementById('text').classList.remove("font12");
                 document.getElementById('text').classList.add("font14");
                 document.getElementById('text').classList.remove("font16");
                 document.getElementById('text').classList.remove("font20");
                 document.getElementById('text').classList.remove("font24");
             }else if(selectedValue == 16){
                 document.getElementById('text').classList.remove("font12");
                 document.getElementById('text').classList.remove("font14");
                 document.getElementById('text').classList.add("font16");
                 document.getElementById('text').classList.remove("font20");
                 document.getElementById('text').classList.remove("font24");
             }else if(selectedValue == 20){
                 document.getElementById('text').classList.remove("font12");
                 document.getElementById('text').classList.remove("font14");
                 document.getElementById('text').classList.remove("font16");
                 document.getElementById('text').classList.add("font20");
                 document.getElementById('text').classList.remove("font24");
             }else if(selectedValue == 24){
                 document.getElementById('text').classList.remove("font12");
                 document.getElementById('text').classList.remove("font14");
                 document.getElementById('text').classList.remove("font16");
                 document.getElementById('text').classList.remove("font20");
                 document.getElementById('text').classList.add("font24");
             }
            }
            function NuevoFont(){
                let selectedValue = document.getElementById("tipoFont").value;
             console.log(selectedValue)
              if(selectedValue == 1){
                 document.getElementById('text').classList.add("calibri");
                 document.getElementById('text').classList.remove("Arial");
                 document.getElementById('text').classList.remove("Helvetica");
                 document.getElementById('text').classList.remove("Courier");
                 document.getElementById('text').classList.remove("monospace");
                 document.getElementById('text').classList.remove("Impact");
             }else if(selectedValue == 2){
                 document.getElementById('text').classList.remove("calibri");
                 document.getElementById('text').classList.add("Arial");
                 document.getElementById('text').classList.remove("Helvetica");
                 document.getElementById('text').classList.remove("Courier");
                 document.getElementById('text').classList.remove("monospace");
                 document.getElementById('text').classList.add("Impact");
             }else if(selectedValue == 3){
                 document.getElementById('text').classList.remove("calibri");
                 document.getElementById('text').classList.remove("Arial");
                 document.getElementById('text').classList.add("Helvetica");
                 document.getElementById('text').classList.remove("Courier");
                 document.getElementById('text').classList.remove("monospace");
                 document.getElementById('text').classList.remove("Impact");
             }else if(selectedValue == 4){
                 document.getElementById('text').classList.remove("calibri");
                 document.getElementById('text').classList.remove("Arial");
                 document.getElementById('text').classList.remove("Helvetica");
                 document.getElementById('text').classList.add("courier");
                 document.getElementById('text').classList.remove("monospace");
                 document.getElementById('text').classList.remove("Impact");
             }else if(selectedValue == 5){
                 document.getElementById('text').classList.remove("calibri");
                 document.getElementById('text').classList.remove("Arial");
                 document.getElementById('text').classList.remove("Helvetica");
                 document.getElementById('text').classList.remove("Courier");
                 document.getElementById('text').classList.add("monospace");
                 document.getElementById('text').classList.remove("Impact");
             }else if(selectedValue == 6){
                 document.getElementById('text').classList.remove("calibri");
                 document.getElementById('text').classList.remove("Arial");
                 document.getElementById('text').classList.remove("Helvetica");
                 document.getElementById('text').classList.remove("Courier");
                 document.getElementById('text').classList.remove("monospace");
                 document.getElementById('text').classList.add("Impact");
             }
            }
            function NuevoColor(){
                let selectedValue = document.getElementById("color").value;
             console.log(selectedValue)
                   if(selectedValue == 1){
                 document.getElementById('text').classList.add("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 2){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.add("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 3){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.add("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 4){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.add("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 5){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.add("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 6){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.add("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 7){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.add("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 8){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.add("viola");
                 document.getElementById('text').classList.remove("Arancia");
             }else if(selectedValue == 9){
                 document.getElementById('text').classList.remove("Rosso");
                 document.getElementById('text').classList.remove("Blu");
                 document.getElementById('text').classList.remove("Bianco");
                 document.getElementById('text').classList.remove("Verde");
                 document.getElementById('text').classList.remove("Giallo");
                 document.getElementById('text').classList.remove("Magenta");
                 document.getElementById('text').classList.remove("ciano");
                 document.getElementById('text').classList.remove("viola");
                 document.getElementById('text').classList.add("Arancia");
             }
             
            }
            
    </script>
</head>
<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario_Lunare</title>
</head>
<body>
    
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                    <div class="modal-header">
                        <h5>Calendario Lunare</h5>
                        <button class="close" onclick="window.location='https://calendariolunaretopday.com/php/welcomeAdmin.php'" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="upload1.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                 <input type="date" name="fechaHoy"  value="<?php echo $fechaHoy1 ?>">
                                 
                                 <label></label><br>
                                 
                                 <div style="width: 90%;height: 450px;border: 1px solid #000;" >
                                     <input type="text" name="titulo" placeholder="Inserisci un titolo" value="<?php echo $titulo; ?>"><br><br>
                                     <select id="seleccion" name="seleccion">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño()">
                                        <select id="color" name="color" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor()">
                                     <br>
                                      <select id="tipoFont" name="tipoFont">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont()">
                                     <button id="negrita"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita()" >B</button>
                                     <button id="negrita1"class="hide" type="button" style="font-weight: bold;" onclick="Negrita1()" >B</button>
                                     <button id="subrayada"class="btn btn-light" type="button" onclick="subRayada()"><u>B</u></button>
                                     <button id="subrayada1"class="hide" type="button" onclick="subRayada1()"><u>B</u></button>
                                     <button id="Italica"class="btn btn-light" type="button" onclick="italica()"><i>B</i></button>
                                     <button id="Italica1"class="hide" type="button" onclick="italica1()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura"hidden value="">
                                     <input id="sub" name="sub"hidden value="">
                                     <input id="it" name="it"hidden value="">
                                     <input id="tc" name="tc"hidden value="">
                                     <input id="ti" name="ti"hidden value="">
                                     <input id="tj" name="tj"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%"type="tetxt" name="text1" formControlName="pass" class="" id="text1"><?php echo $text1; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto" class="form" class="form-control text-center"><?php echo !empty($imagen) ? $imagen : '' ?><br><br>
                                        </div>
                                 </div>
                                 <!-- modal 2 -->
                                 <div id="modal2" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo1" placeholder="Inserisci un titolo" value="<?php echo $titulo1; ?>"><br><br>
                                     <select id="seleccion1" name="seleccion1">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño2()">
                                        <select id="color2" name="color1" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor2()">
                                     <br>
                                      <select id="tipoFont2" name="tipoFont1">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont2()">
                                     <button id="negrita2"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita2()" >B</button>
                                     <button id="negrita3"class="hide" type="button" style="font-weight: bold;" onclick="Negrita3()" >B</button>
                                     <button id="subrayada2"class="btn btn-light" type="button" onclick="subRayada2()"><u>B</u></button>
                                     <button id="subrayada3"class="hide" type="button" onclick="subRayada3()"><u>B</u></button>
                                     <button id="Italica2"class="btn btn-light" type="button" onclick="italica2()"><i>B</i></button>
                                     <button id="Italica3"class="hide" type="button" onclick="italica3()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura1"hidden value="">
                                     <input id="sub" name="sub1"hidden value="">
                                     <input id="it" name="it1"hidden value="">
                                     <input id="tc" name="tc1"hidden value="">
                                     <input id="ti" name="ti1"hidden value="">
                                     <input id="tj" name="tj1"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado2()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda2()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha2()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%" type="tetxt" name="text2" formControlName="pass"  id="text2"><?php echo $text2; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen1" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto1" class="form" class="form-control text-center"><?php echo !empty($imagen1) ? $imagen1 : '' ?><br><br>
                                        </div>
                                 </div>
                                 <!-- modal 3 -->
                                 <div id="modal3" style="width: 90%;height: 400px;border: 1px solid #000;"class="hide">
                                     <input type="text" name="titulo2" placeholder="Inserisci un titolo" value="<?php echo $titulo2; ?>"><br><br>
                                     <select id="seleccion4" name="seleccion2">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño4()">
                                        <select id="color4" name="color2" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor4()">
                                     <br>
                                      <select id="tipoFont4" name="tipoFont2">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont4()">
                                     <button id="negrita4"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita4()" >B</button>
                                     <button id="negrita5"class="hide" type="button" style="font-weight: bold;" onclick="Negrita5()" >B</button>
                                     <button id="subrayada4"class="btn btn-light" type="button" onclick="subRayada4()"><u>B</u></button>
                                     <button id="subrayada5"class="hide" type="button" onclick="subRayada5()"><u>B</u></button>
                                     <button id="Italica4"class="btn btn-light" type="button" onclick="italica4()"><i>B</i></button>
                                     <button id="Italica5"class="hide" type="button" onclick="italica5()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura2"hidden value="">
                                     <input id="sub" name="sub2"hidden value="">
                                     <input id="it" name="it2"hidden value="">
                                     <input id="tc" name="tc2"hidden value="">
                                     <input id="ti" name="ti2"hidden value="">
                                     <input id="tj" name="tj2"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado4()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda4()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha4()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%" type="tetxt" name="text3" formControlName="pass"  id="text3"><?php echo $text3; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen2" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto2" class="form" class="form-control text-center"><?php echo !empty($imagen2) ? $imagen2 : '' ?><br><br>
                                        </div>
                                 </div>
                                 <!-- modal 4 -->
                                 <div id="modal4" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo3" placeholder="Inserisci un titolo" value="<?php echo $titulo3; ?>"><br><br>
                                     <select id="seleccion6" name="seleccion3">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño6()">
                                        <select id="color6" name="color3" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor6()">
                                     <br>
                                      <select id="tipoFont6" name="tipoFont3">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont6()">
                                     <button id="negrita6"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita6()" >B</button>
                                     <button id="negrita7"class="hide" type="button" style="font-weight: bold;" onclick="Negrita7()" >B</button>
                                     <button id="subrayada6"class="btn btn-light" type="button" onclick="subRayada6()"><u>B</u></button>
                                     <button id="subrayada7"class="hide" type="button" onclick="subRayada7()"><u>B</u></button>
                                     <button id="Italica6"class="btn btn-light" type="button" onclick="italica6()"><i>B</i></button>
                                     <button id="Italica7"class="hide" type="button" onclick="italica7()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura3"hidden value="">
                                     <input id="sub" name="sub3"hidden value="">
                                     <input id="it" name="it3"hidden value="">
                                     <input id="tc" name="tc3"hidden value="">
                                     <input id="ti" name="ti3"hidden value="">
                                     <input id="tj" name="tj3"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado6()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda6()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha6()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%" name="text4" formControlName="pass" id="text4"><?php echo $text4; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen3" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto3" class="form" class="form-control text-center"><?php echo !empty($imagen3) ? $imagen3 : '' ?><br><br>
                                        </div>
                                 </div>
                                 <!-- modal 5 -->
                                 <div id="modal5" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo4" placeholder="Inserisci un titolo" value="<?php echo $titulo4; ?>"><br><br>
                                     <select id="seleccion8" name="seleccion4">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño8()">
                                        <select id="color8" name="color4" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor8()">
                                     <br>
                                      <select id="tipoFont8" name="tipoFont4">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont8()">
                                     <button id="negrita8"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita8()" >B</button>
                                     <button id="negrita9"class="hide" type="button" style="font-weight: bold;" onclick="Negrita9()" >B</button>
                                     <button id="subrayada8"class="btn btn-light" type="button" onclick="subRayada8()"><u>B</u></button>
                                     <button id="subrayada9"class="hide" type="button" onclick="subRayada9()"><u>B</u></button>
                                     <button id="Italica8"class="btn btn-light" type="button" onclick="italica8()"><i>B</i></button>
                                     <button id="Italica9"class="hide" type="button" onclick="italica9()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura"hidden value="">
                                     <input id="sub" name="sub4"hidden value="">
                                     <input id="it" name="it4"hidden value="">
                                     <input id="tc" name="tc4"hidden value="">
                                     <input id="ti" name="ti4"hidden value="">
                                     <input id="tj" name="tj4"hidden value="">
                                     
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado8()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda8()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha8()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%"type="tetxt" name="text5" formControlName="pass" id="text5"><?php echo $text5; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen4" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto4" class="form" class="form-control text-center"><?php echo !empty($imagen4) ? $imagen4 : '' ?><br><br>
                                        </div>
                                 </div>
                                 <!-- modal 6 -->
                                 <div id="modal6" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo5" placeholder="Inserisci un titolo" value="<?php echo $titulo5; ?>"><br><br>
                                     <select id="seleccion10" name="seleccion5">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño10()">
                                        <select id="color10" name="color5" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor10()">
                                     <br>
                                      <select id="tipoFont10" name="tipoFont5">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont10()">
                                     <button id="negrita10"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita10()" >B</button>
                                     <button id="negrita11"class="hide" type="button" style="font-weight: bold;" onclick="Negrita11()" >B</button>
                                     <button id="subrayada10"class="btn btn-light" type="button" onclick="subRayada10()"><u>B</u></button>
                                     <button id="subrayada11"class="hide" type="button" onclick="subRayada11()"><u>B</u></button>
                                     <button id="Italica10"class="btn btn-light" type="button" onclick="italica10()"><i>B</i></button>
                                     <button id="Italica11"class="hide" type="button" onclick="italica11()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura5"hidden value="">
                                     <input id="sub" name="sub5"hidden value="">
                                     <input id="it" name="it5"hidden value="">
                                     <input id="tc" name="tc5"hidden value="">
                                     <input id="ti" name="ti5"hidden value="">
                                     <input id="tj" name="tj5"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado10()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda10()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha10()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%"type="tetxt" name="text6" formControlName="pass" id="text6"><?php echo $text6; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen5" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto5" class="form" class="form-control text-center"><?php echo !empty($imagen5) ? $imagen5 : '' ?><br><br>
                                        </div>
                                 </div>
                               <!-- modal 7 -->
                                 <div id="modal7" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo6" placeholder="Inserisci un titolo" value="<?php echo $titulo6; ?>"><br><br>
                                     <select id="seleccion12" name="seleccion6">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño12()">
                                        <select id="color12" name="color6" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor12()">
                                     <br>
                                      <select id="tipoFont12" name="tipoFont6">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont12()">
                                     <button id="negrita12"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita12()" >B</button>
                                     <button id="negrita13"class="hide" type="button" style="font-weight: bold;" onclick="Negrita13()" >B</button>
                                     <button id="subrayada12"class="btn btn-light" type="button" onclick="subRayada12()"><u>B</u></button>
                                     <button id="subrayada13"class="hide" type="button" onclick="subRayada13()"><u>B</u></button>
                                     <button id="Italica12"class="btn btn-light" type="button" onclick="italica12()"><i>B</i></button>
                                     <button id="Italica13"class="hide" type="button" onclick="italica13()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura6"hidden value="">
                                     <input id="sub" name="sub6"hidden value="">
                                     <input id="it" name="it6"hidden value="">
                                     <input id="tc" name="tc6"hidden value="">
                                     <input id="ti" name="ti6"hidden value="">
                                     <input id="tj" name="tj6"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado12()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda12()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha12()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%" type="tetxt" name="text7" formControlName="pass" id="text7"><?php echo $text7; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen6" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto6" class="form" class="form-control text-center"><?php echo !empty($imagen6) ? $imagen6 : '' ?><br><br>
                                        </div>
                                 </div>
                                <!-- modal 8 -->
                                 <div id="modal8" style="width: 90%;height: 400px;border: 1px solid #000;" class="hide">
                                     <input type="text" name="titulo7" placeholder="Inserisci un titolo" value="<?php echo $titulo7; ?>"><br><br>
                                     <select id="seleccion14" name="seleccion7">
                                         <option value="12" >12px</option>
                                         <option value="14" >14px</option>
                                         <option value="16" >16px</option>
                                         <option value="20" >20px</option>
                                         <option value="24" >24px</option>
                                     </select>
                                     <input type="button" name="generar" value="Ridimensionare" class="" onclick="NuevoTamaño14()">
                                        <select id="color14" name="color7" >
                                         <option value="0" style="color:#000">Nero</option>
                                         <option value="1" style="color:#ff0000;background-color: #ff0000;">Rosso</option>
                                         <option value="2" style="color:#0000ff;background-color: #0000ff;">Blu</option>
                                         <option value="3" style="color:#fff; background-color: #fff;">Bianco</option>
                                         <option value="4" style="color:#00ff00;background-color: #00ff00;">Verde</option>
                                         <option value="5" style="color:#ffff00;background-color: #ffff00;">Giallo</option>
                                         <option value="6" style="color:#ff00ff;background-color: #ff00ff;">Magenta</option>
                                         <option value="7" style="color:#00ffff;background-color: #00ffff;">ciano</option>
                                         <option value="8" style="color:#8800ff;background-color: #8800ff;">viola</option>
                                         <option value="9" style="color:#ff8800;background-color: #ff8800;">Arancia</option>
                                     </select>
                                     <input type="button" name="generar" value="cambiaColor" class="" onclick="NuevoColor14()">
                                     <br>
                                      <select id="tipoFont14" name="tipoFont7">
                                         <option value="1">Calibri</option>
                                         <option value="2">Arial</option>
                                         <option value="3">Helvetica</option>
                                         <option value="4">Courier</option>
                                         <option value="5">monospace</option>
                                         <option value="6">Impact</option>
                                     </select>
                                     <input type="button" name="generar" value="cambialettera" class="" onclick="NuevoFont14()">
                                     <button id="negrita14"class="btn btn-light" type="button" style="font-weight: bold;" onclick="Negrita14()" >B</button>
                                     <button id="negrita15"class="hide" type="button" style="font-weight: bold;" onclick="Negrita15()" >B</button>
                                     <button id="subrayada14"class="btn btn-light" type="button" onclick="subRayada14()"><u>B</u></button>
                                     <button id="subrayada15"class="hide" type="button" onclick="subRayada15()"><u>B</u></button>
                                     <button id="Italica14"class="btn btn-light" type="button" onclick="italica14()"><i>B</i></button>
                                     <button id="Italica15"class="hide" type="button" onclick="italica15()"><i>B</i></button>
                                     
                                     <input id="oscura" name="oscura7"hidden value="">
                                     <input id="sub" name="sub7"hidden value="">
                                     <input id="it" name="it7"hidden value="">
                                     <input id="tc" name="tc7"hidden value="">
                                     <input id="ti" name="ti7"hidden value="">
                                     <input id="tj" name="tj7"hidden value="">
                                  
                                     <br>
                                     <button class="btn btn-light" type="button" onclick="textCentrado14()" >Testo centrato</button>
                                     <button class="btn btn-light" type="button" onclick="textIzquierda14()">Testo a sinistra</button>
                                     <button class="btn btn-light" type="button" onclick="textDerecha14()">Testo giustificato</button>
                                     <textarea style="height: 200px;width:90%;margin-left:5%" type="tetxt" name="text8" formControlName="pass" id="text8"><?php echo $text8; ?></textarea>
                                        <div style="float:right" class="form-control text-center">
                                             <h5 for="imagen7" class="form-control text-center">Imagen:</h5>
                                             <input type="file" name="foto7" class="form" class="form-control text-center"><?php echo !empty($imagen7) ? $imagen7 : '' ?><br><br>
                                        </div>
                                 </div>
                                
                            </div>
                            <div class="modal-footer" >
                                <?php 
                                echo '
                                <a class="btn btn-Dangerlmz" href="delete.php?tabla=datos&id='.$id.'" >
                                Elimina
                                </a> '
                                ?>
                                <button class="btn btn-warning" type="button" onclick="window.location='https://calendariolunaretopday.com/php/welcomeAdmin.php'">
                                Chiudere
                                </button>
                                <button class="btn btn-success" type="submit" >
                                Accettare
                                </button>
                                
                            </div>
                        </form>
                            <button id="btnNuevoModal1" type="button" onclick="NuevoModalCalendario()" class="btn btn-success mas">+</button>
                            <button id="btnNuevoModal2" type="button" onclick="NuevoModalCalendario1()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal22" type="button" onclick="NuevoModalCalendarioCerrar2()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal3" type="button" onclick="NuevoModalCalendario2()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal33" type="button" onclick="NuevoModalCalendarioCerrar3()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal4" type="button" onclick="NuevoModalCalendario3()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal44" type="button" onclick="NuevoModalCalendarioCerrar4()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal5" type="button" onclick="NuevoModalCalendario4()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal55" type="button" onclick="NuevoModalCalendarioCerrar5()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal6" type="button" onclick="NuevoModalCalendario5()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal66" type="button" onclick="NuevoModalCalendarioCerrar6()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal7" type="button" onclick="NuevoModalCalendario6()" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal77" type="button" onclick="NuevoModalCalendarioCerrar7()" class="btn btn-danger mas hide">-</button>
                            <button id="btnNuevoModal8" type="button" onclick="" class="btn btn-success mas hide">+</button>
                            <button id="btnNuevoModal88" type="button" onclick="NuevoModalCalendarioCerrar8()" class="btn btn-danger mas hide">-</button>
                    </div>
              </div>
            </div>
     <!-- fin modal calendario -->
     <?php
     
}else{
    echo '<script language="javascript">alert("Nessun record trovato");
            window.location.href = "welcomeAdmin.php";
         </script>';
}
?>