<?php

require_once "VERSOFT/Modelos/ModeloGet_Obtener/Obtener.php";

class Obtener {

    public static function getData ($table,$select) {

        $response = Obtener_::getData($table,$select);

        return $response;

    }

    public static function getDataFilter ($table,$select,$linkTo,$equalTo) {

        $response = Obtener_::getDataFilter($table,$select,$linkTo,$equalTo);

        return $response;

    }

}