<?php

require_once "app/modelos/role.model.php";

class RoleController{

    public static function ctrRoleSave(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $rolName = trim($_POST["roleName"]);
            $roleDescription = trim($_POST["roleDescription"]);

            $data = [
                "role_name" => $rolName,
                "role_description" => $roleDescription,
            ];

           $response = RoleModel::mdlRoleSave($data);

            if ($response === "ok") {
                echo "<div class='alert alert-success'>Rol registrado correctamente</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al registrar rol</div>";
            }
        }
    }
}