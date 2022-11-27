<?php
include 'conect.php';

$nome =$_GET['nome'];
$usuario =$_GET['utente'];
$clave =$_GET['pass'];
$calve1 =$_GET['pass1'];
$mail =$_GET['mail'];


 if($nome){

    $insertar="INSERT INTO `users`(`nome`, `utente`, `pass`, `mail`) VALUES ('$nome','$usuario','$clave','$mail')";
    $resultado=mysqli_query($DBConnection,$insertar);
    echo '<script language="javascript">alert("Utente registrato con successo");
    window.location.href = "../index.php";
         </script>';
         mysqli_free_result($resultado);
 }else{
    echo '<script language="javascript">alert("Errore registrare nuovamente l utente");
    window.location.href = "../index.php";
    </script>';
 }
 
 mysqli_close($DBConnection);
?>