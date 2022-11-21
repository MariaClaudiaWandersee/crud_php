<?php
include_once __DIR__ . "/config.php";

// Conectar ao banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}

$select = $pdo->query("SELECT nome, email, senha FROM usuarios");
$result = $select->fetch(PDO::FETCH_ASSOC);
//echo $result['nome'].'<br />';

$name       = $result['nome'];
$email      = $result['email'];
$password   = $result['senha'];

echo ($name).'<br />';
echo ($email).'<br />';
echo ($password).'<br />';
