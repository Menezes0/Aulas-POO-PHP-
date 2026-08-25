<?php

$massa = 75; // em kg
$metros = 1.75; 

// Calculando o IMC
$imc = $massa / ($metros * $metros);

// Classificação
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
} elseif ($imc < 35) {
    $classificacao = "Obesidade Grau I";
} elseif ($imc < 40) {
    $classificacao = "Obesidade Grau II";
} else {
    $classificacao = "Obesidade Grau III";
}

// Exibindo o resultado
echo "IMC: " . number_format($imc, 2) . "<br>";
echo "Classificação: " . $classificacao;

?>