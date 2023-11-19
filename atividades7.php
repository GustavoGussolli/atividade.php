<?php

// Função para exibir a matriz
function exibirMatriz($matriz) {
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo $matriz[$i][$j] . "\t";
        }
        echo "\n";
    }
}

// Inicialização da matriz
$matriz = array();

// Preenchimento da matriz pelo usuário
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 6; $j++) {
        echo "Digite o valor para a posição ($i, $j): ";
        $matriz[$i][$j] = intval(readline());
    }
}

// Exibição da matriz
echo "\nMatriz informada:\n";
exibirMatriz($matriz);

// Encontrar e exibir números pares e suas posições
echo "\nNúmeros pares e suas posições:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($matriz[$i][$j] % 2 == 0) {
            echo "Número par {$matriz[$i][$j]} na posição ($i, $j)\n";
        }
    }
}

