<?php
require_once("./model/productoModel.php");
class productoController
{

    static function index()
    {

        $producto = new productoModelo;
        $datos = $producto->store('tblproductos');
        include './view/producto.php';
    }

    static function enviar()
    {
        if(isset($_POST['btn-producto']))
        {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $tipo = $_POST['tipo'];

            $file = $_FILES["file-upload"]["name"];
            $url = "./view/img/productos"."/".$file;

            $validator = 1; //Variable validadora

            $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo
        
            $url_temp = $_FILES["file-upload"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 
        
            //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
            $url_insert = dirname('./view/img') . "/productos"; //Carpeta donde subiremos nuestros archivos
        
            //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
            $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
        
            //Si la carpeta no existe, la creamos
            if (!file_exists($url_insert)) {
                mkdir($url_insert, 0777, true);
            };
        
            //Validamos el tamaño del archivo
            $file_size = $_FILES["file-upload"]["size"];
            if ($file_size > 2000000) {
                echo "El archivo es muy pesado";
                $validator = 0;
            }
        
            //Validamos la extensión del archivo
            if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png") {
                echo "Solo se permiten imágenes tipo JPG, JPEG, PNG";
                $validator = 0;
            }
        
            //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
            if ($validator == 1) {
                if (move_uploaded_file($url_temp, $url_target)) {
                    echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
                } else {
                    echo "Ha habido un error al cargar tu archivo.";
                }
            } else {
                echo "Error: el archivo no se ha cargado";
            }
        }

        $datos = [$producto, $tipo, $descripcion,$precio ,$cantidad,$url];
        $consulta = new productoModelo();

        $result = $consulta->registrar("tblproductos", $datos);

        if ($result) {
            header('location: ../producto');
            die();
        } else {
            header('location: ../producto');
            echo "no se pudo insertó el producto";
            die();
        }
    }
}