<?php
// Implemntar futuramente a validacao do CPF
class CPF
{
    private string $numeroCpf;

    public function __construct(string $numeroCpf)
    {
        $this->numeroCpf = $numeroCpf;
    }

    public function recuperaCpf() : string
    {
        return $this->numeroCpf;
    }
}