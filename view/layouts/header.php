<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./view/img/fenrir.ico" type="image/x-icon">
    <link rel="stylesheet" href="./view/css/index.css">
    <link rel="stylesheet" href="./view/css/producto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Fenrir</title>
</head>

<body>
    <nav>
        <div class="col logo">
            <a class="nav-link" href="inicio"><img src="./view/img/Logotipo_fenrir_black.png" alt=""></a>
        </div>
        <div class="row">
            <div class="menu">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                    <?php
                    session_start();
                    if ($_SESSION["userRol"] == 'Admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="producto">Producto</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                    <div class="">
                        <li class="nav-item">
                            <i class="bi bi-search" id="search"></i>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-cart"></i> : <span>0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="product">
                                    <img src="./view/img/background.jpg" alt="" class="img-shop">
                                    <p class="texto"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="valor">1 X $20.000</p>
                                </li>
                                <li class="separador"></li>
                                <li class="product">
                                    <img src="./view/img/background.jpg" alt="" class="img-shop">
                                    <p class="texto"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="valor">1 X $20.000</p>
                                </li>
                                <li class="separador"></li>
                                <li class="botones">
                                    <button class="btn btn-outline-success cart-shop">Ir al Carrito</button>
                                    <button class="btn btn-outline-success">Realizar Pago</button>
                                </li>
                            </ul>
                        </li>
                        <?php if (isset($_SESSION['userRol'])) { ?>
                            <li class="nav-item menu-usuario">
                                <a class="nav-link dropdown-toogle" data-bs-toggle="dropdown"><i class="bi bi-person-circle"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="opcion">
                                        <a href="" class="nav-link">Perfil</a>
                                    </li>
                                    <li class="opcion">
                                        <a href="" class="nav-link">Opciones</a>
                                    </li>
                                    <li class="separador"></li>
                                    <li class="nav-item botones">
                                        <a href="inicio/salir"><button class="btn btn-outline-danger" id="logout">Cerrar Sesion</button></a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="iniciar_sesion"><i class="bi bi-box-arrow-in-right"></i></a>
                            </li>
                        <?php } ?>
                    </div>
                </ul>
            </div>
            <div class="col hidde" id="frmsearch">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Contenido -->