<?php
$senha = password_hash('123456', PASSWORD_DEFAULT);
echo $senha;

// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Admin', 'admin@example.com', '$senha')";
// Execute esta query no seu banco de dados.
?>