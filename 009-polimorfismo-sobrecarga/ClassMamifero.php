<?php

require_once 'ClassAnimal.php';

class Mamifero extends Animal 
{
    //ATRIBUTOS
   private $corDoPelo;

   
   //MÉTODOS
   public function locomover() 
   {
        echo 'correndo';
   }

   public function alimentar()
   {
        echo 'mamando';
   }

   public function emitirSom() 
   {
        echo 'o mamífero está emitindo um som';
   }
   

   //MÉTODOS ESPECIAIS 
   public function getCorDoPelo()
   {
      return $this->corDoPelo;
   }

   public function setCorDoPelo($corDoPelo)
   {
      $this->corDoPelo = $corDoPelo;

      return $this;
   }

}

