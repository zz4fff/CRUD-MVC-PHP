<?php
require_once("../model/ModelCadastrarLivro.php");

class CadastrarLivroController {
  private $cadastro;

  public function __construct() {
    $this->cadastro = new CadastrarLivroController();
    $this->incluir();
  }

  private function incluir() {
    $this->cadastro->setNome($_POST['nome']);
    $this->cadastro->setAutor($_POST['autor']);
    $this->cadastro->setQuantidade($_POST['quantidade']);
    $this->cadastro->setPreco($_POST['preco']);
    $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
    $result = $this->cadastro->incluir();
    if ($result >= 1) {
      echo "<script>alert('Registro incluído com sucesso!')</script>";
      header('Location: ../view/cadastro.php");
    } else {
      echo "<script>alert('Erro ao gravar registro!,verifique se o livro não está duplicado'); history.back()</script>";
    }
  }
}

new CadastrarLivroController();
?>