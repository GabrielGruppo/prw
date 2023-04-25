<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$ano = $_POST['ano'];

if (($ano % 4 == 0) && ($ano % 100 != 0) || ($ano % 400 == 0)){
    echo "<h1>Ano bissesto</h1>";
}
else {
    echo "<h1>Ano não bissesto</h1>";
}

?>
