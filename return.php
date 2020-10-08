<?php
header("Access-Control-Allow-Origin: *"); // Quem tera permissao na requisicao
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); // Controle de todos os metodos usados na requisicao
header("Content-Type: application/json"); // Especificando que e um JSON
echo json_encode($array); // Transformando a requisisao em JSON
exit;