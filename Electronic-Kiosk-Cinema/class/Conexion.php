<?php

class Conexion
{
    public static function bd()
    {
        $host = "localhost";
        $bd = "peliculas";
        $user = "root";
        $pass = "";

        try {
            $bd = new PDO("mysql:host=" . $host . ";dbname=" . $bd, $user, $pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

        } catch (PDOException $e) {
            exit("Error: " . $e->getMessage());
        }

        return $bd;
    }

}



