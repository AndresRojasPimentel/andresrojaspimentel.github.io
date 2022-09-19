<?php

    require_once('../modelo/verificar.php');
    $users= new Usuario();
    $datos=$users->getUsuarios();
    require_once('../vista/listausuario.php');
?>