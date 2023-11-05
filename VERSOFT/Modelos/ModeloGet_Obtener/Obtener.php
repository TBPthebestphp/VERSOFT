<?php

require_once "VERSOFT/Modelos/Conexion/conexion.php";

class Obtener_ {

    public static function getData ($table,$select) {

        require_once "VERSOFT/Modelos/Conexion/data/data.php";

        $sql = "SELECT $select FROM $table";

        $conex = new Conexion;

        $data = $conex->conectar($conexion)->prepare($sql);;

        $data->execute();

        return $data->fetchAll(PDO::FETCH_CLASS);

    }

}