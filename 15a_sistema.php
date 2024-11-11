<?php
// Página de login (15a_sistema.php)
session_start();

// verifica se o formulari foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST ['usuario'];
    $senha = $_POST ['senha'];

    // verifica se os dados vao ladidos (usuario: admin, senha: 123)
    if ($usuario == 'admin' && $senha == 123) {
        $_SESSION ['usuario'] = $usuario; //salva o nome do usuario na sessao
        header("Location: 15b_restrita.php");
        exit();
    } else {
        $erro = "usuario e senha incorretos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
    }
    
    ?>
</body>
</html>
