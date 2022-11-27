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
<body id="body" class="body">
    <div class="container">
    
     
        <div>
            <div>
              <h2 class="mb-4 text-white" id="bienvenida">Benvenuto</h2>
                  <button type="button" class="btn btn-danger" >
                      <a href="logout.php" class="text-white" id="cerraCesion" >Chudi sesion</a>
                 </button>
                 
                       <div class="contenedorSelect">
                    		<form action="" class="formulario-idiomas">
                    			<div class="selectbox">
                    				<div class="select" id="select">
                    					<div class="contenido-select">
                    						<h4 class="titulo" id="idioma">Ho selezionato la lingua</h4>
                    					</div>
                    					<i class="fas fa-angle-down"></i>
                    				</div>
                    
                    				<div class="opciones" id="opciones">
                    				
                    					<a href="#" class="opcion">
                                            <button onclick="changeText()" style="border:none;border: radius 10px;background-color: transparent;margin-top:5px">
                    						<div class="contenido-opcion">
                    							<img src="../imagenes/spain.png" alt="">
                    							<div class="textos">
                    								<h1 class="titulo">España</h1>
                    							</div>
                    						</div>
                                            </button>
                    					</a>
                    				
                    					<a href="#" class="opcion">
                                          <button onclick="changeTextEnItalia()" style="border:none;border: radius 10px;background-color: transparent;margin-top:5px">
                    						<div class="contenido-opcion">
                    							<img src="../imagenes/italia.png" alt="">
                    							<div class="textos">
                    								<h1 class="titulo">Italiano</h1>
                    							</div>
                    						</div>
                                          </button>
                    					</a>
                    					<a href="#" class="opcion">
                                         <button onclick="changeTextEn()" style="border:none;border: radius 10px;background-color: transparent;margin-top:5px">
                    						<div class="contenido-opcion">
                    							<img src="../imagenes/reino-unido.png" alt="">
                    							<div class="textos">
                    								<h1 class="titulo">Ingles</h1>
                    							</div>
                    						</div>
                                         </button>
                    					</a>
                    					<a href="#" class="opcion">
                                          <button onclick="changueTextFrancia()" style="border:none;border: radius 10px;background-color: transparent;margin-top:5px">
                    						<div class="contenido-opcion">
                    							<img src="../imagenes/francia.png" alt="">
                    							<div class="textos">
                    								<h1 class="titulo">Frances</h1>
                    							</div>
                    						</div>
                                          </button>
                    					</a>
                    				</div>
                    			</div>
                    
                    			<input type="hidden" name="pais" id="inputSelect" value="">
                    		</form>
                    
                    	</div>
            </div>
                <div class="contenedorbtn"> 
                     <div class="btn-calendario">
                        <!--<form class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="0" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Calendario" class="btn btn-primary btn-lg">
                        </form>
                        -->
                        <button id="topDayNombre"type="button" class="btn btn-primary btn-lg" data-target="#Calendario1" data-toggle="modal" >Calendario</button>
                     </div>
                     <div>
                     <button id="hoyNombre" type="button" class="btn btn-primary btn-lg"  onclick="obtenerDia(dia=<?php  $DateAndTime = date('d');echo $DateAndTime;?>,mes=<?php  $DateAndTime = date('m');$DateAndTime1=$DateAndTime-1;echo $DateAndTime1;?>,ano=<?php  $DateAndTime = date('y');$DateAndTime1=$DateAndTime+2000;echo $DateAndTime1;?>)" >Oggi</button>
                    </div> 
                     <div>
                        <button id="topDayNombre"type="button" class="btn btn-primary btn-lg" data-target="#topday" data-toggle="modal" >Top Day</button>
                    </div> 
                    <div>
                        <button id="glosarioNombre"type="button" class="btn btn-primary btn-lg" data-target="#glosario" data-toggle="modal">Glossario</button>
                    </div>
                    <div>
                        
                    </div> 
                    <div>
                        
                    </div>
                    <div>
                        <!--<button type="button" class="btn btn-primary btn-lg" data-target="#invitaAmigo" data-toggle="modal">Invita un amico</button>
                        <button id="miPerfilNombre"type="button" class="btn btn-primary btn-lg" data-target="#miPerfil" data-toggle="modal">Profilo</button>-->
                    </div>
                    <div>
                        
                    </div> 
                    <div>
                        
                    </div>
                </div> 
           </div>
        
    </div>
         <!--modal dia hoy -->
    <main class="container">
    <div class="modal fade" id="ventanaModalHoy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="tituloVentaa"><?php  $DateAndTime = date('d-m-Y');  
                            echo $DateAndTime;
                            ?></h5>
                            
                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    <form  action="" method="" class="popo" >
                            <div class="form-group">
    
                                <input name="fechaHoy" type="text" hidden value="<?php  $DateAndTime = date('d-m-Y');  
                            echo $DateAndTime;
                            ?>">
                                <h6 class="h3 text-black"></h6>
                                
                                    <div style="background-color:#DCC8A5;min-height: 200px;"type="password" name="text1" formControlName="pass" class="form-control text-center" require disabled><?php if(empty($text1Hoy)){$text1Hoy='.';}echo $text1Hoy ?><img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php if(empty($urlHoy)){$urlHoy='.';}echo $urlHoy ?>"></div>
                                <h6 class="h3 text-black"></h6>
                                    <textarea style="background-color:#DCC8A5;min-height: 200px;" type="password" name="text2" formControlName="pass" class="form-control text-center" require disabled><?php if(empty($text2Hoy)){$text2Hoy='.';}echo $text2Hoy ?></textarea>
                                <h6 class="h3 text-black"></h6>
                                    <textarea style="background-color:#DCC8A5;min-height: 200px;" type="password" name="text3" formControlName="pass" class="form-control text-center" require disabled><?php if(empty($text3Hoy)){$text3Hoy='.';}echo $text3Hoy ?></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="button" data-dismiss="modal">
                                Chiudere
                                </button>
                        
                            </div>
                        </form>

                    
                </div>
            </div>
        </div>
    </main>
    <!--modal dia hoy-->
    <!-- notificaciones -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >
            </button>

            <!-- Modal -->
            <div class="modal fade" id="notificaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="">Notifiche</h5>
                            
                    </div>

                    <div class="modal-body">

                    <form  action="" method="" class="popo" >
                            <div class="form-group">
                            <h6 class="h3 text-black"></h6>
                                    <input style="background-color:#DCC8A5;border:none;" type="password" name="text1" formControlName="pass" class="form-control text-center" require disabled><?php if(empty($text1Notificacion)){$text1Notificacion='.';}echo $text1Notificacion ?></input>
                                 
                                 <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php if(empty($urlNotificacion)){$urlNotificacion='.';}echo $urlNotificacion ?>">
                        
                                <h6 class="h3 text-black"></h6>
                                    <textarea style="background-color:#DCC8A5;width: 50%;height:120px"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php if(empty($text2Notificacion)){$text2Notificacion='.';}echo $text2Notificacion ?></textarea>
                                
                                
                               
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="button" data-dismiss="modal">
                                Chiudere
                                </button>
                        
                            </div>
                         </form>
                        </div>
                    </div>
            </div>
            </div>


                 <!-- Modal glosario -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#glosario" hidden>
            
            </button>

            <!--  -->
            <div class="modal fade" id="glosario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Glossario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button class="btn btn-warning" type="button" data-dismiss="modal">Chiudere</button>
                        
                    </div>
                    </div>
            </div>
            </div>
            <!-- fin modal glosario -->
             <!--modal top day -->
        <main class="container">
        <div class="modal fade" id="topday" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="tituloVentaa"><?php  $DateAndTime = date('d-m-Y');  
                            echo $DateAndTime;
                            ?></h5>
                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                       mensaje de welcome.php

                    <?php if(!empty($text1topday1)){ echo '<button data-target="#topday1" data-toggle="modal" class="botontopday">'.$text1topday1.'<img src="'.$urltopday1.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday2)){ echo '<button data-target="#topday2" data-toggle="modal" class="botontopday">'.$text1topday2.'<img src="'.$urltopday2.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday3)){ echo '<button data-target="#topday3" data-toggle="modal" class="botontopday">'.$text1topday3.'<img src="'.$urltopday3.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday4)){ echo '<button data-target="#topday4" data-toggle="modal"class="botontopday">'.$text1topday4.'<img src="'.$urltopday4.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday5)){ echo '<button data-target="#topday5" data-toggle="modal"class="botontopday">'.$text1topday5.'<img src="'.$urltopday5.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday6)){ echo '<button data-target="#topday6" data-toggle="modal"class="botontopday">'.$text1topday6.'<img src="'.$urltopday6.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday7)){ echo '<button data-target="#topday7" data-toggle="modal"class="botontopday">'.$text1topday7.'<img src="'.$urltopday7.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday8)){ echo '<button data-target="#topday8" data-toggle="modal"class="botontopday">'.$text1topday8.'<img src="'.$urltopday8.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday9)){ echo '<button data-target="#topday9" data-toggle="modal"class="botontopday">'.$text1topday9.'<img src="'.$urltopday9.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                        <?php if(!empty($text1topday10)){ echo '<button data-target="#topday10" data-toggle="modal"class="botontopday">'.$text1topday10.'<img src="'.$urltopday10.'" alt="" style="width: 25%;;height: 100%;float:right;"></button>';}?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">Chiudere</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--fin modal top day-->
    <!--modaL CALENDARIO MODIFICADO -->
        <main class="container">
        <div class="modal fade" id="Calendario1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="tituloCalendarioNuevo">Seleziona il mese</h5>
                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="0" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Gennaio" class="btn btn-primary btn-sm" onclick="changeFondo()">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="1" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Febbraio" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="2" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Marzo" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="3" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Aprile" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="4" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Maggio" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="5" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Giugno" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="6" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Luglio" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="7" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Agosto" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="8" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Settembre" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="9" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Ottobre" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="10" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Novembre" class="btn btn-primary btn-sm">
                        </form>
                        
                        <form style="display: inline;" class="btn-calendario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                        <input type="text" name="numero" value="11" hidden>
                        <input id="calendarioNombre" type="submit" data-target="#calendario" data-toggle="modal" value="Dicembre" class="btn btn-primary btn-sm">
                        </form>
                   
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--fin CALENDARIO MODIFICADO-->
     <!-- perfil -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miPerfil" hidden>
            
            </button>

            <!-- Modal -->
            <div class="modal fade" id="miPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Il mio Profilo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 <h5>Nome: <?php echo $_SESSION['usuario'] ?></h5>
                 <h5>Utente: <?php echo $nombre_Usu; ?></h5>
                 <h5>Mail: <?php echo $Mail_Usu; ?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudere</button>
                    
                </div>
                </div>
            </div>
            </div>


           
 <!------------------------------ INICIO DE CROTADAS -------------------->

     <!--modal dia a dia -->
                 <main class="container">

                  <!--  ---------------------->

                  <div class="modal" id="dia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    
                  <!--  ---------------------->
                  
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                           <div class="modal-header">
                               <h4 id="fechaDia"></h4>
                             <h5 id="tituloVentaa"></h5>
                                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                   <span aria-hidden="true">&times;</span>
                             </button>
                          </div>

                             <div class="modal-body">

                                 <form  action="" method="" >
                                        <div class="form-group">
                                          <!--<input type="text" id="titulo" name="titulo" disabled value="">-->
                                        
                                        
                                        <div id="con1" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;max-height: 600px;margin-top:10px;word-break: break-all; display:flex;"type="password"  class="form-control text-center" require disabled><H5 id="titulo" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text1" name="text1"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image" class="imagen" src=""></div></div>
                                        
                                        <div id="con2" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo1" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text2" name="text2"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image1" class="imagen" src=""></div></div>
                                           
                                        <div id="con3" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo2" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text3" name="text3"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image2" class="imagen" src=""></div></div>
                                        
                                        <div id="con4" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo3" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text4" name="text4"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image3" class="imagen" src=""></div></div>
                                         
                                        <div id="con5" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo4" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text5" name="text5"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image4" class="imagen" src=""></div></div>
                                        
                                        <div id="con6" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo5" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text6" name="text6"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image5" class="imagen" src=""></div></div>
                                        
                                        <div id="con7" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo6" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text7" name="text7"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image6" class="imagen" src=""></div></div>
                                        
                                        <div id="con8" value="naosnaos" style="background-color:#DCC8A5;min-height: 200px;margin-top:10px;word-break: break-all;"type="password"  class="form-control text-center" require disabled><H5 id="titulo7" style="float:left;text-align: left;width: 60%;position: absolute;"></H5><div style="float:left;text-align: left;width: 60%;margin-top:30px;" id="text8" name="text8"><p ></p></div><div style="float:right;display: inline-block;margin-top: 30px;margin-left:20px;"><img id="my_image7" class="imagen" src=""></div></div>
                                        <!--  ---------------------->
                                        
                                        <button type="button" id="btnAnterior" style="width: 30px;height: 200px;float:left;postion:absolute;margin-left:-10px;margin-top:-200px;left:0;position: absolute;"><</button>
                                           
                                        <button type="button" id="btnSiguiente" style="width: 30px;height: 200px;float:right;postion:absolute;margin-right:-10px;margin-top:-200px;right:0;position: absolute;">></button>
                              
                                        <!--  ---------------------->
                              
                              
                              
                                    </div>
                              <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>                 
                                      </div>
                                  </form>

                              </div>

                    
                           </div>
                         </div>
                     </div>
                    </main>

    <!--modal dia hoy-->

    <!-- topday1 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >
            </button>

            <!-- Modal -->
            <div class="modal fade" id="topday1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                      <div class="modal-header">
                        <h5 id="">topday</h5>      
                       </div>
                        <div class="modal-body">
                            <form  action="" method="" class="popo" >
                                <div class="form-group">
                                    <h6 class="h3 text-black"></h6>
                                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday1 ?>"></input>
                                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday1 ?>">
                                
                                        <h6 class="h3 text-black"></h6>
                                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday1 ?></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                        Chiudere
                                        </button>
                                    </div>
                            </form>
                        </div>
            </div>
            </div>
            </div>
<!-- topday1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 2-->
<div class="modal fade" id="topday2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday2 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday2 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday2 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>


<!-- topday2 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 3-->
<div class="modal fade" id="topday3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday3 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday3 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday3 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday3 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 4-->
<div class="modal fade" id="topday4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday4 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday4 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday4 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday4 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 5-->
<div class="modal fade" id="topday5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday5 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday5 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:felx;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday5 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday5 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 6 -->
<div class="modal fade" id="topday6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday6 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday6 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday6 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday6 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 7-->
<div class="modal fade" id="topday7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday7 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday7 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday7 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday7 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal 8-->
<div class="modal fade" id="topday8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday8 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday8 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday8 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- topday8 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal -->
<div class="modal fade" id="topday9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday9 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday9 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;display:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday9 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
                        </button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
</div>
<!-- topday 10 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notificaciones" hidden >

</button>
<!-- Modal -->
<div class="modal fade" id="topday10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="">topday</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1topday10 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urltopday10 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2topday10 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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

            <!-- Modal -->
            <div class="modal fade" id="glosario1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="">Glossario</h5>      
                    </div>
                     <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario1 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario1 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario1 ?></div>
                    </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="button" data-dismiss="modal">
                                Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario2 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario2 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario2 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario3 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario3 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario3 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario4 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario4 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario4 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario5 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario5 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario5 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario6 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario6 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario6 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario7 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario7 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario7 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario8 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario8 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario8 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glossario</h5>
            </div>
            <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario9 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario9 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario9 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
            <div class="modal-header">
                <h5 id="">Glosario</h5>
            </div>
             <div class="modal-body">
            <form  action="" method="" class="popo" >
                    <div class="form-group">
                    <h6 class="h3 text-black"></h6>
                            <input style="background-color:#DCC8A5;border:none;font-weight: bold;" name="text1" formControlName="pass" class="form-control text-center" require disabled value="<?php echo $text1Glosario10 ?>"></input>
                            <img style="float:right;width: 150px;height: 150px;border-radius: 10px;" src="<?php echo $urlGlosario10 ?>">
                        <h6 class="h3 text-black"></h6>
                            <div style="background-color:#DCC8A5;width: 50%;displey:flex;"type="text" name="text1" formControlName="pass" class="form-control text-center"  disabled><?php echo $text2Glosario10 ?></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Chiudere
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
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeromes =$_POST['numero'];
    
   function DevuelveScript($mes)
   {
        
        $script3 = '<form method="post" action=""><input type="text" name="numero" value="';
        $script4 = '" hidden><input type="submit" value="<" style="left:0;float: left;position: absolute;height: 350px;border-radius: 10px;border: 1px solid #ddd;"></form>';
        $scripNumMes1=0;
        $scripNumMes2=1;
        $scripNumMes3=2;
        $scripNumMes4=3;
        $scripNumMes5=4;
        $scripNumMes6=5;
        $scripNumMes7=6;
        $scripNumMes8=7;
        $scripNumMes9=8;
        $scripNumMes10=9;
        $scripNumMes11=10;
        $scripNumMes12 =11;
        $script7 = '" hidden><input type="submit" value=">" style="margin-top:-1%;position: absolute;float: right;height: 350px;border-radius: 10px;border: 1px solid #ddd;right: 0;"></form>';
        
        $script13 = '<a class="btn btn-warning" type="submit" href="https://calendariolunaretopday.com/php/welcome.php" style="display: inline;width: 30%;
        margin-left: 35%;
        margin-right: 35%;
        margin-top: 0px;margin-bottom: 100px;">
        Chiudere
        </a>';
        $titulo='';
        
       if ($mes == 0)
       {
           $cantdias = 31;
           $titulo='<div class="contenedore" style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Gennaio</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px;"></h2>';
          
           $volverMes=$script3.$scripNumMes12.$script4;
           $siguienteMes=$script3.$scripNumMes2.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
           
           
       
           
           
       }
       else if($mes == 2){
           $cantdias = 31;
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Marzo</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $volverMes=$script3.$scripNumMes2.$script4;
           $siguienteMes=$script3.$scripNumMes4.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
           
       
       
       }else if($mes == 4){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Maggio</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 31;
           $volverMes=$script3.$scripNumMes4.$script4;
           $siguienteMes=$script3.$scripNumMes6.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if($mes == 6){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Luglio</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 31;
           $volverMes=$script3.$scripNumMes6.$script4;
           $siguienteMes=$script3.$scripNumMes8.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if($mes == 7){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Agosto</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 31;
           $volverMes=$script3.$scripNumMes7.$script4;
           $siguienteMes=$script3.$scripNumMes9.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if($mes == 9){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Ottobre</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 31;
           $volverMes=$script3.$scripNumMes9.$script4;
           $siguienteMes=$script3.$scripNumMes11.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if($mes == 11){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Dicembre</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 31;
           $volverMes=$script3.$scripNumMes11.$script4;
           $siguienteMes=$script3.$scripNumMes1.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }
       else if ($mes == 3)
       {
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Aprile</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 30;
           $volverMes=$script3.$scripNumMes3.$script4;
           $siguienteMes=$script3.$scripNumMes5.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if ($mes == 5){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Giugno</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 30;
           $volverMes=$script3.$scripNumMes5.$script4;
           $siguienteMes=$script3.$scripNumMes7.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if ($mes == 8){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Settembre</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 30;
           $volverMes=$script3.$scripNumMes8.$script4;
           $siguienteMes=$script3.$scripNumMes10.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }else if ($mes == 10){
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Novembre</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 30;
           $volverMes=$script3.$scripNumMes10.$script4;
           $siguienteMes=$script3.$scripNumMes12.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }
       else 
       {
           $titulo='<div class="contenedore" Style="position:absolute; z-index:300;top: 0;"><h1 style="text-align:center;background-color: #fff;">Febbraio</h1><h2 style="text-align:center;background-color: #fff;position: absolute;
           z-index: -10;width: 100%;height: 90%;margin-top:-50px"></h2>';
           $cantdias = 28;
           $volverMes=$script3.$scripNumMes1.$script4;
           $siguienteMes=$script3.$scripNumMes3.$script7;
           echo $titulo;
           echo $volverMes;
           echo $siguienteMes;
       }
       for ($x= 1; $x <= $cantdias; $x++)
       {
           $script1 ='<button id="boton-modal" value="" onclick="obtenerDia('. $x . "," . $mes . ",2022" . ')" class="btn btn-primary btn-circle btn-sm m" style="width: 50px;height: 50px;">';
           $script2 ='</button>';
           $scriptentero =$script1.$x.$script2;
           
           echo $scriptentero; 
       }
       
       echo $script13;
       $cierreDiv ='</div>';
       echo $cierreDiv;
       
       
       
         
     
   }
   DevuelveScript($numeromes);
   
   
}
?>