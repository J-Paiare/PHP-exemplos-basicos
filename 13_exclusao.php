<!-- Passar id via URL -->
<!-- http://localhost/PHP-exemplos-basicos/13_exclusao.php -->

<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


// verifica se um ID foi passado via URL para exclusao
if (isset($GET['id'])) {
    $id = $_GET['id'];

    // deleta o registro do cliente com o ID espeficicado
    $sql = "DELETE FROM  clientes WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Cliente excluido com sucesso</p>";
    } else {
        echo "<p>erro ao excluir cliente: " . $conn->error . "</p>";
    }
}


// Fecha a conexão
$conn->close();
?>
