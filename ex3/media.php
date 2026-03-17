<?php
$num1 = $_POST["nota1"];
$num2 = $_POST["nota2"];
$num3 = $_POST["nota3"];

$media = ($num1 + $num2 + $num3) / 3;

if ($media >= 7) {
    echo "Aluno aprovado, média: " . $media;
} else {
    echo "Aluno reprovado, média: " . $media;
}
?>