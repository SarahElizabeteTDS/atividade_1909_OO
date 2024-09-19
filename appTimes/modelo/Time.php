<?php

class Time
{
    private string $nome;
    private string $cidade;

    private array $jogadores;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getJogadores(): array
    {
        return $this->jogadores;
    }

    public function setJogadores(array $jogadores): self
    {
        $this->jogadores = $jogadores;

        return $this;
    }
}
