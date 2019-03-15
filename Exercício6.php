<?php
//6. Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32. 

print "\n Escreva a temperatura em graus Celcius (°C): ";
$C = (int) fgets (STDIN);

$F = $C * 9 / 5 + 32;

print "\n Os $C °C equivalem à $F °F Fahrenheit's \n";