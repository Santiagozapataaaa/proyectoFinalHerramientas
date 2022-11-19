<?php
require_once("./model/loginModel.php");
class loginController
{
    // private $model;
    // private $view;


    // public function __construct()
    // {
    //     $this->model = new loginModelo();
    // }

    static function index()
    {
        include './view/login.php';
    }

    static function login()
    {
        if(isset($_POST['enviar']))
        {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
        }

        $datos = [$usuario, $password];
        $consulta = new loginModelo();

        $result = $consulta->consultar("tblusuarios", $datos);

        if ($result) {
            header('location: ../inicio');
            die();
        } else {
            header('location: ../iniciar_sesion');
            die();
        }
    }

    
}


// if (isset($_POST["btn-producto"])) {

//     $file = $_FILES["file-upload"]["name"]; //Nombre de nuestro archivo

//     $validator = 1; //Variable validadora

//     $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo

//     $url_temp = $_FILES["file-upload"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

//     //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
//     $url_insert = dirname(__FILE__) . "/img/productos"; //Carpeta donde subiremos nuestros archivos

//     //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
//     $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

//     //Si la carpeta no existe, la creamos
//     if (!file_exists($url_insert)) {
//         mkdir($url_insert, 0777, true);
//     };

//     //Validamos el tamaño del archivo
//     $file_size = $_FILES["file-upload"]["size"];
//     if ($file_size > 2000000) {
//         echo "El archivo es muy pesado";
//         $validator = 0;
//     }

//     //Validamos la extensión del archivo
//     if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png") {
//         echo "Solo se permiten imágenes tipo JPG, JPEG, PNG";
//         $validator = 0;
//     }

//     //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
//     if ($validator == 1) {
//         if (move_uploaded_file($url_temp, $url_target)) {
//             echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
//         } else {
//             echo "Ha habido un error al cargar tu archivo.";
//         }
//     } else {
//         echo "Error: el archivo no se ha cargado";
//     }
// }

// //FORMULARIO
// ?>
