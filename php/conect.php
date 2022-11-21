<?php

   //$DBConnection = mysqli_connect("localhost:3306","cal_root","Martina1988$","cal_calendario");
  $DBConnection = mysqli_connect("localhost:3306","root","coala090","cal_calendario");
   if(!$DBConnection){
    echo'error de coneccion';
}
   mysqli_set_charset($DBConnection,"utf8");
   
?>