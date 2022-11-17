<?php 
include 'config.php';
include './controller/inicioController.php';

modeloController::index();

// if ($_GET['pantalla'] == ''){
//     $controlador = 'inicio';
// }else{
//     foreach ($lista_controladores as $pantalla => $controlador_actual) {
//         if (strpos($_GET['pantalla'], $pantalla) === 0) {
//             $controlador = $controlador_actual;
//             $url_adicional = substr($_GET['pantalla'],strlen($pantalla));
//         }
//     }
// }

// if($controlador == ''){
//     $controlador = "ERROR 404";
// }

// include('./view/'.$controlador.'.php');