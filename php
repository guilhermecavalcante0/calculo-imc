<?php
// variavel para armazenar o peso em kg
$peso = (float) readline("Digite o seu peso em kg (ex: 70.5): ");

// variavel para armazenar a altura em metros
$altura = (float) readline("Digite a sua altura em metros (ex: 1.75): ");

// variavel para armazenar o IMC calculado
$imc = $peso / ($altura * $altura); // fórmula do IMC

// mostra o IMC com 2 casas decimais
echo "\nSeu IMC é: " . number_format($imc, 2, '.', '') . "\n";
?>
