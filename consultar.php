<?php
header('Content-Type: application/json');

if (!isset($_GET['cpf'])) {
    echo json_encode(["status" => 400, "erro" => "CPF não enviado"]);
    exit;
}

$cpf = preg_replace('/[^0-9]/', '', $_GET['cpf']);

if (strlen($cpf) != 11) {
    echo json_encode(["status" => 400, "erro" => "CPF inválido"]);
    exit;
}

$token = '6824c087bfdc3ce2f39998163d99a704';
$url = "https://magmadatahub.com/api.php?token=$token&cpf=$cpf";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200 && $response) {
    $data = json_decode($response, true);

    if (isset($data['nome']) && !empty($data['nome'])) {
        echo json_encode([
            "status" => 200,
            "cpf" => $data['cpf'] ?? '',
            "nome" => $data['nome'] ?? '',
            "nascimento" => $data['nascimento'] ?? '',
            "sexo" => $data['sexo'] ?? '',
            "nome_mae" => $data['nome_mae'] ?? ''
        ]);
    } else {
        echo json_encode(["status" => 404, "erro" => "Dados não encontrados para este CPF"]);
    }
} else {
    echo json_encode(["status" => $httpCode, "erro" => "Erro na comunicação com a API externa"]);
}
?>
