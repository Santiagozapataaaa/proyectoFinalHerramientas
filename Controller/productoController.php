<?php
require_once("./model/productoModel.php");
class productoController
{

    static function index()
    {
        $producto = new productoModelo;
        $datos = $producto->store('tblproductos');

        if ($datos == false) {
            include './view/producto.php';
        } else {
            require_once('./view/producto.php');
        }
    }

    static function enviar()
    {
        if (isset($_POST['btn-producto'])) {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $tipo = $_POST['tipo'];

            $file = $_FILES["file-upload"]["name"];
        }

        $url_target = subirArchivo($file);

        $datos = [$producto, $tipo, $descripcion, $precio, $cantidad, $url_target];
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

    static function eliminar()
    {
        $dato = $_GET['id'];
        $archivo = $_GET['archivo'];

        $producto = new productoModelo;
        $borrar = $producto->borrar('tblproductos', $dato);

        if ($borrar) {
            unlink($archivo);
            header("location: ../producto");
        }
    }

    static function actualizar()
    {
        if (isset($_POST['actualizar'])) {
            $id = $_GET['id'];
            $producto = $_POST['producto'];
            $tipo = $_POST['tipo'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];

            $file = $_FILES["file-upload"]["name"];
            $url = subirArchivo(($file));

            $datos = [$id, $producto, $tipo, $descripcion, $precio, $cantidad, $url];

            $producto = new productoModelo;
            $actualizar = $producto->actualizar('tblproductos', $datos);

            if ($actualizar) {
                header('location: ../producto');
            } else {
                $msj = 'No se pudo realizar la actualizacion';
                header('location: ../actualizar');
            }
        }
    }
}

function subirArchivo($file)
{
    $validator = 1; //Variable validadora

    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo

    $url_temp = $_FILES["file-upload"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = dirname('./view/img/') . "/img/productos"; //Carpeta donde subiremos nuestros archivos

    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

    //Si la carpeta no existe, la creamos
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };

    //Validamos el tamaño del archivo
    $file_size = $_FILES["file-upload"]["size"];
    if ($file_size > 5000000) {
        $msj = "El Archivo excede el tamaño permitido";
        $validator = 0;
    }

    //Validamos la extensión del archivo
    if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png") {
        $msj = "Solo se permiten imágenes tipo JPG, JPEG, PNG";
        $validator = 0;
    }

    move_uploaded_file($url_temp, $url_target);

    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if ($validator == 1) {
        // if (move_uploaded_file($url_temp, $url_target)) {
            return $url_target;
        // } else {
        //     return "El archivo no se pudo guardar";
        // }
    } else {
        return $msj;
    }
}
