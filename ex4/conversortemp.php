<?php
$grausC = $_POST["temperatura"];
$grausC = (float) $grausC;
$grausF = ($grausC * 9/5) + 32;
echo "Temperatura em Fahrenheit: " . $grausF;

?>
