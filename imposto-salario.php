<?php

function calcularImposto($salario) {
    $imposto = 0; 
    if ($salario <= 1903.98) {
        echo "Isento de imposto";
        echo "$imposto";
    } elseif ($salario >= 1903.99 && $salario <= 2826.65) {
        echo "Será aplicado um imposto de 7,5% sobre o salário de R$ " . number_format($salario, 2, ',', '.');
        $imposto = ($salario* 7.5)/100;
        echo "$imposto";
    } elseif ($salario >= 2826.66 && $salario <= 3751.05) {
        echo "Será aplicado um imposto de 15% sobre o salário de R$ " . number_format($salario, 2, ',', '.');
        $imposto = ($salario* 15)/100;
        echo "$imposto";
    } elseif ($salario >= 3751.06 && $salario <= 4664.68) {
        echo "Será aplicado um imposto de 22,5% sobre o salário de R$ " . number_format($salario, 2, ',', '.');
        $imposto = ($salario* 22.5)/100;
        echo "$imposto";
    } else {
        echo "Será aplicado um imposto de 27,5% sobre o salário de R$ " . number_format($salario, 2, ',', '.');
        $imposto = ($salario* 27.5)/100;
        echo "$imposto";
    }
}

// Exemplo de uso
echo calcularImposto(4664.70);
?>