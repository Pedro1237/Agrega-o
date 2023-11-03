<?php

class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->definirNome($nome);
    }

    public function definirNome($nome) {
        $this->nome = $nome;
    }

    public function exibirNome() {
        return $this->nome;
    }
}
?>
