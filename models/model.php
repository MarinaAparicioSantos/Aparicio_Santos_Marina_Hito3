<?php

$servidor = "localhost";
$baseDatos = "marinaproyectointegrado";
$user = "developer";
$pass = "developer";

//obtenerUsuario login
function obtenerUsuario($nombre_usuario)
{

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta = $conexion->prepare("SELECT dni,contrasenya,tipo,nombre_usuario  FROM usuarios WHERE nombre_usuario=:nombre_usuario");
        $parametros = array(":nombre_usuario" => $nombre_usuario);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
}