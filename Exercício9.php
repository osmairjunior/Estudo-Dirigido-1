<?php
/*9. (DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir
o tamanho em metros quadrados da área a ser pintada.
Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta 
é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00. 
Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações: */


print "Escreva a área da parede em m²: \n";
$area_parede = (int) fgets(STDIN);


print "Digite o código para sua opçâo de compra:
1 - Latas de 18 litros
2 - Galões de 3,5 litros
3 - Misturas os dois \n";
$opcao = (int) fgets(STDIN);

// a. comprar apenas latas de 18 litros; 

if ($opcao === 1)
{$litros = ceil($area_parede / 6);
$latas = ceil($litros / 18);
$precofim = round($latas * 80);

print "Você precisa de $litros litros para cobrir a area. Compre $latas latas, custando R$$precofim,00 \n";
}

//b. comprar apenas galões de 3,6 litros;

if ($opcao === 2)
{$litros = ceil($area_parede / 6);
$latas = ceil($litros / 3.6);
$precofim = round($latas * 25);
print "Você precisa de $litros litros para cobrir a area. Compre $latas latas, custando R$$precofim,00 \n";}

/* c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 
10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias. */
if ($opcao === 3)

{$litros = ceil($area_parede / 6);
$latas = ceil($litros/18);
$resto = ceil($latas%18);
$galoes = ceil($resto/3.6);
$precofim = round($latas * 80 + $galoes * 25);
$porcento = round($precofim * 10 / 100);
$precofim = round($precofim + $porcento);
print "Você precisa de $litros L para cobrir a area. Compre $latas galões de 3,6 L, o preço final ficará R$ $precofim,00 \n";}
