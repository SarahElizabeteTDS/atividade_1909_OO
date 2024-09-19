<?php

require_once("Cidade.php");

class Estado
{
    private string $nome;
    private string $sigla;

    public function __toString()
    {
        return $this->nome . "-" . $this->sigla;
    }

    public function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sigla = $s;
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

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

}