<?php

echo 3 + 2 * 5;
echo "<br>";
echo (3 + 2) * 5;
echo "<br>";
echo (3 + 2) * (5 - 1);
echo "<br>";

$a = 5;
$b = 10;
$c = 7;
echo $a + $b * $c;
echo "<br>";
echo ($a + $b) / $c;
echo "<br>";

$d = $a + $b * $c;
echo $d;
echo "<br>";
$e = ($a + $b) * $c;
echo $e;

$FOperacao = $a + $b * ($c / $d) - $e;
echo "<br>";
echo $FOperacao;
echo "<br>";

echo "<hr>";

echo 5 / 2;
echo "<br>";
if(is_float(5 / 2)){
    echo "O resultado é um float<br>";
} else {
    echo "O resultado não é um float<br>";
}
echo "<br>";

echo 5 . 2;
echo "<br>";
if(is_string(5 . 2)){
    echo "O resultado é uma string<br>";
} else {
    echo "O resultado não é uma string<br>";
}
echo "<br>";

$operacao = "5" * 12;

echo gettype($operacao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(1.2);
echo "<br>";
echo gettype("texto");
echo "<hr>";

if($operacao / 2 == 0){
    echo "O numero é par<br>";
} else {
    echo "O numero é impar<br>";
}

$f = 14;
$g = 2;
$h = 3;

echo $f % $g; // Resto da divisão de 14 por 2
echo "<br>";
echo $f % $h; // Resto da divisão de 14 por 3
echo "<br>";

echo $f**$g; // 14 elevado a 2
echo "<br>";
echo $f**$h; // 14 elevado a 3
echo "<br>";

echo $f++; // Incrementa $f em 1 e imprime o valor
echo "<br>";
echo $f++; // Incrementa $f em 1 e imprime o novo valor
echo "<br>";
echo $f--; // Decrementa $f em 1 e imprime o valor
echo "<br>";
echo $f--; // Decrementa $f em 1 e imprime o novo valor
echo "<br>";
echo $f; // Imprime o valor final de $f
echo "<hr>";

// Operadores de comparação
echo 5 == 5 ? "Iguais" : "Diferentes";
echo "<br>";    
echo 5 === "5" ? "Iguais" : "Diferentes";
echo "<br>";
echo 5 != 6 ? "Diferentes" : "Iguais";
echo "<br>";
echo 5 !== "5" ? "Diferentes" : "Iguais";
echo "<br>";
echo 5 < 6 ? "Menor" : "Maior ou igual";
echo "<br>";
echo 5 > 4 ? "Maior" : "Menor ou igual";
echo "<br>";
echo 5 <= 5 ? "Menor ou igual" : "Maior";
echo "<br>";
echo 5 >= 5 ? "Maior ou igual" : "Menor";
echo "<br>";
echo 5 <=> 6; // Retorna -1 (menor)
echo "<br>";
echo 5 <=> 5; // Retorna 0 (igual)
echo "<br>";
echo 6 <=> 5; // Retorna 1 (maior)
echo "<hr>";

$j = 10;
$k = 20;

if($j == $k){
    echo "j é igual a k";
} else {
    echo "j é diferente de k";
}
echo "<br>";

if($j < $k){
    echo "j é menor que k";
} else {
    echo "j é maior ou igual a k";
}
echo "<br>";

// Operadores lógicos

if($j == 10 && $k == 20){
    echo "j é igual a 10 e k é igual a 20";
} else {
    echo "Condição não atendida";
}
echo "<br>";

if($j == 10 || $k == 30){
    echo "j é igual a 10 ou k é igual a 30";
} else {
    echo "Nenhuma das condições é verdadeira";
}
echo "<br>";
if(!($j == 10)){
    echo "j não é igual a 10";
} else {
    echo "j é igual a 10";
}
echo "<hr>";

$l = (float) "10.5";
$m = (int) "20";
echo $l + $m; // Soma de float e int

if ($m === 20) {
    echo "m é um inteiro e é igual a 20";
} else {
    echo "m não é um inteiro ou não é igual a 20";
}
echo "<br>";

$n = (string) 34;

if ($n === "34") {
    echo "n é uma string e é igual a '34'";
} else {
    echo "n não é uma string ou não é igual a '34'";
}
echo "<br>";

//Operadores de atribuição
$p = 5;
$q = 10;
$p += $q; // $p = $p + $q
echo $p; // Imprime 15
echo "<br>";
$p -= $q; // $p = $p - $q
echo $p; // Imprime 5
echo "<br>";
$p *= $q; // $p = $p * $q
echo $p; // Imprime 50
echo "<br>";
$p /= $q; // $p = $p / $q
echo $p; // Imprime 5
echo "<br>";
$p %= $q; // $p = $p % $q
echo $p; // Imprime 5
echo "<br>";
$p **= $q; // $p = $p ** $q
echo $p; // Imprime 9765625
echo "<br>";
$p .= " é o resultado"; // Concatena string
echo $p; // Imprime "9765625 é o resultado"
echo "<hr>";

//operador ternário
echo 20 > 10 ? "20 é maior que 10" : "20 não é maior que 10";
echo "<br>";
echo 20 < 10 ? "20 é menor que 10" : "20 não é menor que 10";
echo "<br>";
echo $a == $b ? "a é igual a b" : "a não é igual a b";
echo "<br>";












?>