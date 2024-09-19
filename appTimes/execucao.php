<?php

//requires
require_once("modelo/Time.php");
require_once("modelo/Jogador.php");
//criar o objeto time
$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");
//print_r($time);

//criar o jogador
$suarez = new Jogador();
$suarez->setNome("Luiz Soarez");
$suarez->setNumero(9);
$suarez->setTime($time);

//criar o jogador
$geromel = new Jogador();
$geromel->setNome("Pedro Geromel");
$geromel->setNumero(4);
$geromel->setTime($time);

print_r($suarez);

//imprimir o nome do time
//print $suarez->getTime()->getNome();

//so pra inicializar
$jogadores = array();
//add ao array
array_push($jogadores, $suarez);
array_push($jogadores, $geromel);

$time->setJogadores($jogadores);
print_r($time->getJogadores());
//ou
print_r($jogadores);
