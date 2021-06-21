<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {
    function emitirSom() {
        echo "<p>Au!Au!Au!</p>";
    }

    function reagirFrase($frase) {
        if($frase=='Bora lá') {
            echo "<p>Abanar o rabo e latir</p>";
        }
        else {
            echo "<p>Rosnar</p>";
        }
    }

    function reagirHora($hora, $min) {
        if($hora<12) {
            echo "<p>Abanar o rabo</p>";
        }
        elseif($hora>18) {
            echo "<p>Ignorar</p>";
        }
        else {
            echo "<p>Abanar o rabo e latir</p>";
        }
    }

    function reagirDono($dono) {
        if($dono) {
            echo "<p>Abanar o rabo</p>";
        }
        else {
            echo "<p>Rosnar e latir</p>";
        }
    }

    function reagirIdadePeso($idade, $peso) {
        if($idade<5) {
            if($peso<10) {
                echo "<p>Abanar o rabo</p>";
            }
            else {
                echo "<p>Latir</p>";
            }
        }
        elseif($peso<10) {
            echo "<p>Rosnar</p>";
        }
        else {
            echo "<p>Ignorar</p>";
        }
    }
}