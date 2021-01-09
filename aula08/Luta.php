<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<?php
require_once 'Lutador.php';
class Luta {

    //ATRIBUTOS
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //MÉTODOS PÚBLICOS
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor) {
                case 0: //Empate
                    echo "<p><span class='foco'>Empate!</span></p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p><span class='foco'>".$this->desafiado->getNome()." venceu!</span></p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<p><span class='foco'>".$this->desafiante->getNome()." venceu!</span></p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
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
}?>
</html>