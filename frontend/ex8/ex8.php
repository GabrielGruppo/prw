<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$nome = $_POST['nome'];
$data = $_POST['data'];

if ($data <= "12:00"){
    echo "<h1>Bom dia $nome</h1>";
}
if ($data > "12:00" && $data <= "18:00"){
    echo "<h1>Boa tarde $nome</h1>";
}
if ($data > "18:00"){
    echo "<h1>Boa noite $nome</h1>";
}

?>
