<?php

$nome = "Robson";
$sobrenome = "Gomes";


// sao blocos de codigos que possuem nomes
// realiza uma ação e pode ser reaproveidata
// reduz a duplicação de código
// melhora a manutenção
// diversas funções prontas no PHP(build in)

//definindo uma função
function teste(){

    $a = 5; // variavel local
    $b = 10; // variavel local

    // código da função
    echo "Função teste <br>";
    echo "O valor de a é: $a <br>";
    echo "O valor de b é: $b <br>";
    echo "A soma de a e b é: " . ($a + $b) . "<br>";
    
}

// chamada/invocar da função
teste(); // executa a função

//funcao com if

function soma(){

    $a = 5;
    $b = 10;

    echo "Função soma <br>";
    echo "O valor de a é: $a <br>";
    echo "O valor de b é: $b <br>";
    echo "A soma de a e b é: " . ($a + $b) . "<br>";
}

if (soma() <10) {
    echo "A soma é menor que 10";
} else {
    echo "A soma é maior ou igual a 10";
}
echo "<hr>";

//implode

$arr = ["Robson", "João", "Maria"];

$imp = implode(", ", $arr); // transforma o array em string
echo "A lista de nomes é: $imp <br>";

function nomecompleto() {
    // global $nome, $sobrenome; // acessa as variaveis globais
    $nome = "Robson";
    $sobrenome = "Gomes";
    echo $nome . " " . $sobrenome; // retorna o nome completo
}

nomecompleto();

echo "<hr>";

//parametros de função

function VelocMax($vel){
    if(is_float($vel) || is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }else{
        echo "Por favor, informe um valor numérico válido para a velocidade máxima. <br>";
    }
    

}

VelocMax(200.50); // chama a função com o parametro 200

// VelocMAx(); // chama a função sem o parametro, retorna erro


$velocidade = 150;
VelocMax($velocidade); // chama a função com o parametro $velocidade

VelocMax($nome); // chama a função com o parametro $nome


function DescAnimal($tipo, $raça){
    echo "O animal é um $tipo e a raça é $raça <br>";
}

DescAnimal("Cachorro", "Labrador"); // chama a função com os parametros "Cachorro" e "Labrador"
DescAnimal("Siamês", "Gato"); // chama a função com os parametros, deve ter atenção na ordem dos parametros

echo "<hr>";

//função par ou impar

function parouimpar($num){

    if($num % 2 == 0){
        echo "O número $num é par <br>";
    } else {
        echo "O número $num é ímpar <br>";
    }
}

parouimpar(10); // chama a função com o parametro 10
parouimpar(15); // chama a função com o parametro 15

echo "<hr>";

