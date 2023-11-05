<?php

require_once "VERSOFT/Modelos/ModeloGet_Obtener/Obtener.php";

class Obtener {

    public static function getData ($table) {

        $response = Obtener_::getData($table);

        return $response;

    }

}