<?php
include './config.php';

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST["nome"] ?? '';
    $email = $_POST["email"] ?? '';
    $telefone = $_POST["telefone"] ?? '';
    $CPF = $_POST["cpf"] ?? '';
    $CEP = $_POST["cep"] ?? '';
    $senha = $_POST["senha1"] ?? '';
    $confirmar_senha = $_POST["senha_confimar1"] ?? '';

    }


    $script_cadastro = "INSERT INTO tb_usuario (nome, email, telefone, cpf, cep, senha) 
                        VALUES (:nome, :email, :telefone, :cpf, :cep, :senha)";

    $stmt = $conn->prepare($script_cadastro);
    $resultado = $stmt->execute([
        "nome" => $nome,
        "email" => $email,
        "telefone" => $telefone,
        "cpf" => $CPF,
        "cep" => $CEP,
        "senha" => $senha 
    ]);

    if ($resultado) {
        echo "Cadastro realizado com sucesso!";
         //header('Location: pagina_cadas_entrar.php');
    } else {
        echo "Erro ao cadastrar no banco de dados.";
    }

?>
