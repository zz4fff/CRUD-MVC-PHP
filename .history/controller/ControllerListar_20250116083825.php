<?php
2 require_once("../model/banco.php");
class listarController{
5
6 private $lista;
7
8 public function __construct(){
9 $this->lista = new Banco();
10 $this->criarTabela();
11 }
12
13 private function criarTabela(){
14 $row = $this->lista->getLivro();
15
16 foreach ($row as $value){
17 echo "<tr>";
18 echo "<th>".$value[’nome’] ."</th>";
19 echo "<td>".$value[’autor’] ."</td>";
20 echo "<td>".$value[’quantidade’] ."</td>";
21 echo "<td> R$:".$value[’preco’] ."</td>";
22 echo "<td>".$value[’data’] ."</td>";
23 echo "<td>".$value[’flag’] = ($value[’flag’] == "0") ?
"Desativado":"Ativado" ."</td>";
24 echo "<td><a class=’btn btn-warning’ href = 
’editar.php?id=".$value[’nome’]."’> Editar </a><a class = ’btn 
btn-danger’ href = 
’../controller/ControllerDeletar.php?id=".$value[’nome’]."’> 
Excluir </a></td>";
25 echo "</tr>";
26 }
27 }
28 }
29 ?>