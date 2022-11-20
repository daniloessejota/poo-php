<?php

require_once 'Estudante.php';

//Uma classe final não pode gerar filhas
final class EstudanteBolsista extends Estudante {
    //ATRIBUTOS
    private $descontoBolsa;

    //MÉTODOS
    public function renovarBolsa()
    {
        echo "O aluno " . $this->getNome() . " teve a sua bolsa renovada!</br>";
    }

    public function pagarMensalidade() //este método sobrepõe o mesmo método presente na classe Estudante.php
    {
        echo "O aluno " . $this->getNome() . " têm direito a uma bolsa de " . $this->getDescontoBolsa() . "% do valor total do curso, então paga mensalidade com desconto! </br>";
    }

    //MÉTODOS ESPECIAIS
    public function getDescontoBolsa()
    {
        return $this->descontoBolsa;
    }

    public function setDescontoBolsa($descontoBolsa)
    {
        $this->descontoBolsa = $descontoBolsa;

        return $this;
    }

}
