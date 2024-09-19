<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = array();

$santaCatarina = new Estado("Santa Catarina", "SC");
$floripa = new Cidade("Florianópolis", 537211, 3, $santaCatarina);
array_push($cidades, $floripa);

$blumenal = new Cidade("Blumenal", 361855, 21, $santaCatarina);
array_push($cidades, $blumenal);

$parana = new Estado("Paraná", "PR");
$cascavel = new Cidade("Cascavel", 348051, 781, $parana);
array_push($cidades, $cascavel);

$foz = new Cidade("Foz do Iguaçu", 258248, 164, $parana);
array_push($cidades, $foz);

foreach ($cidades as $c) 
{
    print $c . "\n";
}