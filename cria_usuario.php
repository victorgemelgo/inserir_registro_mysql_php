<?php

require("connector.php");

if (isset($_POST)) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $query = "INSERT INTO tblpessoa (nome, sobrenome) VALUES ('$nome', '$sobrenome')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: index.php?criado=sucesso");
}
