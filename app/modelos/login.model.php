<?php
require_once "conexion.php";

class LoginModel{

    static public function mdlVerifyUser($table,  $email, $value){

        $sql = "SELECT * FROM $table WHERE $email = :$email";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":".$email, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}