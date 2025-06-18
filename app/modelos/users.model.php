<?php

require_once "conexion.php";

class UserModel{
    public static function mdlUserSave($data){
        $stmt = Conexion::conectar()->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (:name, :email, :password)");

        $stmt->bindParam(":name", $data["user_name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["user_email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["user_password"], PDO::PARAM_STR);

        return $stmt->execute() ? "ok" : "error";
    }
}