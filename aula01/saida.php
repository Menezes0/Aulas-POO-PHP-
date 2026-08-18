<?php
    echo 'Mirian<br>';

    //interpolação aspas duplas escreve o conteudo da variavel, aspas simples escreve o literal da variavel
    $turma = "2° Período de Análise e Desenvolvimento de Sistemas";
    echo "Turma: {$turma}<br>";

    //interpolação
    $nome_if = "IFRO";
    echo "Escola \"$nome_if\"<br>";

    //Listas [UL/LI]
    echo "<h2> Lista Matérias</h2>";
    echo "<ul>";
        echo "<li> Matemática";
        echo "<li> Desenvolvimento Web";
        echo "<li> Programação Orientada a Objetos";
    echo "</ul><br>";


echo "Resultado de 7 x 8 abaixo:<br>";
?>
<?= 7*8 ?>

