<?php


class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc") {
            $this->setSaldo(50);
        } elseif ($t == "cp") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Sua conta consta com saldo positivo. Não pode ser encerrada!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Sua conta consta com saldo negativo. Não pode ser encerrada!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." encerrada com sucesso!</p>";
        }
    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v realizado na conta de ".$this->getDono().".</p>";
        } else {
            echo "Sua conta não está ativa. Não será possível realizara o depósito.";
        }
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v realizado na conta de ".$this->getDono().".</p>";
            } else {
                echo "<p>Saldo insuficiente para saque</p>";
            }
        } else {
            echo "<p>Sua conta consta como inativa.</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "cc") {
            $v = 12;
        } elseif ($this->getTipo() == "cp") {
            $v= 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v cobrada na conta de ".$this->getDono().".</p>";
        } else {
            echo "<p>Porblemas com a conta. Não posso cobrar.</p>";
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