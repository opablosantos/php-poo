<?php
require_once 'Lutador.php';
class Luta {

    //ATRIBUTOS
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //MÉTODOS PÚBLICOS
    public function marcarLuta() {

    }

    public function lutar() {

    }

    //MÉTODOS ESPECIAIS
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}