<?php
require_once("../model/banco.php");

class DeletarLivroController {
  private $deleta;

  public function __construct($id) {
    $this->deleta = new Banco();

    // TODO: Não está confirmando exclusão
    if ($this->deleta->deleteLivro($id) == TRUE) {
      echo "<script>alert('Registro deletado com sucesso!'); 
      document.location='../view/index.php'</script>";
    } else {
      echo "<script>alert('Erro ao deletar registro!'); history.back()</script>";
    }
  }
}

new deleta($_GET['id']);
?>