<?php
// Crie um script que receba um CPF como string de 11 dígitos (ex: '12345678901') e execute as seguintes tarefas: • Formate e exiba como XXX.XXX.XXX-XX usando substr() e concatenação • Verifique se tem exatamente 11 dígitos (strlen + is_numeric) • Verifique se NÃO é uma sequência repetida (111.111.111-11 é inválido) • Calcule o 1° dígito verificador usando o algoritmo real do CPF • Exiba se o CPF é 'Válido' ou 'Inválido' Teste com CPFs reais gerados online para conferir.  
// 

$cpf = "12345678909";

if (strlen($cpf) != 11 || !is_numeric($cpf)) {

    echo "CPF inválido: deve conter exatamente 11 dígitos.";

} else {

    // 2. Verificar se todos os números são iguais

    if ($cpf == "00000000000" ||

        $cpf == "11111111111" ||

        $cpf == "22222222222" ||

        $cpf == "33333333333" ||

        $cpf == "44444444444" ||

        $cpf == "55555555555" ||

        $cpf == "66666666666" ||

        $cpf == "77777777777" ||

        $cpf == "88888888888" ||

        $cpf == "99999999999") {

        echo "CPF inválido: sequência repetida.";

    } else {



        // 3. Formatar o CPF usando substr() e concatenação

        $cpfFormatado = substr($cpf, 0, 3) . "." .

                        substr($cpf, 3, 3) . "." .

                        substr($cpf, 6, 3) . "-" .

                        substr($cpf, 9, 2);

        echo "CPF formatado: " . $cpfFormatado . "<br>";

        $soma = 0;

        $soma = $soma + ($cpf[0] * 10);

        $soma = $soma + ($cpf[1] * 9);

        $soma = $soma + ($cpf[2] * 8);

        $soma = $soma + ($cpf[3] * 7);

        $soma = $soma + ($cpf[4] * 6);

        $soma = $soma + ($cpf[5] * 5);

        $soma = $soma + ($cpf[6] * 4);

        $soma = $soma + ($cpf[7] * 3);

        $soma = $soma + ($cpf[8] * 2);



        $resto = $soma % 11;

        if ($resto < 2) {

            $digito1 = 0;

        } else {

            $digito1 = 11 - $resto;

        }



        if ($digito1 != $cpf[9]) {

            echo "CPF Inválido";

        } else {

            $soma = 0;

            $soma = $soma + ($cpf[0] * 11);

            $soma = $soma + ($cpf[1] * 10);

            $soma = $soma + ($cpf[2] * 9);

            $soma = $soma + ($cpf[3] * 8);

            $soma = $soma + ($cpf[4] * 7);

            $soma = $soma + ($cpf[5] * 6);

            $soma = $soma + ($cpf[6] * 5);

            $soma = $soma + ($cpf[7] * 4);

            $soma = $soma + ($cpf[8] * 3);

            $soma = $soma + ($cpf[9] * 2);



            $resto = $soma % 11;



            if ($resto < 2) {

                $digito2 = 0;

            } else {

                $digito2 = 11 - $resto;

            }

            if ($digito2 == $cpf[10]) {

                echo "CPF Válido";

            } else {

                echo "CPF Inválido";

            }

        }

    }

}
?>