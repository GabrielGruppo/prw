<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$lado = $_POST['lado'];
$comprimento = $_POST['comprimento'];
$area = $lado * $comprimento;
echo "<h1>$area</h1>";

?>
