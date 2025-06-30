<?php

require_once dirname(__DIR__,2) . "/private/lib/php/ejecuta.php";
require_once dirname(__DIR__) . "./const/USUARIO.php";


ejecuta(function () {
 session_start();
  $usuario = isset($_SESSION[USUARIO]) ? $_SESSION[USUARIO] : "";
 return [
   USUARIO => $usuario
 ];
});


