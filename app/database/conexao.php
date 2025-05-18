<?php

$dominio = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

// Adiciona log para debug
// file_put_contents("erro_webhook.log", "Domínio detectado: " . $dominio . "\n", FILE_APPEND);

// Conexão para ambiente de produção
if ($dominio == "hdfpremios.com.br") {
    $host = "localhost";
    $user = "u937168719_alencar";
    $pass = '^75$o7;Rt';
    $db = "u937168719_alencar_dev";
} else {
    // Conexão para ambiente local/desenvolvimento
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "alencar-hdm";

    // file_put_contents("erro_webhook.log", "Conexão estabelecida com sucesso!\n", FILE_APPEND);

}

$con = new mysqli($host, $user, $pass, $db);
mysqli_set_charset($con, "utf8");
