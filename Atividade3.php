<?php

/*
Faça um programa em PHP que defina uma variável com o peso e a altura
de uma pessoa. Calcule e mostre o IMC.
*/

echo "

Atividade 3";

echo "";
echo "ALTURA: 1.65";
echo "PESO: 70";

$altura = 1.65;
$peso = 70;

echo "";

$imc = $peso / ($altura*$altura);
echo "O IMC É: ".number_format($imc, 2);

echo "";

?>