<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>

<!-- TODO: Criar uma tela de logout decente -->