<?php

//Crie um script que declare as 4 notas bimestrais de um aluno (valores fixos no código). 
// Calcule e exiba: • A média aritmética com 2 casas decimais • A maior nota (use max()) • A menor nota (use min()) 
// Se a média >= 6.0: exiba 'APROVADO' em verde (use span com style) 
// Se a média < 6.0: exiba 'REPROVADO' em vermelho 
// A nota que faltaria para atingir média 6.0 (se reprovado)

    
$nota1 = 5.5;
$nota2 = 6.0;
$nota3 = 4.0;
$nota4 = 4.5;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
$maiorNota = max($nota1, $nota2, $nota3, $nota4);
$menorNota = min($nota1, $nota2, $nota3, $nota4);       

// Formatação da média com 2 casas decimais
$mediaFormatada = number_format ($media, 2, '.', '');

// Exibição dos resultados estruturados em HTML
echo "<h2>Resultado do Aluno</h2>";
echo "Notas bimestrais abaixo:<br>";
echo "1° Bimestre: $nota1 <br>";
echo "2° Bimestre: $nota2 <br>";
echo "3° Bimestre: $nota3 <br>";
echo "4° Bimestre: $nota4 <br>";
echo "</br>";
echo "Média Aritmética: $mediaFormatada <br>"; 
echo "</br>";
echo "Maior Nota: $maiorNota <br>";
echo "Menor Nota: $menorNota <br>";

echo "</br>";
// Verificação do status de aprovação
if ($media >= 6.0) {
    echo "Status: <span style='color: green; font-weight: bold;'>APROVADO</span><br>";
} 
else {
    echo "Status: <span style='color: red; font-weight: bold;'>REPROVADO</span><br>";
    
    // Cálculo da nota total que faltou para atingir a média 6.0
    // Para média 6.0 em 4 bimestres, a soma das notas precisa ser 24 (6.0 * 4)
    $somaAtual = $nota1 + $nota2 + $nota3 + $nota4;
    $pontosFaltantes = 24.0 - $somaAtual;
    $pontosFaltantesFormatado = number_format($pontosFaltantes, 2, '.', '');
    
    echo "Nota total faltante para atingir a média 6.0: <strong>$pontosFaltantesFormatado</strong> pontos.<br>";
}

?>