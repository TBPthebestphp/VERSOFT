<?php

require_once "VERSOFT/Controladores/getController_obtener/Obtener.php";

$table = array_filter(explode("/",$_SERVER['REQUEST_URI']))[1];

$response = Obtener::getData($table);

$json = [
    "estatus" => 200,
    "filas" => count($response),
    "response" => $response
];

echo json_encode($json,http_response_code($json['estatus']));