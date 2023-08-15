<?php

require_once("Conexion.php");

$_POST = json_decode(file_get_contents("php://input"),true);

if(isset($_GET['accion']) && $_GET['accion'] == "getPeliculas") Peliculas::getPeliculas();
if(isset($_GET['accion']) && $_GET['accion'] == "getPelicula") Peliculas::getPelicula();

class Peliculas
{
    public static function getPeliculas()
    {
        $sql = "SELECT * FROM peliculas ORDER BY nombre ASC;";

        $sql = Conexion::bd()->query($sql);

        echo json_encode($sql->fetchAll(PDO::FETCH_OBJ));
    }

    public static function getPelicula()
    {
        $sql = "SELECT * FROM peliculas WHERE ID = ?;";

        $sql = Conexion::bd()->prepare($sql);

        $sql->execute([$_GET['ID']]);

        echo json_encode($sql->fetch(PDO::FETCH_OBJ));
    }
}


