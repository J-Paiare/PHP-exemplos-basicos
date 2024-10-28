<?php

// verifica se o formulario foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha = $_POST['senha'];

    // verifica se a senha e igual a 12345
    if ($senha == '12345') {
        // redireciona para a pagina de boas vindas
        header ("location: 4b_bem_vindo.php");
        exit();
    } else {
        // exibe mensagem de erro
        $erro = "senha incorreta. Tente novamente";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    <h2>Digite a senha para continuar:</h2>
    <form method="post" action="">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>

    <?php

    // Digitar PHP (2º Aqui)
    // EXIBE MENSAGEM DE ERRO SE ESXISTIR
    if(isset($erro)) {
        echo "<p> Style= 'color :red; '>$erro</p>";
    }

    ?>
</body>
</html>


