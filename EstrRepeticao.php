<?php

//definicao do contador
$x =0;

//inicio /deficinao da estrutura de repeticao
while($x < 10){

    //corpo do loop
    echo "O valor de x é: $x <br>";
    
    //incremento do contador
    $x++; // ou $x = $x + 1; 
}

echo "continuando codigo...<hr>";

//definicao do contador
$y = 0;

//inicio /deficinao da estrutura de repeticao
while($y <= 10){

    //corpo do loop
    echo "O valor de y é: $y <br>";
    
    //incremento do contador
    $y = $y + 2; // OU $y += 2;  
}

echo "continuando codigo...<hr>";

//definicao do contador
$z = 10;

//inicio /deficinao da estrutura de repeticao
while($z > 0){

    //corpo do loop
    echo "O valor de z é: $z <br>";
    
    //incremento do contador
    $z = $z - 1; // OU $z--;  
}

echo "continuando codigo...<hr>";

$a = 10;

//inicio /deficinao da estrutura de repeticao
while($a > 0){

    //corpo do loop
    echo "O valor de a é: $a <br>";
    
    //incremento do contador
    $a = $a - 2; // OU $a =- 2;  
}

echo "continuando codigo...<hr>";

$b = 10;

//inicio /deficinao da estrutura de repeticao
while($b > 0){

    //corpo do loop
    if ($b % 2 != 0){
        echo "O valor de b é: $b <br>";
    }
    
    //incremento do contador
    $b = $b - 1; // OU $b--;  
}

echo "continuando codigo...<hr>";

//loop string (dados)

$arr = [5, "Robson", true, false, "opa", 10.5, "Teste", true, [], "palavra", 5, 10, "ola"];
$c = count($arr); //conta quantos elementos tem no array
$d = 0; //contador

while($d < $c){

    if(is_string($arr[$d])){
        echo $arr[$d] . "<br>";
    }
    $d++;

}

echo "continuando codigo...<hr>";

//entendo braek

$e = 0;

while($e < 30){

    if($e == 24){
        echo "O valor de e é: $e <br>";
        break; //interrompe o loop
    }
    
    echo "O valor de e é: $e <br>";
    $e += 2; //incremento do contador
}

echo "saiu do loop...<hr>";

//loop aninhado

$f = 1;

while($f <= 10){

    echo "Loop externo valor de f é: $f <br>";
    
    $g = 1; //contador interno

    while($g <= 5){
        echo "Loop Interno : valor de g é: $g <br>";
        $g++; //incremento do contador interno
    }

    $f++; //incremento do contador externo
}

echo "continuando codigo...<hr>";

//loop com continue

$h = 10;

while($h > 0){

    if($h == 5 || $h == 7){

        echo "Pulando o valor de h: $h <br>";
        $h--; //decremento do contador
        continue; //pula para a proxima iteração do loop
    }

    if($h == 2){
        
        echo "Terminando o loop, pois h é igual a 2 <br>";
        break; //interrompe o loop
    }

    echo "O valor de h é: $h <br>";

    $h--; //decremento do contador
}

echo "continuando codigo...<hr>";

//do while

$i = 0;

do {
    echo "O valor de i é: $i <br>";
    $i++; //incremento do contador
} while ($i <= 5);

echo "continuando codigo...<hr>";

//for

//contador, condição e incremento
for ($j = 0; $j < 10; $j++) {
    echo "O valor de j é: $j <br>";
}

echo "continuando codigo...<hr>";

//foreach

$arr2 = ["a" => 1, "b" => 2, "c" => 3];

foreach ($arr2 as $item => $value) {
    echo "Chave: $item, Valor: $value <br>";
}
echo "continuando codigo...<hr>";


//for com if

for ($k = 0; $k < 10; $k++) {
    if ($k % 2 == 0) {
        echo "O valor de k é: $k (par)<br>";
    } else {
        echo "O valor de k é: $k (ímpar)<br>";
    }
}

echo "continuando codigo...<hr>";

//for com continue

for ($l = 0; $l < 10; $l++) {
    if ($l == 5) {
        echo "Pulando o valor de l: $l <br>";
        continue; //pula para a próxima iteração
    }
    echo "O valor de l é: $l <br>";
}

echo "continuando codigo...<hr>";

//for com break

for ($m = 0; $m < 10; $m++) {
    if ($m == 7) {
        echo "Terminando o loop, pois m é igual a 7 <br>";
        break; //interrompe o loop
    }
    echo "O valor de m é: $m <br>";
}

echo "continuando codigo...<hr>";

//for aninhado

for ($n = 1; $n <= 3; $n++) {
    echo "Loop externo valor de n é: $n <br>";
    
    for ($o = 1; $o <= 2; $o++) {
        echo "Loop Interno : valor de o é: $o <br>";
    }
}

echo "continuando codigo...<hr>";

//loop infinito
//for ($p = 0; $p < 10; $p--) {
//    echo "Este loop é infinito!<br>";
//}
echo "Loop infinito comentado para evitar travamento do servidor.<hr>";



?>
