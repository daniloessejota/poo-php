<?php

class Banco  
{
    //ATRIBUTOS
    public $numConta;
    protected $tipodaConta;
    private $proprietario;
    private $saldo;
    private $status;

    //METODOS
    public function abrirConta($tipo)
    {
        $this->setTipoConta($tipo);
        $this->setStatusdaConta(true);

        $tipo == "CC" ? $this->setSaldodaConta(50) : $this->setSaldodaConta(150);
        //CC - Conta Corrente, CP - Conta Poupança
    }

    public function fecharConta ()
    {
        if ($this->getSaldodaConta() > 0) {
            echo "<p>A conta ainda tem saldo, impossível encerra-lá.</p>";
    } elseif ($this->getSaldodaConta() < 0) {
        echo "<p>A conta possui débitos, impossível encerra-lá.</p>";
    } else {
        $this->setStatusdaConta(false);
        echo "<p>A conta de " . $this->getCliente() . " foi fechada.</p>";
    }
    }

    public function depositar ($valor)
    {
        $ativada = $this->getStatusdaConta();
        $ativada !== false ? $this->setSaldodaConta($this->getSaldodaConta() + $valor) : print "A conta está fechada, impossível depositar.";
    }

    public function sacar ($valor)
    {
        if ($this->getStatusdaConta() != true) {
            if ($this->getSaldodaConta() >= $valor) {
                $this->setSaldodaConta($this->getSaldodaConta() - $valor);
            } else {
                echo "<p>Saldo insuficiente para saque na conta de " . $this->getCliente() . ".</p>";
            }
        } else {
            echo "<p>Conta fechada indisponível para saque.</p>";
        }
    }

    public function pagarMensalidade()
    {
        $this->getTipoConta() == "CC" ? $valor = 12 : $valor = 20;

        $this->getStatusdaConta() !== false ? $this->setSaldodaConta($this->getSaldodaConta() - $valor) : print "Conta inativa, impossível cobrar mensalidade.";
    }

    //MÉTODOS ESPECIAIS
    public function __construct()
    {
        $this->setSaldodaConta(0);
        $this->setStatusdaConta(false);

        print "<p>Conta criada com sucesso!<p>";
    }

    public function getNumeroConta()
    {
        $this->numConta;
    }

    public function setNumeroConta($novoNumConta)
    {
        $this->numConta = $novoNumConta;
    }

    public function getTipoConta()
    {
        return $this->tipodaConta;
    }

    public function setTipoConta($novoTipoConta)
    {
        $this->tipodaConta = $novoTipoConta;
    }

    public function getCliente()
    {
        return $this->proprietario;
    }

    public function setCliente($novoCliente)
    {
        $this->proprietario = $novoCliente;
    }

    public function getSaldodaConta()
    {
        return $this->saldo;
    }

    public function setSaldodaConta($novoSaldo)
    {
        $this->saldo = $novoSaldo;
    }

    public function getStatusdaConta()
    {
        $this->status;
    }

    public function setStatusdaConta($novoStatus)
    {
        $this->status = $novoStatus;
    }

}

?>