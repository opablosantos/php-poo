<?php


class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Métodos
    function apresentar() {

    }

    function status() {

    }

    function ganharLuta() {

    }

    function perderLuta() {

    }

    function empatarLuta() {

    }

    //Métodos Especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pe;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
}