<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
   
   $user1 = "administrador";
   $pass1 = "admin";
   $user2 = "jefe";
   $pass2 = "jefeadministrador";
   $user3 = "admin";
   $pass3 = "administrador";
   
   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   switch ($user) {
      case $user1:
         if ($password == $pass1) {
            header("Location: MenuPrincipal.php");
         } else {
            echo $error_notif;
         }
      break;
      case $user2:
         if ($password == $pass2) {
            header("Location: MenuPrincipal.php");
         } else {
            echo $error_notif;
         }
      break;
      case $user3:
         if ($password == $pass3) {
            header("Location: MenuPrincipal.php");
         } else {
            echo $error_notif;
         }
      break;
      default:
         echo $error_notif;
   }
?>