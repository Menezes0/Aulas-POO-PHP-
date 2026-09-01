<?php

// Jogada do usuário
$user = "tesoura";

// Opções do computador
$opcoes = ["pedra", "papel", "tesoura"];

// Jogada aleatória do computador
$computador = $opcoes[array_rand($opcoes)];

// Mostrando as jogadas
echo "Jogada do usuário: " . $user . "<br>";
echo "Jogada do computador: " . $computador . "<br>";

// Verificando o resultado
if ($user == $computador) {
    echo "Resultado: Empate!";
} elseif (
    ($user == "pedra" && $computador == "tesoura") ||
    ($user == "papel" && $computador == "pedra") ||
    ($user == "tesoura" && $computador == "papel")
) {
    echo "Resultado: Você venceu!";
} else {
    echo "Resultado: Computador venceu!";
}

?>