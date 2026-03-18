<?php
if ($_POST) {
    $dolar = $_POST["dolar"];
    $taxa = 5.20;
    $real = $dolar * $taxa;
    echo "Valor em reais: R$ " . number_format($real, 2, ',', '.');
}
?>