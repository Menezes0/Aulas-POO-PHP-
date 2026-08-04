<?php

//Dado o texto: '  Curso Tecnico em Desenvolvimento de Sistemas  ' . Remova os espaços do início e fim 2. Converta para letras maiúsculas 3. Conte quantos caracteres tem (depois de remover os espaços) 4. Extraia apenas a palavra 'Desenvolvimento' usando substr() 5. Substitua 'Sistemas' por 'Software' 6. Exiba cada resultado em uma linha separada com <br> 

$texto = "Curso Tecnico em Desenvolvimento de Sistemas";

//1. Remova os espaços do início e fim
$texto = trim($texto);

//2. Converta para letras maiúsculas
$texto = strtoupper($texto);

//3. Conte quantos caracteres tem (depois de remover os espaços)
$quantidadeCaracteres = strlen($texto);

//4. Extraia apenas a palavra 'Desenvolvimento' usando substr()
$palavra = substr($texto, 18, 13);

//5. Substitua 'Sistemas' por 'Software'
$texto = str_replace('SISTEMAS', 'SOFTWARE', $texto);

//6. Exiba cada resultado em uma linha separada com <br>
echo $texto . "<br>";
echo $quantidadeCaracteres . "<br>";
echo $palavra . "<br>";

?>