<?php

// Cabeçalhos obrigatorios 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");




include_once 'conexao.php'; 


$query = " Select CODIGO_FILIAL, FILIAL from LOJAS_VAREJO";
$ResultadoSQL = Sqlsrv_query($conn1, $query) or die('ERRO ');;
while (@$item = sqlsrv_fetch_array($ResultadoSQL, SQLSRV_FETCH_ASSOC))
{
    extract($item);

    $lojas["registro"][$CODIGO_FILIAL]= [
        'CODIGO_FILIAL' => $CODIGO_FILIAL,
        'FILIAL' => $FILIAL];
}
// resposta com status 200 para confimar que foi OK 
    http_response_code(200);

    // retornar os dados em JSON 

    echo json_encode($lojas);


?>