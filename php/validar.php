<?php 
include 'conect.php';

$usuario =$_GET['utente'];
$clave =$_GET['pass'];
$admin = 'angelo';
$adminpass='4ng3l022';
$admin1 = 'Mauro';
$adminpass1='mf100179';

//importo la conexion a la base de datos 


$consulta="SELECT * FROM `users` WHERE `utente`='$usuario' and `pass`='$clave'";
$resultado=mysqli_query($DBConnection,$consulta);

$filas=mysqli_num_rows($resultado);
if($usuario===$admin && $adminpass===$clave){

    session_start();
    $_SESSION['usuario']=$usuario;
    header("location:welcomeAdmin.php");

}else if($usuario===$admin1 && $adminpass1===$clave){

    session_start();
    $_SESSION['usuario']=$usuario;
    header("location:welcomeAdmin.php");

}else if($filas>0){
      session_start();
    $_SESSION['usuario']=$usuario;
    header("location:welcome.php");
    
}else{
    echo "error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($DBConnection);