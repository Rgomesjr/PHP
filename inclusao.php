

<b>include</b>

<?php

    include "teste.php";
    
?>

<p>Depois do include</p>
<p>Valor de a: <?php echo $a; ?></p>

<hr>

<b>require</b>

<?php

    //require "teste1.php"; //erro fatal se o arquivo não existir
    require "teste.php"; //não irá executar se o arquivo não existir

?>

<p>Depois do require</p>
<p>Valor de a: <?php echo $a; ?></p>

<hr>

<b>include_once e require_once</b>

<?php

    include_once "teste.php"; //inclui apenas se não foi incluído antes
    include_once "teste.php"; //não fará nada, pois já foi incluído

    require_once "teste.php"; //inclui apenas se não foi incluído antes
    require_once "teste.php"; //não fará nada, pois já foi incluído

    //como ja foram incluidos acima no codigo, não exibira nada e nem gerará erro

?>


<p>Depois do include_once e require_once</p>
<p>Valor de a: <?php echo $a; ?></p>

<hr>

<?php

$nomet = "Robson";
$sobrenomet = "Gomes";

?>

<form action="">
    <div>
        <input type="text" value="<?= $nomet ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenomet ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<hr>


<?php

    include_once "backend.php"; //inclui apenas se não foi incluído antes

?>

<h1>Teste de inclusao2</h1>
<p>Nome: <?php echo $nome; ?></p>

<h2>Produtos</P>
<ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
    </ul>
