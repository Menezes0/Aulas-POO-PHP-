<?php   
$a = 5;
$b = 7;
$c = 9;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {

    echo "O triângulo é válido.<br>";

    if ($a == $b && $b == $c) {
        echo "Quanto aos lados: Equilátero.<br>";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "Quanto aos lados: Isósceles.<br>";
    } else {
        echo "Quanto aos lados: Escaleno.<br>";
    }


    if ($a > $c) {
        $temp = $a;
        $a = $c;
        $c = $temp;
    }

    if ($b > $c) {
        $temp = $b;
        $b = $c;
        $c = $temp;
    }

    if (($a * $a) + ($b * $b) == ($c * $c)) {
        echo "Quanto aos ângulos: Retângulo.";
    } elseif (($a * $a) + ($b * $b) > ($c * $c)) {
        echo "Quanto aos ângulos: Acutângulo.";
    } else {
        echo "Quanto aos ângulos: Obtusângulo.";
    }

} else {
    echo "Os lados não formam um triângulo válido.";
}

?>