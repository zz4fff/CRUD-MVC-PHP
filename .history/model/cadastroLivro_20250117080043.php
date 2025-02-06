;
11.10. DIRETÓRIO ‘MODEL’ 155
12
13 //
14 // Métodos Set
15 public function setNome($string) {
16 $this->nome = $string;
17 }
18
19 public function setAutor($string) {
20 $this->autor = $string;
21 }
22
23 public function setQuantidade($string) {
24 $this->quantidade = $string;
25 }
26
27 public function setPreco($string) {
28 $this->preco = $string;
29 }
30
31 public function setFlag($string) {
32 $this->flag = $string;
33 }
34
35 public function setData($string) {
36 $this->data = $string;
37 }
38
39
40 //
41 // Métodos Get
42 public function getNome() {
43 return $this->nome;
44 }
45
46 public function getAutor() {
47 return $this->autor;
48 }
49
50 public function getQuantidade() {
51 return $this->quantidade;
52 }
53
54 public function getPreco() {
55 return $this->preco;
56 }
57
58 public function getFlag() {
59 return $this->flag;
60 }
61
62 public function getData() {
63 return $this->data;
64 }
65
66 public function incluir() {
67 return $this->setLivro($this->getNome(), $this->getAutor(),
 $this->getQuantidade(), $this->getPreco(), $this->getData());
68 }
69 }
70 ?>