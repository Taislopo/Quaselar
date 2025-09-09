<?php

require './config.php';

include './template/header.php';

?>





<body class="tudo">
    <main class="form-1">
        <h1>Cadastre-se</h1>
        <nav class="cadastro">
            <label for="nome">Nome</label>
            <input type="text" id="nome">
            <label for="email">E-mail</label>
            <input type="text" id="email">
            <label for="telefone">Telefone</label>
            <input type="number" id="telefone">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf">
            <label for="cep">CEP</label>
            <input type="number" id="cep">
            <label for="senha1">Senha</label>
            <input type="password" id="senha1">
            <label for="senha_confimar1">Confirmar senha</label>
            <input type="password" id="senha_confimar1">
        </nav>
        <button class="cadastro-bnt">Cadastre-se</button>
    </main>
    <div class="tela_extra" onclick="moverTela()">
        <h1>Clique aqui se quiser fazer o login</h1>
    </div>
    <main class="form-2">
        <h1>Entrar</h1>
        <nav class="entrar">
            <label for="email">E-mail</label>
            <input type="text" id="email">
            <label for="senha">Senha</label>
            <input type="password" id="senha">
        </nav>
        <button class="entrar-bnt">Entrar</button>
    </main>