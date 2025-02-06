<?php
require_once("../init.php");

class Banco{

protected $mysqli;

public function __construct() {
$this->conexao();
 }

 private function conexao() {
 $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
 }

 public function setLivro($nome, $autor, $quantidade, $preco, $data) {
 $stmt = $this->mysqli->prepare("INSERT␣INTO␣livros␣(‘nome‘,␣‘autor‘,␣
↪→ ‘quantidade‘,␣‘preco‘,␣‘data‘)␣VALUES␣(?,?,?,?,?)");
18 $stmt->bind_param("sssss", $nome, $autor, $quantidade, $preco, $data);
19 if( $stmt->execute() == TRUE){
20 return true;
21 } else {
22 return false;
23 }
24 }
25
26 public function getLivro() {
27 $result = $this->mysqli->query("SELECT␣*␣FROM␣livros");
28 while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
29 $array[] = $row;
30 }
31 return $array;
32
33 }
34
35 public function deleteLivro($id) {
36 if ($this->mysqli->query("DELETE␣FROM␣‘livros‘␣WHERE␣‘nome‘␣=␣’".$id."’;")
↪→ == TRUE) {
154 CAPÍTULO 11. CRUD USANDO MVC
37 return true;
38 } else {
39 return false;
40 }
41 }
42
43 public function pesquisaLivro($id) {
44 $result = $this->mysqli->query("SELECT␣*␣FROM␣livros␣WHERE␣nome=’$id’");
45 return $result->fetch_array(MYSQLI_ASSOC);
46
47 }
48
49 public function updateLivro($nome, $autor, $quantidade, $preco, $flag, $data,
↪→ $id) {
50 $stmt = $this->mysqli->prepare("UPDATE␣‘livros‘␣SET␣‘nome‘␣=␣?,␣‘autor‘=?,␣
↪→ ‘quantidade‘=?,␣‘preco‘=?,␣‘flag‘=?,‘data‘␣=␣?␣WHERE␣‘nome‘␣=␣?");
51 $stmt->bind_param("sssssss", $nome, $autor, $quantidade, $preco, $flag,
↪→ $data, $id);
52 if ($stmt->execute() == TRUE) {
53 return true;
54 } else {
55 return false;
56 }
57 }
58 }
59 ?>