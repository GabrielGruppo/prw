<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$menu = $_POST['menu'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($menu == "soma"){
    $res = $n1 + $n2;

    echo $res;
}

else if ($menu == "sub"){
    $res = $n1 - $n2;

    echo $res;
}

else if ($menu == "div"){
    $res = $n1 / $n2;

    echo $res;
}

else if ($menu == "mult"){
    $res = $n1 * $n2;

    echo $res;
}
?>
