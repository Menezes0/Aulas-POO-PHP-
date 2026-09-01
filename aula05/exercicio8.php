<?php
// verifica se é primo
function Primo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }
    return true; 
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercicio 08 Apostila - Tabuadas</title>
<style>
    body {
        font-family: "Times New Roman", serif;
        background-color: #60c2fa;
        padding: 20px;   
    }

    h1 {
        text-align: center;
    }

    
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    
    .tabuada {
        border: 2px solid #5e2de4;
        border-radius: 8px;
        background-color: #fff;
        width: 130px;
        padding: 10px;
    }

    .tabuada h2 {
        text-align: center;
        margin-top: 0;
        font-size: 18px;
        background-color: #000;
        color: #fff;
        padding: 5px;
        border-radius: 5px;
    }

    .tabuada p {
        margin: 4px 0;
        font-size: 15px;
    }


    .primo {
        color: red;
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>Tabuadas de 1 a 10</h1>

<div class="container">

<?php
// Laço externo: percorre as tabuadas de 1 a 10
for ($tabuada = 1; $tabuada <= 10; $tabuada++) {
    echo "<div class='tabuada'>";
    echo "<h2>Tabuada do $tabuada</h2>";

    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        $resultado = $tabuada * $multiplicador;

    
        if (Primo($resultado)) {
            echo "<p class='primo'>$tabuada x $multiplicador = $resultado</p>";
        } else {
            echo "<p>$tabuada x $multiplicador = $resultado</p>";
        }
    }

    echo "</div>";
}
?>

</div>

</body>
</html>
