<?php

class Conta {
    private $numero;
    private $saldo;
    private $cliente; // Relação de agregação com a classe Cliente

    public function __construct($numero, $saldo, Cliente $cliente) {
        $this->definirNumero($numero);
        $this->definirSaldo($saldo);
        $this->definirCliente($cliente);
    }

    public function definirNumero($numero) {
        $this->numero = $numero;
    }

    public function definirSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function definirCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function exibirNumero() {
        return $this->numero;
    }

    public function exibirSaldo() {
        return $this->saldo;
    }

    public function exibirCliente() {
        return $this->cliente->exibirNome();
    }
}
?>
