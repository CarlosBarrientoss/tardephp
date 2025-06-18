<?php

require_once "app/modelos/login.model.php";

class LoginController{

    public static function ctrVerifyUser(){
    
        if(isset($_POST["email"])){
            $value = $_POST["email"];

            $response = LoginModel::mdlVerifyUser($value);

            if($response && $_POST["password"] === $response["user_password"]){
                session_start();
                $_SESSION["authenticated"] = "ok";
                $_SESSION["user_name"] = $response["user_name"];
                header("Location: index.php");
            }else{
                echo '<div class="alert alert-danger text-center">Credenciales incorrectas</div>';
            }


        }


    }


}