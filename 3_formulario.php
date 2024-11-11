<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de cadastro</title>
</head>
<body>
    <form method = "post" action="">
        <label for = "nome"> Nome:</label>
    <input type="text" name = "nome" required><br>

    <label for = "email"> Email:</label>
    <input type="email" name = "Email" required><br>

    <label for = "telefone"> Telefone:</label>
    <input type="text" name = "Telefone" required><br>

    <button type = "submit">Enviar</button>

</form>

<?php
// verifica se o formulario foi enviado

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    // recebe valores enviados pelo formulario
    $nome = $_POST ['nome'];
    $Email = $_POST ['email'];
    $Telefone = $_POST ['telefone'];

    // exibe valores recebidos
    echo "<h2>Dados Recebidos</h2>";
    echo "Nome: $nome <br>";
    echo "Email: $Email <br>";
    echo "Telefone: $Telefone <br>";
}
?>
</body>
</html>