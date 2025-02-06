<!DOCTYPE HTML>
2
3 <html>
4 <?php include("head.php") ?>
5
6 <body>
7 <?php include("menu.php") ?>
8
9 <div class="row">
10 <form method="post" action="../controller/ControllerCadastro.php" id="form"
 name="form" onsubmit="validar(document.form); return false;"
 class="col-10">
11 <div class="form-group">
12 <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome 
 do Livro" required autofocus>
13 <input class="form-control" type="text" id="autor" name="autor"
 placeholder="Autor do Livro" required>
14 <input class="form-control" type="number" id="quantidade" name="quantidade"
 placeholder="Quantidade de Páginas" required>
15 <input class="form-control" type="text" id="preco" name="preco"
 placeholder="Preço do Livro" onkeypress="formatarMoeda();" required>
16 <input class="form-control" type="date" id="data" name="data" placeholder="Data 
 de Pulicação" required>
17 </div>
18
19 <div class="form-group">
20 <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
21 </div>
160 CAPÍTULO 11. CRUD USANDO MVC
22 </form>
23 </div>
24
25 <script language="javascript" type="text/javascript">
26 function formatarMoeda() {
27 var elemento = document.getElementById(’preco’);
28 var valor = preco.value;
29
30 valor = valor + ’’;
31 valor = parseInt(valor.replace(/[\D]+/g, ’’));
32 valor = valor + ’’;
33 valor = valor.replace(/([0-9]{2})$/g, ",$1");
34
35 if (valor.length > 6) {
36 valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
37 }
38
39 elemento.value = valor;
40 }
41
42
43
44 function validar(formulario) {
45 var quantidade = form.quantidade.value;
46 var preco = form.preco.value;
47
48 for (i = 0; i <= formulario.length - 2; i++) {
49 if ((formulario[i].value == "")) {
50 alert("Preencha o campo " + formulario[i].name);
51 formulario[i].focus();
52
53 return false;
54 }
55 }
56
57 if (quantidade <= 0) {
58 alert(’A quantidade de páginas não pode ser igual ou inferior a 0’);
59 form.quantidade.focus();
60
61 return false;
62 }
11.11. DIRETÓRIO ‘VIEW’ 161
63
64 if (preco <= 0) {
65 alert(’O preço do livro não pode ser igual ou inferior a 0’);
66 form.preco.focus();
67
68 return false;
69 }
70 formulario.submit();
71 }
72 </script>
73 </body>
74 </html>