<?php
$senha = password_hash('senha123', PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Admin', 'admin@example.com', '$senha')";
// Execute esta query no seu banco de dados.
?>