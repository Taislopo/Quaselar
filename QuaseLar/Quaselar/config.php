<?php

// Lê o conteúdo do arquivo .env
$_ENV = parse_ini_file('.env');
// A função parse_ini_file() transforma esse conteúdo em um array associativo e o armazena em $_ENV.

// var_dump($_ENV);

echo '<hr>';
// Imprime uma linha horizontal na página, apenas para separar visualmente o conteúdo exibido.

// Monta a string de conexão (DSN) com base nas variáveis lidas.
$dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";

// Armazena o nome de usuário e a senha do banco em variáveis separadas.
$usuario = $_ENV['USUARIO'];
$senha = $_ENV['SENHA'];

try {
    // Cria a conexão PDO com tratamento de erros ativado
    $conn = new PDO($dsn, $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "✅ Conectado com sucesso!";
} catch (PDOException $e) {
    die("❌ Erro de conexão: " . $e->getMessage());
}


