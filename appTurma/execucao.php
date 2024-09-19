<?php

require_once("modelos/Alunos.php");
require_once("modelos/Turma.php");

$alunos = array();
$turma = new Turma("TDS2023", "TDS", $alunos);

for ($i=0; $i < 5; $i++) 
{ 
    $aluno[$i] = new Aluno(readline("Insira o nome do aluno: "), readline("Insira a idade do aluno: "), $turma);
    array_push($alunos, $aluno[$i]);
}
$turma->setAlunos($alunos);

foreach ($alunos as $a) 
{
    print $a . "\n";
}






