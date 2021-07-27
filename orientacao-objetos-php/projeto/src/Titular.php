<?php

class Titular
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    private function validaNome(string $nome) : void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}