<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Feedback</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required></textarea><br>

        <button type="submit">Enviar</button>
    </form>

    <?php

    // Verifica de o formulario foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // RECEBE OS VALORES ENVIADOS PELO FORMULARIO
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        // valida se os campos nao estao vazios e o email é valido
        if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem)) {
            echo "<p style = 'color: green;'>Feedback enviado com sucesso! </p>";
        } else {
            echo "<p style = 'color: red;'>Por favor preencha todos os campos corretamente </p>";
        }
    }
    
    ?>
</body>
</html>
