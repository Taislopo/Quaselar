<?php

include './template/header.php';
?>





<body class="tudo">
    <main class="form-1">
        <h1>Cadastre-se</h1>
        <form  method="POST" action="form_cadastro_login.php" class="cadastroo">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email">
            <label for="telefone">Telefone</label>
            <input type="number" id="telefone" name="telefone">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf">
            <label for="cep">CEP</label>
            <input type="number" id="cep" name="cep">
            <label for="senha1">Senha</label>
            <input type="password" id="senha1" name="senha1">
            <label for="senha_confimar1">Confirmar senha</label>
            <input type="password" id="senha_confimar1" name="senha_confirmar1">
            <button type="submit" class="cadastro-bnt">Cadastre-se</button>
        </form>
    </main>
    <div class="tela_extra" onclick="moverTela()">
    </div>
    <main class="form-2">
        <h1>Entrar</h1>
        <nav class="eentrar">
            <label for="email">E-mail</label>
            <input type="text" id="email">
            <label for="senha">Senha</label>
            <input type="password" id="senha">
        </nav>
        <button class="entrar-bnt">Entrar</button>
    </main>