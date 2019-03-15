<?php
/* 8. Escreva um programa para calcular a redução do tempo de vida de um fumante. 
Pergunte a quantidade de cigarros fumados por dia e quantos anos ele já fumou. 
Considere que um fumante perde 10 minutos de vida a cada cigarro, 
calcule quantos dias de vida um fumante perderá. Exiba o total de dias.*/

print "\n Escreva a quantidade de cigarros que você fuma por dia: ";
$cigarrosdias = (int) fgets (STDIN);

print "\n Agora a quantidade de anos que você fumou: ";
$anos = (float) fgets (STDIN);

$dias_Amenos = ((($cigarrosdias * 10) /60 ) / 24 ) * ($anos * 365);

print " \n  Você perdeu cerca de $dias_Amenos dia(s) de vida por causa do seu cigarrito :). \n";