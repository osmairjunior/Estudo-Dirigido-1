<?php
//Calcule o tempo de uma viagem de carro.
//Pergunte a distância a percorrer e a velocidade média esperada para a viagem.


print "\n Digite a distância(km) a ser percorrida: ";
$distancia = (int) fgets(STDIN);

print "\n Digite a velocidade média(Km/h) esperada para a viagem (Km/h): ";
$Vmedia = (int) fgets (STDIN);

$tempo   = $distancia / $Vmedia;

print "\n A viagem durará cerca de $tempo hora(s) ";