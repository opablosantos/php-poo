<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero {
    public function usarBolsa() {
        echo "<p>Usando a Bolsa</p>";
    }

    public function locomover() {
        echo "<p>Saltando</p>";
    }
}