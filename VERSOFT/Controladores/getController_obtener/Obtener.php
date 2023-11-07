<?php

require_once "VERSOFT/Modelos/ModeloGet_Obtener/Obtener.php";

class Obtener {

    public static function getData ($table,$select,$orderBy,$orderMode) {

        $response = Obtener_::getData($table,$select,$orderBy,$orderMode);

        return $response;

    }

    public static function getDataFilter ($table,$select,$linkTo,$equalTo,$orderBy,$orderMode) {

        $response = Obtener_::getDataFilter($table,$select,$linkTo,$equalTo,$orderBy,$orderMode);

        return $response;

    }

}