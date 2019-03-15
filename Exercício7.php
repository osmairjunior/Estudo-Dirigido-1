<?php
/*7. Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário, 
assim como a quantidade de dias pelos quais o carro foi alugado. 
Calcule o preço a pagar, sabendo que o carro custa R$ 60,00 por dia e R$ 0,15 por km rodado.*/

print "\n Informe o período de dias em que o veículo foi alugado: ";
$dias = (int) fgets (STDIN);

print "\n Digite a quilometragem rodada durante o aluguel do veículo: ";
$kms = (int) fgets (STDIN);

$valor = ($dias * 60) + ($kms * 0.15);

print "\n O valor total pelo aluguel do carro é: R$ $valor \n";