<?php
// Permitir acesso de qualquer origem (CORS)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');

// Verificar se o CPF foi enviado
if (!isset($_GET['cpf'])) {
    echo json_encode(["erro" => "CPF não enviado"]);
    exit;
}

// Limpar o CPF (remover caracteres não numéricos)
$cpf = preg_replace('/[^0-9]/', '', $_GET['cpf']);

// Validar se o CPF tem 11 dígitos
if (strlen($cpf) !== 11) {
    echo json_encode(["erro" => "CPF inválido"]);
    exit;
}

// Token da API
$token = '6824c087bfdc3ce2f39998163d99a704';
$url = "https://magmadatahub.com/api.php?token=$token&cpf=$cpf";

// Configurar e executar a chamada cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Timeout de 30 segundos
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Desativar verificação SSL (apenas para desenvolvimento)

// Executar a requisição
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

// Verificar se houve erro no cURL
if ($error) {
    echo json_encode(["erro" => "Erro na requisição: $error"]);
    exit;
}

// Verificar se a resposta é válida
if ($httpCode === 200 && $response) {
    // Tentar decodificar a resposta JSON
    $data = json_decode($response, true);
    
    // Verificar se a resposta contém os dados necessários
    if ($data && isset($data['nome'])) {
        echo $response; // Retorna a resposta original
    } else {
        echo json_encode(["erro" => "CPF não encontrado ou dados incompletos"]);
    }
} else {
    echo json_encode(["erro" => "Falha ao acessar a API: código $httpCode"]);
}