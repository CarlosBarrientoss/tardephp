<?php

require_once "app/modelos/login.model.php";

class LoginController{

    public static function ctrVerifyUser(){
    
        if(isset($_POST["email"])){
            $value = $_POST["email"];

            $response = LoginModel::mdlVerifyUser($value);

            if($response && $_POST["password"] === $response["user_password"]){


                $idUser = $response["pk_id_user"];

                $idRole = LoginModel::mdlVerifyRole($idUser);

                session_start();
                $_SESSION["authenticated"] = "ok";
                $_SESSION["user_name"] = $response["user_name"];
                $_SESSION["USER_ID"] = $response["pk_id_user"];
                $_SESSION["ROLE_ID"] = $idRole["fk_id_role"];
                header("Location: index.php");
            }else{
                echo '<div class="alert alert-danger text-center">Credenciales incorrectas</div>';
            }


        }


    }


}