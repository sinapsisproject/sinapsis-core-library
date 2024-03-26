<?php
require(dirname(__FILE__) .'/../../../../wp-load.php');

class RfCoreUtils {

    public function __construct(){
    }

    public static function insert_user($name, $username , $email , $telefono, $password, $estado, $id_tipo_usuario){



    }


    public static function login_user($usuario = "" , $password = ""){

        $data = [
            "usuario" => $usuario,
            "password" => $password
        ];

        $response = RfCoreCurl::curl('/api/auth', 'GET' , null , $data);

        return $response;

    }


    public static function register_user($nombre = "" , $username = "" , $email = "", $fecha_nacimiento = "" , $telefono = "" , $password = "" , $estado = "" , $id_tipo_usuario = ""){

        $data = [
            "nombre"            => $nombre,
            "username"          => $username,
            "email"             => $email,
            "fecha_nacimiento"  => $fecha_nacimiento,
            "telefono"          => $telefono,
            "password"          => $password,
            "estado"            => $estado,
            "id_tipo_usuario"   => $id_tipo_usuario
        ];

        $response = RfCoreCurl::curl('/api/users/register', 'POST' , null , $data);

        return $response;

    }


}


?>