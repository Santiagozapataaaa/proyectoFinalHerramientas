<?php 
include 'config.php';

if ($_GET['pantalla'] == ''){
    $controlador = 'inicioController';
}else{
    foreach ($lista_controladores as $pantalla => $controlador_actual) {
        if (strpos($_GET['pantalla'], $pantalla) === 0) {
            $controlador = $controlador_actual;
            $url_adicional = substr($_GET['pantalla'],strlen($pantalla));
        }
    }
}

if($controlador == ''){
    $controlador = "ERROR 404";
}

include('./controller/'.$controlador.'.php');

if($url_adicional == '')
{
    $controlador::index();
}
else
{
    $url_adicional = str_replace('/', '', $url_adicional);
    $controlador::{$url_adicional}();
}