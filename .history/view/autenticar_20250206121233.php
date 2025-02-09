<?php
session_start();
require_once("../model/ModelUsuario.php");

// Conexão com o banco de dados
$db = new mysqli('localhost', 'root', '', 'livraria');
if ($db->connect_error) {
    die("Erro na conexão: " . $db->connect_error);
}

// Instanciar o modelo de usuário
$usuarioModel = new UsuarioModel($db);

// Obter dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Autenticar o usuário
$usuario = $usuarioModel->autenticar($email, $senha);

if ($usuario) {
    // Iniciar a sessão e redirecionar para o CRUD
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    header("Location: index.php");
    exit;
} else {
    echo "E-mail ou senha inválidos.";
}
?>