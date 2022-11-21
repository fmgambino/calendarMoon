<?php
session_start();
include 'conect.php';
$nombreUsuario=$_SESSION['usuario'];

    $DateAndTime1 = date('d-m-Y');

    $ConsultarHoy="SELECT * FROM `datos` WHERE `fechaHoy` = '$DateAndTime1'";
    $resultado=mysqli_query($DBConnection,$ConsultarHoy);
    if ($row = mysqli_fetch_array($resultado)) {
        
        $tituloHoy = $row['titulo'];
        $text1Hoy = $row['text1'];
        $text2Hoy = $row['text2'];
        $text3Hoy = $row['text3'];
        $urlHoy = $row['imagen'];
}

$ConsultarUsuario="SELECT * FROM `users` WHERE `utente` = '$nombreUsuario'";
$resultadoUsu=mysqli_query($DBConnection,$ConsultarUsuario);
if($row = mysqli_fetch_array($resultadoUsu)){
    $nombre_Usu = $row['nome'];
    $Mail_Usu = $row['mail'];
}

$estadoNotificaion=1;
$ConsultarNotificaciones="SELECT * FROM `notificaciones` WHERE `estado` = '$estadoNotificaion'";
$resultadoNotificacion=mysqli_query($DBConnection,$ConsultarNotificaciones);
if ($row = mysqli_fetch_array($resultadoNotificacion)) {
    
   
    $text1Notificacion = $row['text1'];
    $text2Notificacion = $row['text2'];
    $estadoActualNotificacion = $row['estado'];
    $urlNotificacion = $row['imagen'];
} 
$uno=1;
$ConsultarGlosario="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario=mysqli_query($DBConnection,$ConsultarGlosario);
if ($row = mysqli_fetch_array($resultadoGlosario)) {
    
   
    $text1Glosario1 = $row['text1'];
    $text2Glosario1 = $row['text2'];
    $urlGlosario1 = $row['imagen'];
} 
$uno=2;
$ConsultarGlosario2="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario2=mysqli_query($DBConnection,$ConsultarGlosario2);
if ($row = mysqli_fetch_array($resultadoGlosario2)) {
    
   
    $text1Glosario2 = $row['text1'];
    $text2Glosario2 = $row['text2'];
    $urlGlosario2 = $row['imagen'];
} 
$uno=3;
$ConsultarGlosario3="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario3=mysqli_query($DBConnection,$ConsultarGlosario3);
if ($row = mysqli_fetch_array($resultadoGlosario3)) {
    
   
    $text1Glosario3 = $row['text1'];
    $text2Glosario3 = $row['text2'];
    $urlGlosario3 = $row['imagen'];
}
$uno=4;
$ConsultarGlosario4="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario4=mysqli_query($DBConnection,$ConsultarGlosario4);
if ($row = mysqli_fetch_array($resultadoGlosario4)) {
    
   
    $text1Glosario4 = $row['text1'];
    $text2Glosario4 = $row['text2'];
    $urlGlosario4 = $row['imagen'];
}
$uno=5;
$ConsultarGlosario5="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario5=mysqli_query($DBConnection,$ConsultarGlosario5);
if ($row = mysqli_fetch_array($resultadoGlosario5)) {
    
   
    $text1Glosario5 = $row['text1'];
    $text2Glosario5 = $row['text2'];
    $urlGlosario5 = $row['imagen'];
}
$uno=6;
$ConsultarGlosario6="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario6=mysqli_query($DBConnection,$ConsultarGlosario6);
if ($row = mysqli_fetch_array($resultadoGlosario6)) {
    
   
    $text1Glosario6 = $row['text1'];
    $text2Glosario6 = $row['text2'];
    $urlGlosario6 = $row['imagen'];
}
$uno=7;
$ConsultarGlosario7="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario7=mysqli_query($DBConnection,$ConsultarGlosario7);
if ($row = mysqli_fetch_array($resultadoGlosario7)) {
    
   
    $text1Glosario7 = $row['text1'];
    $text2Glosario7 = $row['text2'];
    $urlGlosario7 = $row['imagen'];
}
$uno=8;
$ConsultarGlosario8="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario8=mysqli_query($DBConnection,$ConsultarGlosario8);
if ($row = mysqli_fetch_array($resultadoGlosario8)) {
    
   
    $text1Glosario8 = $row['text1'];
    $text2Glosario8 = $row['text2'];
    $urlGlosario8 = $row['imagen'];
}
$uno=9;
$ConsultarGlosario9="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario9=mysqli_query($DBConnection,$ConsultarGlosario9);
if ($row = mysqli_fetch_array($resultadoGlosario9)) {
    
   
    $text1Glosario9 = $row['text1'];
    $text2Glosario9 = $row['text2'];
    $urlGlosario9 = $row['imagen'];
}
$uno=10;
$ConsultarGlosario10="SELECT * FROM `glosario`WHERE `id`='$uno'";
$resultadoGlosario10=mysqli_query($DBConnection,$ConsultarGlosario10);
if ($row = mysqli_fetch_array($resultadoGlosario10)) {
    
   
    $text1Glosario10 = $row['text1'];
    $text2Glosario10 = $row['text2'];
    $urlGlosario10 = $row['imagen'];
}

//// consultas de toy day

$uno=1;
$Consultartopday="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday=mysqli_query($DBConnection,$Consultartopday);
if ($row = mysqli_fetch_array($resultadotopday)) {
    
   
    $text1topday1 = $row['text1'];
    $text2topday1 = $row['text2'];
    $urltopday1 = $row['imagen'];
} 
$uno=2;
$Consultartopday2="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday2=mysqli_query($DBConnection,$Consultartopday2);
if ($row = mysqli_fetch_array($resultadotopday2)) {
    
   
    $text1topday2 = $row['text1'];
    $text2topday2 = $row['text2'];
    $urltopday2 = $row['imagen'];
} 
$uno=3;
$Consultartopday3="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday3=mysqli_query($DBConnection,$Consultartopday3);
if ($row = mysqli_fetch_array($resultadotopday3)) {
    
   
    $text1topday3 = $row['text1'];
    $text2topday3 = $row['text2'];
    $urltopday3 = $row['imagen'];
}
$uno=4;
$Consultartopday4="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday4=mysqli_query($DBConnection,$Consultartopday4);
if ($row = mysqli_fetch_array($resultadotopday4)) {
    
   
    $text1topday4 = $row['text1'];
    $text2topday4 = $row['text2'];
    $urltopday4 = $row['imagen'];
}
$uno=5;
$Consultartopday5="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday5=mysqli_query($DBConnection,$Consultartopday5);
if ($row = mysqli_fetch_array($resultadotopday5)) {
    
   
    $text1topday5 = $row['text1'];
    $text2topday5 = $row['text2'];
    $urltopday5 = $row['imagen'];
}
$uno=6;
$Consultartopday6="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday6=mysqli_query($DBConnection,$Consultartopday6);
if ($row = mysqli_fetch_array($resultadotopday6)) {
    
   
    $text1topday6 = $row['text1'];
    $text2topday6 = $row['text2'];
    $urltopday6 = $row['imagen'];
}
$uno=7;
$Consultartopday7="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday7=mysqli_query($DBConnection,$Consultartopday7);
if ($row = mysqli_fetch_array($resultadotopday7)) {
    
   
    $text1topday7 = $row['text1'];
    $text2topday7 = $row['text2'];
    $urltopday7 = $row['imagen'];
}
$uno=8;
$Consultartopday8="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday8=mysqli_query($DBConnection,$Consultartopday8);
if ($row = mysqli_fetch_array($resultadotopday8)) {
    
   
    $text1topday8 = $row['text1'];
    $text2topday8 = $row['text2'];
    $urltopday8 = $row['imagen'];
}
$uno=9;
$Consultartopday9="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday9=mysqli_query($DBConnection,$Consultartopday9);
if ($row = mysqli_fetch_array($resultadotopday9)) {
    
   
    $text1topday9 = $row['text1'];
    $text2topday9 = $row['text2'];
    $urltopday9 = $row['imagen'];
}
$uno=10;
$Consultartopday10="SELECT * FROM `topday`WHERE `id`='$uno'";
$resultadotopday10=mysqli_query($DBConnection,$Consultartopday10);
if ($row = mysqli_fetch_array($resultadotopday10)) {
    
   
    $text1topday10 = $row['text1'];
    $text2topday10 = $row['text2'];
    $urltopday10 = $row['imagen'];
}


//$i=0;
//foreach ($resultadoGlosario as $key => $row) { 
//$glosarioTitulo= $row['text1'].'<br>'; 
//$row['text2'].'<br>'; 
//$row['imagen'].'<br>';
//$i++;
//}











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/welcome.css">
    <link rel="stylesheet" type="text/css" href="../Librerias/ALERTIFY/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../Librerias/ALERTIFY/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../Librerias/boostrap/css/bootstrap.css">
    <script src="../Librerias/JQUERY/jquery-3.6.0.min.js"></script>
    <script src="../Librerias/boostrap/js/bootstrap.js" ></script>
    <script src="../Librerias/ALERTIFY/alertify.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <title>Calendario della luna</title>
</head>
<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario_Lunare</title>
</head>
<body background-image: none;>

            <!--  -->
            
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Glossario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='https://calendariolunaretopday.com/php/welcomeAdmin.php'">
                         <span aria-hidden="true">&times;</span>
                        </button>
                   </div>
                    <div class="modal-body">
                        
                        <?php if(!empty($text1Glosario1)){ echo '<button data-target="#glosario1" data-toggle="modal" class="botonGlosario">'.$text1Glosario1.'<img src="'.$urlGlosario1.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario2)){ echo '<button data-target="#glosario2" data-toggle="modal" class="botonGlosario">'.$text1Glosario2.'<img src="'.$urlGlosario2.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario3)){ echo '<button data-target="#glosario3" data-toggle="modal" class="botonGlosario">'.$text1Glosario3.'<img src="'.$urlGlosario3.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario4)){ echo '<button data-target="#glosario4" data-toggle="modal"class="botonGlosario">'.$text1Glosario4.'<img src="'.$urlGlosario4.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario5)){ echo '<button data-target="#glosario5" data-toggle="modal"class="botonGlosario">'.$text1Glosario5.'<img src="'.$urlGlosario5.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario6)){ echo '<button data-target="#glosario6" data-toggle="modal"class="botonGlosario">'.$text1Glosario6.'<img src="'.$urlGlosario6.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario7)){ echo '<button data-target="#glosario7" data-toggle="modal"class="botonGlosario">'.$text1Glosario7.'<img src="'.$urlGlosario7.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario8)){ echo '<button data-target="#glosario8" data-toggle="modal"class="botonGlosario">'.$text1Glosario8.'<img src="'.$urlGlosario8.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario9)){ echo '<button data-target="#glosario9" data-toggle="modal"class="botonGlosario">'.$text1Glosario9.'<img src="'.$urlGlosario9.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1Glosario10)){ echo '<button data-target="#glosario10" data-toggle="modal"class="botonGlosario">'.$text1Glosario10.'<img src="'.$urlGlosario10.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal" onclick="window.location='https://calendariolunaretopday.com/php/welcomeAdmin.php'" >Chiudere</button>
                        
                    </div>
                    </div>
            </div>
           

    <!-- glosario1 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >
            </button>

            <!-- Modal -->
            <div class="modal fade" id="glosario1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
             <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="1" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario1 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario1 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario1 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario1) ? $urlGlosario1 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
            </div>
            </div>
<!-- glosario1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 2-->
<div class="modal fade" id="glosario2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="2" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario2 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario2 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario2 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario2) ? $urlGlosario2 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>


<!-- glosario3 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 3-->
<div class="modal fade" id="glosario3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="3" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario3 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario3 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario3 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario3) ? $urlGlosario3 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario3 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 4-->
<div class="modal fade" id="glosario4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="4" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario4 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario4 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario4 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario4) ? $urlGlosario4 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario4 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 5-->
<div class="modal fade" id="glosario5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="5" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario5 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario5 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario5 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario5) ? $urlGlosario5 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 6 -->
<div class="modal fade" id="glosario6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="6" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario6 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario6 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario6 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario6) ? $urlGlosario6 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 7-->
<div class="modal fade" id="glosario7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="7" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario7 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $text1topday7 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario7 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario7) ? $urlGlosario7 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 8-->
<div class="modal fade" id="glosario8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="8" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario8 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $text1topday8 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario8 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario8) ? $urlGlosario8 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>

<!-- glosario9 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal -->
<div class="modal fade" id="glosario9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="9" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario9 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $text1topday9 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario9 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario9) ? $urlGlosario9 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>
<!-- glosario 10 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal -->
<div class="modal fade" id="glosario10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="uploaderModificarGlossario.php" method="POST" enctype="multipart/form-data">
                 <input value="10" hidden name="id">
                      <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                       </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;"  name="titulo" formControlName="pass" class="form-control text-center" require value="<?php echo $text1Glosario10 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $text1topday10 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <textarea style="background-color:#DCC8A5;width: 50%;min-height: 500px;"type="text" name="text" formControlName="pass" class="form-control text-center" ><?php echo $text2Glosario10 ?></textarea>

                                            <input type="file" name="imagen" class="form" class="form-control text-center"><?php echo !empty($urlGlosario10) ? $urlGlosario10 : '' ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                          <button class="btn btn-success" type="submit" >
                                         Accettare
                                        </button>
                                    </div>
                            </form>
                </div>
            </div>
    </div>
</div>
</body>  
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../Librerias/boostrap/js/popper.min.js"></script>
<script type="text/javascript" src="../Librerias/boostrap/js/bootstrap.min.js"></script>
</html>

