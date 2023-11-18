<?php

// Criar e inicializar a matriz
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Inicializar a variável para armazenar a soma
$soma = 0;

// Calcular a soma dos elementos da matriz
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        $soma += $matriz[$i][$j];
    }
}

// Mostrar a soma na tela
echo "A soma dos elementos da matriz é: " . $soma;
