<?php

//UML - Linguagem de Modelagem Unificada - Diagrama de Classes 

//A Visibilidade de uma Classe vai indentificar o nível de acesso aos componentes internos de uma classe

//Usamos para isso três símbolos: + (público), - (privado) e # (protegido);
//+ (público) ou public no PHP: todas as classes e a classe atual terão acesso a ela;
//- (privado) ou private: somente a classe atual terá acesso ao atributo;
//# (protegido) ou protected: somente a classe atual e suas sub-classes terão acesso aos atributos;

//atributos privados são encapsulados por uma interface com atributos públicos para eles ficarem protegidos e darem acesso apenas a parte pública

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar () {
        if ($this->tampada == true) {
            echo " está tampada não pode escrever...";
        } else {
            echo " está sem tampa e está escrevendo...";
        }
    } //this é chamado no PHP de autoreferência

    public function tampada () {
        $this->tampada = true;
    }

    public function destampada () {
        $this->tampada = false;
    }

}




?>