<?php

//condicao verdadeira
if ( 5 > 2 ) {
    echo "Vai entrar no if";
}   

//condicao falsa
if ( 2 >= 5){
    echo "Não vai entrar no if";
}
echo "<br>";

// utilizar op. logico
if (10 === 10 && 5 > 2){
    echo "Vai entrar no if";
}
echo "<br>";

//variaveis
$a = 10;
$b = 5;
$c = "Vai entrar no if";

if ($a >= $b){
    echo $c;
}
echo "<br>";

// utilizando esle

if ($a < $b){
    echo "Não vai entrar no if";
} else {
    echo "Vai entrar no else";
}
echo "<br>";

// utilizando elseif
if ($a < $b){
    echo "Não vai entrar no if";
} elseif ($a > $b) {
    echo "Vai entrar no elseif";
} else {
    echo "Vai entrar no else";
}
echo "<br>";

// if alinhado

if (10 > 2){
    echo "Vai entrar no 1º if";
    if("teste" == "teste"){
        echo "<br>Vai entrar no 2º if";
    }
    else{
        echo "<br>Vai entrar no 2° else";
    }
}
echo "<hr>";

if (10 < 2){
    echo "Vai entrar no if 1";
        if ("teste " == "teste"){
        echo "Vai entrar no if 2";
        }
} else {
    echo "Vai entrar no else 1";
}
echo "<hr>";

if (10 > 2){
    echo "Vai entrar no 1º if";
    if("teste" == "teste"){
        echo "<br>Vai entrar no 2º if<br>";
        echo $a . "<br>";
    }
}else{
        echo "<br>Vai entrar no 2° else";
    }
echo "<hr>";

//switch
$cor = "vermelho";
switch ($cor) {
    case "azul":
        echo "A cor é azul";
        break;
    case "vermelho":
        echo "A cor é vermelho";
        break;
    case "verde":
        echo "A cor é verde";
        break;
    default:
        echo "Cor não encontrada";
}
echo "<br>";
switch($a){
    case 5:
        echo " a variavel A é igual a 5";
        break;
    case 12:
        echo " a variavel A é igual a 12";
        break;
    case 20:
        echo " a variavel A é igual a 20";
        break;
    default:
        echo "A variavel A não é igual a nenhum dos valores";    
}
echo "<hr>";



?>