<?php

$nome = "Robson";

echo $nome;

/*
echo "<br>"; //pula linha no navegador
echo "\n"; //pula linha no terminal
echo "<br>\n"; //pula linha nos dois 
*/

echo "<br> Hello World <br>";

if($nome == "Robson") {
    echo "O nome é Robson";
} else {
    echo "O nome não é Robson"; 
}

echo "<br>";

$num = 10;
echo $num;
echo "<br>";
if(is_int($num)){
    echo "O número é um inteiro<br>";
} else {
    echo "O número não é um inteiro<br>";
}

/*
is_int($num) ? print("É um inteiro") : print("Não é um inteiro");
echo "<br>";
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/

$num2 = 10.5;
echo $num2;
echo "<br>";
if(is_float($num2)){
    echo "O número é um float<br>";
} else {
    echo "O número não é um float<br>";
}

/*
is_float($num2) ? print("É um float") : print("Não é um float");
echo "<br>";
TAMEM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/

if(is_string($nome)){
    echo "O nome é uma string<br>";
} else {
    echo "O nome não é uma string<br>";
}

/*
is_string($nome) ? print("É uma string") : print("Não é uma string");
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/

$a = true;

if(is_bool($a)){
    echo "A variável é um booleano<br>";
} else {
    echo "A variável não é um booleano<br>";
}
/*
is_bool($a) ? print("É um booleano") : print("Não é um booleano");
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/
$lista = array(1, 2, 3, 4, 5);
print_r($lista);
echo "<br>";
echo $lista[4];
echo "<br>";
echo "O tamanho do array é: " . count($lista) . "<br>";

$arassosiativo = array("nome" => "Robson", "idade" => 28, "cidade" => "São Paulo");
print_r($arassosiativo);
echo "<br>";
echo "O nome é ". $arassosiativo["nome"];
echo "<br>";
echo "A idade é ". $arassosiativo["idade"];
echo "<br>";
echo "A cidade é ". $arassosiativo["cidade"];
echo "<br>";

$pessoa = [
    "nome" => "Robson",
    "idade" => 28,
    "cidade" => "São Paulo",
    "profissão" => "Programador",
    "graduação" => "Engenharia de Software"
];

$maioridade = 18;

if($pessoa["idade"] >= $maioridade) {
    echo "O " . $pessoa["nome"] . " tem" . $pessoa["idade"] . " anos e é maior de idade, mora em " . $pessoa["cidade"] . 
    " e trabalha como " . $pessoa["profissão"] . "e é formada em" . $pessoa["graduação"] . ".<br>";
} else {
    echo "A pessoa é menor de idade";
}

if(is_array($lista)){
    echo "A variável é um array<br>";
} else {
    echo "A variável não é um array<br>";
}
/*
is_array($lista) ? print("É um array") : print("Não é um array   ");
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/

if(is_null($nome)){
    echo "A variável é nula<br>";
} else {
    echo "A variável não é nula<br>";
}
/*
is_null($nome) ? print("É nula") : print("Não é nula");
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/

if(is_numeric($num)){
    echo "A variável é numérica<br>";
} else {
    echo "A variável não é numérica<br>";
}
/*
is_numeric($num) ? print("É numérica") : print("Não é numérica  ");
TAMBÉM PODE SER USADO O OPERADOR TERNÁRIO PARA CONDICIONAIS 
*/  

// Definindo uma classe Pessoa
// A classe Pessoa tem três atributos: nome, idade e cidade

class Pessoa {
    public $nome;
    public $idade;
    public $cidade;

    public function __construct($nome, $idade, $cidade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos e moro em {$this->cidade}.<br>";
    }
}


class Profissional extends Pessoa {
    public $profissao;
    public $graduacao;

    // Apenas $graduacao é opcional
    public function __construct($nome, $idade, $cidade, $profissao, $graduacao = null) {
        parent::__construct($nome, $idade, $cidade);
        $this->profissao = $profissao;
        $this->graduacao = $graduacao ?? "Não informado";
    }

    public function apresentarProfissional() {
        echo "Minha profissão é {$this->profissao} e minha graduação é {$this->graduacao}.<br>";
    }
}

class NovaApresentacao extends Profissional {
    public $hob1;
    public $hob2;

    public function __construct($nome, $idade, $cidade, $profissao, $graduacao = null, $hob1, $hob2) {
        parent::__construct($nome, $idade, $cidade, $profissao, $graduacao);
        $this->hob1 = $hob1;
        $this->hob2 = $hob2;
    }

    public function apresentarHobbies() {
        echo "Meus hobbies são: {$this->hob1} e {$this->hob2}.<br>";
    }

    public function apresentarTudo() {
        $this->apresentar();
        $this->apresentarProfissional();
        $this->apresentarHobbies();
    }
}

echo "<hr>";
// Criando objeto passando graduação (completa)
$p1 = new NovaApresentacao("Robson", 28, "São Paulo", "Programador", "Engenharia de Software", "Jogar CS2", "Fazer churrasco");
$p1->apresentarTudo();

echo "<hr>";

// Criando objeto SEM passar graduação (vai mostrar "Não informado")
$p2 = new NovaApresentacao("Robson", 28, "São Paulo", "Programador", null, "Jogar CS2", "Fazer churrasco");
$p2->apresentarTudo();

echo "<hr>";

$x = "teste";
echo $x . "<br>";
$$x = "teste2"; // Variável variável
echo $teste . "<br>"; // Imprime o valor da variável variável, que é 5
$$teste2 = "valor"; // Variável variável com valor numérico
echo $teste2 . "<br>"; // Imprime o valor da variável variável, que é "


$testeglobal = "teste global";
echo $testeglobal . "<br>"; // Imprime o valor da variável global
// Modificando a variável global dentro do escopo global
if (5 > 2) {
    $testeglobal = "teste global modificado";
    echo $testeglobal . "<br>"; // Imprime o valor modificado da variável global
}

echo $testeglobal . "<br>"; // Imprime o valor modificado da variável global fora do escopo

function teste() {
    global $testeglobal; // Acessa a variável global dentro da função
    $testeglobal = "teste global dentro da função";
    echo $testeglobal . "<br>"; // Imprime o valor da variável global
}

teste(); // Chama a função que imprime o valor da variável global
echo $testeglobal . "<br>"; // Imprime o valor da variável global fora da função
echo "<hr>";

// Exemplo de escopo de estatico

function estatico() {
    $testeestatico = 0;
    $testeestatico++;
    echo "Contador: " . $testeestatico . "<br>";
}

estatico(); // Chama a função que incrementa o contador
estatico(); // Chama novamente a função que incrementa o contador   
estatico(); // Chama novamente a função que incrementa o contador

echo "<br>";

function estatico2() {
    static $testeestatico2 = 0; // Variável estática
    $testeestatico2++;
    echo "Contador: " . $testeestatico2 . "<br>";
}

estatico2(); // Chama a função que incrementa o contador
estatico2(); // Chama novamente a função que incrementa o contador   
estatico2(); // Chama novamente a função que incrementa o contador

echo "<hr>";

function soma($a, $b) {
    echo $a + $b;
}

soma(10, 5); // Chama a função que soma os dois números
soma(20, 30); // Chama novamente a função que soma os dois números  
soma(100, 200); // Chama novamente a função que soma os dois números

echo "<hr>";


?>
