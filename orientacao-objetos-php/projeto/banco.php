<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$primeiraConta = new Conta(new Titular('Daniel Cleber Batista'), new CPF('070.403.546-40'));
$primeiraConta->deposita(2300);
$primeiraConta->saca(1000);

$segundaConta = new Conta(new Titular('Danielle de Sousa Antonio'), new CPF('226.408.123-80'));
$segundaConta->deposita(15000);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() , PHP_EOL;
echo PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo();
echo $segundaConta->recuperaCpfTitular();
echo PHP_EOL;

echo Conta::recuperaNummeroDeContas() . " contas foram criadas" . PHP_EOL;