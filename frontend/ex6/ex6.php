<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$freq = $_POST['freq'];

echo "<h1>$nome</h1>";
echo "<h1>$n1</h1>";
echo "<h1>$n2</h1>";
echo "<h1>$freq</h1>";

$media = ($n1+$n2)/2;

echo "<h1>$media</h1>";

if ($media <= 5){
    echo "<h1 style='color: red'>Reprovado por nota</h1>";
}
if ($freq < 75){
    echo "<h1 style='color: orange'>Reprovado por frequência</h1>";
}
if ($freq > 75 && $media > 5){
    echo "<h1 style='color: green'>Aprovado</h1>";
}
?>
