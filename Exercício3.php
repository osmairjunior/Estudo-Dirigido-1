<?php 

//3. Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a
//porcentagem do aumento. Exiba o valor do aumento e do novo salário.

print " \n Digite o valor seu sálario: ";
$salario = (int) fgets(STDIN);

print " \n Digite o quanto seu salário aumentou(%): ";
$aumento = (int) fgets(STDIN);

$valor_aumento = $salario* ($aumento/100);
$salario_final  =  $salario + $valor_aumento;

print "\n Seu salário final vai ser: $salario_final ";