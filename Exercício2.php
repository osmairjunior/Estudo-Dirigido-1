<?php

//2. Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o
//total em segundos.

print "Indique a quantidade de: \n";

print "Dias: ";
$dias = (int) fgets(STDIN);
$SporDias = $dias * 86400;

print "Horas: ";
$horas = (int) fgets(STDIN);
$SporHoras = $horas * 3600;

print "Minutos: ";
$min = (int) fgets(STDIN);
$Spormin = $min * 60;

print "Segundos: ";
$seg= (int) fgets(STDIN);

$TotalSeg = ($seg + $Spormin + $SporHoras + $SporDias);

print "a quantidade total de segundos ficou: $TotalSeg \n";