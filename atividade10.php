<?php

function removerCaractere(&$str, &$caractere) {
    $count = 0;
    // Substitui todas as ocorrências do caractere na string por uma string vazia
    $str = str_replace($caractere, '', $str, $count);
    // Retorna o número de vezes que o caractere foi removido
    return $count;
}

// Exemplo de uso:
$minhaString = "banana";
$meuCaractere = "a";

echo "String original: $minhaString\n";
echo "Caractere a ser removido: $meuCaractere\n";

$ocorrenciasRemovidas = removerCaractere($minhaString, $meuCaractere);

echo "String modificada: $minhaString\n";
echo "Número de vezes que o caractere foi removido: $ocorrenciasRemovidas\n";
