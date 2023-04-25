<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$idade = $_POST['idade'];

$soma = $idade * 365;

echo "<h1>$soma dias de vida</h1>";

?>
