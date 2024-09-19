<?php

require_once("modelos/Turma.php");

class Aluno
{
    private string $nome;
    private int $idade;
    private Turma $turma;

    public function __construct($n, $i, $t)
    {
        $this->nome = $n;
        $this->idade = $i;
        $this->turma = $t;
    }

    public function __toString()
    {
        return "Aluno(a) : " . $this->nome . "\nIdade: " . $this->idade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getTurma(): Turma
    {
        return $this->turma;
    }

    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}