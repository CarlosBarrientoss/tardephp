<?php

require_once "app/modelos/users.model.php";

class UserController{

    public static function ctrUserSave(){

        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $userName = trim($_POST["userName"]);
            $userEmail = filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL);
            $userPassword = $_POST["userPassword"];

            $passwordHash = password_hash($userPassword, PASSWORD_DEFAULT);

            $data = [
                "user_name" => $userName,
                "user_email" => $userEmail,
                "user_password" => $passwordHash
            ];

            $response = UserModel::mdlUserSave($data);

            if ($response === "ok") {
                echo "<div class='alert alert-success'>Usuario registrado correctamente</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al registrar usuario</div>";
            }

        }

    }
}