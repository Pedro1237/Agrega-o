<?php

require "Cliente.php";
require "Conta.php";

$cliente = new Cliente("João da Silva");
$conta = new Conta(12345, "Conta Corrente", 1000.0, $cliente);

echo "Número da conta: " . $conta->exibirNumero() . PHP_EOL;
echo "Nome da conta: " . $conta->exibirNome() . PHP_EOL;
echo "Saldo da conta: " . $conta->exibirSaldo() . PHP_EOL;
echo "Nome do cliente: " . $conta->exibirCliente() . PHP_EOL;
