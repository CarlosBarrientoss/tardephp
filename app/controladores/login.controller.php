<?php

require_once "app/modelos/login.model.php";

class LoginController{

    static public function ctrVerifyUser(){
    
        if(isset($_POST["email"])){
            $table = "users";
            $email = "user_email";
            $value = $_POST["email"];

            $response = LoginModel::mdlVerifyUser($table,  $email, $value);

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