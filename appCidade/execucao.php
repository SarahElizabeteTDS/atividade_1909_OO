<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = array();

$santaCatarina = new Estado("Santa Catarina", "SC");
$parana = new Estado("Paraná", "PR");

$floripa = new Cidade("Florianópolis", 537211, 3, $santaCatarina);
$blumenau = new Cidade("Blumenau", 361855, 21, $santaCatarina);
$cascavel = new Cidade("Cascavel", 348051, 781, $parana);
$foz = new Cidade("Foz do Iguaçu", 258248, 164, $parana);

array_push($cidades, $floripa);
array_push($cidades, $blumenau);
array_push($cidades, $cascavel);
array_push($cidades, $foz);

foreach ($cidades as $c) 
{
    print $c . "\n";
}
