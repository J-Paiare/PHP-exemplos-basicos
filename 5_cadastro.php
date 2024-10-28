<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <?php

    //verifica se o formulario foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // recebe  os valores enviados pelo formulario
        $nome = $_POST ['nome'];
        $senha = $_POST ['senha'];

        // Abre o aqruivo usuarios.txt para escrita (adiciona dados ao final do arquivo)
        $arquivo = fopen('usuarios.txt', 'a');

        // cria uma linha com o nome e a senha separados por ";"
        $linha = $nome . ';' . $senha . "\n";

        // escreve a linha do arquivo
        fwrite($arquivo, $linha);

        // fecha o aruivo
        fclose($arquivo);
    echo "<p>Usuario cadastrado com sucesso!</p>";
    }
    
    ?>
</body>
</html>
