<!DOCTYPE HTML>

<html>
<?php include("head.php") ?>

<body>
<?php include("menu.php") ?>
<?php require_once("../controller/ControllerEditar.php");?>

 <div class="row">
 <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
 <div class="form-group">
 <input class="form-control" type="text" id="nome" name="nome" value="<?php echo 
 $editar->getNome(); ?>" required autofocus>
 <input class="form-control" type="text" id="autor" name="autor" value="<?php 
 echo $editar->getAutor(); ?>" required>
 <input class="form-control" type="number" id="quantidade" name="quantidade"
 value="<?php echo $editar->getQuantidade(); ?>" required>
 <input class="form-control" type="number" id="preco" name="preco" value="<?php 
 echo $editar->getPreco(); ?>" required>
17
18 <select name="flag">
19 <?php $c = $editar->getFlag();?>
20
21 <option value="<?php echo $editar->getFlag();?>"><?php echo
 ($editar->getFlag()== 0)? "Desativado" :"Ativado" ?></option>
22 <option value="<?php echo ($c == 0)? "1" : "0" ?>"><?php echo
 ($editar->getFlag()!= 0)? "Desativado" :"Ativado" ?></option>
23 </select>
24
25 <input class="form-control" type="date" id="data" name="data" value="<?php echo 
 $editar->getData(); ?>" required>
26 </div>
27 <div class="form-group">
28 <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
29
30 <button type="submit" class="btn btn-success" id="editar" name="submit"
 value="editar">Editar</button>
31 </div>
32 </form>
33 </div>
34
35 <script language="javascript" type="text/javascript">
36 function formatarMoeda() {
37 var elemento = document.getElementById(’preco’);
38 var valor = preco.value;
39
40 valor = valor + ’’;
41 valor = parseInt(valor.replace(/[\D]+/g, ’’));
42 valor = valor + ’’;
43 valor = valor.replace(/([0-9]{2})$/g, ",$1");
44
11.11. DIRETÓRIO ‘VIEW’ 163
45 if (valor.length > 6) {
46 valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
47 }
48
49 elemento.value = valor;
50 }
51
52 function validar(formulario) {
53 var quantidade = form.quantidade.value;
54 var preco = form.preco.value;
55
56 for (i = 0; i <= formulario.length - 2; i++) {
57 if ((formulario[i].value == "")) {
58 alert("Preencha o campo " + formulario[i].name);
59 formulario[i].focus();
60
61 return false;
62 }
63 }
64
65 if (quantidade <= 0) {
66 alert(’A quantidade de páginas não pode ser igual ou inferior a 0’);
67 form.quantidade.focus();
68
69 return false;
70 }
71
72 if (preco <= 0) {
73 alert(’O preço do livro não pode ser igual ou inferior a 0’);
74 form.preco.focus();
75
76 return false;
77 }
78
79 formulario.submit();
80 }
81 </script>
82 </body>
83 </html>