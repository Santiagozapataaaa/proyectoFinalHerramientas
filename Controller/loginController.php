<?php
    require_once("./model/loginModel.php");
    class loginController{

        

        static function index(){
            include './view/login.php';
        }
    }