<?php

//1. Escreva um programa que leia um valor em metros e o exiba convertido em milímetros

print"escreva a quantidade em metros: ";
$metros = (int) fgets(STDIN);

$milimetro = $metros * 1000;

print "a quantidade em milimetros é: $milimetro mm \n";
