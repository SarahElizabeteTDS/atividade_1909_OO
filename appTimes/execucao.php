<?php

//requires
require_once("modelo/Time.php");
//criar o objeto time
$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");
print_r($time);