<?php
//4. Solicite o preço de uma mercadoria e o percentual de desconto. Exiba o valor 
//do desconto e o preço a pagar. 


print "\n Digite o valor da mercadoria: ";
$vmercadoria = (int) fgets (STDIN);

print "Digite o percentual de desconto: ";
$desconto = (int) fgets (STDIN);

$vdesconto = $vmercadoria * ($desconto /100);
$vfinal = $vmercadoria - $vdesconto; 

print "\n O valor da mercadoria após o desconto ficou em : $vfinal  ";