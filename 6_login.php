<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php

    // verifica se o formulario foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // RECEBE OS VALORES ENVIADOS PELO FORMULARIO
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // abre o arquivo usuarios.txt para leitura
        $arquivo = fopen('usuarios.txt', 'r');

        // assumimos que o login e falso, assim nao damos o acesso direto
        $login_sucesso = false;

        // le cada linha do arquivo
        while (($linha = fgets($arquivo)) !== false) {
            // divide a linha pelo denominador ";"
            list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

            // verifica se o nome e a senha corespondem aos valores do arquivo
            if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                $login_sucesso = true;
                break;
            }

        }

        // fecha o arquivo
        fclose($arquivo);
        // exibe a mensagem de sucesso ou erro
        if ($login_sucesso) {
            echo "<p>login realizado com sucesso, bem vindo $nome!</p>";;
        } else {
            echo "<p> style = 'color: red;'> usuario ou senha incorretos </p>";
        }
    }
    
    ?>
</body>
</html>
