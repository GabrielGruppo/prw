<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST

$cp = $_POST['cp'];
$cm = $_POST['cm'];
$cg = $_POST['cg'];

$totp = $cp * 10;
$totm = $cm * 12;
$totg = $cg * 15;

$tot = $totp + $totm + $totg;

echo "<h1>$tot</h1>";

?>
