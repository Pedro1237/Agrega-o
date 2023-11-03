<?php

class Conta {
    private $numero;
    private $nome;
    private $saldo;
    private $cliente;

    public function __construct($numero, $nome, $saldo, $cliente) {
        $this->definirNumero($numero);
        $this->definirNome($nome);
        $this->definirSaldo($saldo);
        $this->definirCliente($cliente);
    }

    public function definirNumero($numero) {
        $this->numero = $numero;
    }

    public function definirNome($nome) {
        $this->nome = $nome;
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

    public function exibirNome() {
        return $this->nome;
    }

    public function exibirSaldo() {
        return $this->saldo;
    }

    public function exibirCliente() {
        return $this->cliente->exibirNome();
    }
}
?>
