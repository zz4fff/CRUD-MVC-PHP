<?php
2 require_once("../model/banco.php");
3
4 class editarController {
  private $editar;
7 private $nome;
8 private $autor;
9 private $quantidade;
10 private $preco;
11 private $data;
12 private $flag;
13
14 public function __construct($id) {
15 $this->editar = new Banco();
16 $this->criarFormulario($id);
17 }
18
19 private function criarFormulario($id) {
20 $row = $this->editar->pesquisaLivro($id);
21 $this->nome = $row[’nome’];
22 $this->autor = $row[’autor’];
23 $this->quantidade = $row[’quantidade’];
24 $this->preco = $row[’preco’];
25 $this->data = $row[’data’];
26 $this->flag = $row[’flag’];
27 }
28
29 public function
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
