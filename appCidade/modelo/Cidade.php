<?php

require_once("Estado.php");

class Cidade
{
    private string $nome;
    private int $qtdHabitantes;
    private int $altitude;
    private Estado $estado;

    public function __toString()
    {
        return "A cidade de " . $this->nome . ", localizada no estado " . $this->estado . ", possui " . $this->qtdHabitantes . " habitantes e uma altitude de " . $this->altitude . " metros.\n";
    }

    public function __construct($n, $q, $a, $e)
    {
        $this->nome = $n;
        $this->qtdHabitantes = $q;
        $this->altitude = $a;
        $this->estado = $e;
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

    public function getQtdHabitantes(): int
    {
        return $this->qtdHabitantes;
    }

    public function setQtdHabitantes(int $qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    public function getAltitude(): int
    {
        return $this->altitude;
    }

    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getEstado(): Estado
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}