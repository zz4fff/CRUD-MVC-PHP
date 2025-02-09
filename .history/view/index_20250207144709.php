<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>
<?php require_once("../controller/ControllerListarLivro.php"); ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
</head>

<?php include("head.php"); ?>
<?php
if (isset($_SESSION['usuario_id'])) {
    echo "Usuário ativo: ".$_SESSION['usuario_nome']." (<a href='logout.php'>Logout</a>)";
}
?>

<body>
  <?php include("menu.php"); ?>

  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Autor</th>
        <th>Quantidade de Páginas</th>
        <th>Preço</th>
        <th>Data</th>
        <th>Flag</th>
        <th>Opções</th>
      </tr>
    </thead>

    <tbody>
      <?php new ListarLivroController(); ?>
    </tbody>
  </table>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>
