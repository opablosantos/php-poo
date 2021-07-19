<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        super($nome, $idade, $sexo);
        $this->login = $login;
    }

    public function assistirMaisUm() {
        $this->totAssistido++;
    }
}