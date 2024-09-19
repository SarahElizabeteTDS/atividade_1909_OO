<?php

class Turma
{
    private string $nome;
    private string $curso;
    private array $alunos;

    public function __construct($n, $c, $a)
    {
        $this->nome = $n;
        $this->curso = $c;
        $this->alunos = $a;
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

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }

    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}