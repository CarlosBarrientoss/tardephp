<?php
require_once "conexion.php";

class LoginModel{

    static public function mdlVerifyUser($value){

        $sql = "SELECT * FROM users WHERE user_email = :email";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":email", $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}