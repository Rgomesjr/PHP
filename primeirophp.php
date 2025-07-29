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



?>
