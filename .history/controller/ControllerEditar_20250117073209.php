<?php
require_once("../model/banco.php");

class editarController {
ivate $editar;
private $nome;
private $autor;
private $quantidade;
 private $preco;
 private $data;
 private $flag;

 public function __construct($id) {
 $this->editar = new Banco();
 $this->criarFormulario($id);
 }

 private function criarFormulario($id) {
 $row = $this->editar->pesquisaLivro($id);
 $this->nome = $row[’nome’];
 $this->autor = $row[’autor’];
 $this->quantidade = $row[’quantidade’];
 $this->preco = $row[’preco’];
 $this->data = $row[’data’];
 $this->flag = $row[’flag’];
 }

 public function
↪→ editarFormulario($nome,$autor,$quantidade,$preco,$data,$flag,$id) {
30 if ($this->editar->updateLivro($nome, $autor, $quantidade, $preco, $flag,
↪→ $data, $id) == TRUE) {
31 echo "<script>alert(’Registro␣incluído␣com␣
↪→ sucesso!’);document.location=’../view/index.php’</script>";
32 } else {
33 echo "<script>alert(’Erro␣ao␣gravar␣registro!’);history.back()</script>";
34 }
35 }
36
37 public function getNome() {
38 return $this->nome;
39 }
40
41 public function getAutor() {
42 return $this->autor;
43 }
public function getQuantidade() {
46 return $this->quantidade;
47 }
48
49 public function getPreco() {
50 return $this->preco;
51 }
52
53 public function getData() {
54 return $this->data;
55 }
56
57 public function getFlag() {
58 return $this->flag;
59 }
60 }
61
62 $id = filter_input(INPUT_GET, ’id’);
63 $editar = new editarController($id);
64 if (isset($_POST[’submit’])) {
65 $editar->editarFormulario($_POST[’nome’], $_POST[’autor’],
↪→ $_POST[’quantidade’], $_POST[’preco’], $_POST[’data’], $_POST[’flag’],
↪→ $_POST[’id’]);
66 }
67 ?>