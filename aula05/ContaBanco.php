<?php


class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    public $deposito;
    public $saque;

    public function __construct($numConta, $tipo, $dono)
    {
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
    }

    public function abrirConta()
    {
        $this->status = true;
        if ($this->tipo == "cc") {
            $this->saldo = 50;
        } elseif ($this->tipo == "cp") {
            $this->saldo = 150;
        }
    }

    public function fecharConta($saldo)
    {
        if ($this->saldo == 0) {
            $this->status = false;
            echo "Sua conta foi encerrada com sucesso!";
        } else {
            echo "Você possui R$ $saldo em sua conta. Antes de encerrá-la, precisará sacar esse valor.";
            $this->sacar($saldo);
        }
    }

    public function depositar()
    {
        if ($this->status == true) {
            $this->saldo += $this->deposito;
        } else {
            echo "Sua conta não está ativa. Não será possível realizara o depósito.";
        }
    }

    public function sacar()
    {
        if (($this->status == true) && ($this->saque < $this->saldo)) {
            $this->saldo -= $this->saque;
            echo "Saque liberado com sucesso! Retire o seu dinheiro no local indicado.";
        }
        elseif (($this->status == true) && ($this->saque > $this->saldo)) {
            echo "Você não possui saldo suficiente para esta operação. Favor escolher novo valor";
        }
        else {
            echo "Sua conta não está ativa. Não será possível realizara o depósito.";
        }
    }

    public function pagarMensal() {
        if ($this->tipo == "cc") {
            $this->saldo -= 12;
        } elseif ($this->tipo == "cp") {
            $this->saldo -= 20;
        }
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}