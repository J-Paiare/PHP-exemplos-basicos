<?php
// array associativo contendo informaçoes de produtos
$produtos = [
    ["nome" => "camisa", "preço" => 50.00, "quantidade" => 10],
    ["nome" => "calça jeans", "preço" => 100.00, "quantidade" => 5],
    ["nome" => "tenis", "preço" => 150.00, "quantidade" => 7],

];

// exibe os produtos em formato de tabela
echo "<table border= '1'>";
echo "<tr><th>Nome</th><th>Preço</th><th>Qauntidade</th></tr>";
foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>R$" . number_format($produto['preço'], 2, ',','.') . "</td>"; 
    echo "<td>" . $produto['quantidade'] . "<td>";
    echo "</tr>";
}
echo "</table";

?>