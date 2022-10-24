<?php

    require 'ControlRemoteInterface.php';

    class ControleRemoto implements ControlRemote {
        

        //Atributos:
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos Especiais:
        public function __construct()
        {
            $this->volume = 30;
            $this->ligado = false;
            $this->tocando = false;
        }

        /**
         * Get the value of volume
         */ 
        private function getVolume()
        {
                return $this->volume;
        }

        /**
         * Set the value of volume
         */ 
        private function setVolume($volume)
        {
                $this->volume = $volume;

                return $this;
        }

        /**
         * Get the value of ligado
         */ 
        private function getLigado()
        {
                return $this->ligado;
        }

        /**
         * Set the value of ligado
         */ 
        private function setLigado($ligado)
        {
                $this->ligado = $ligado;

                return $this;
        }

        /**
         * Get the value of tocando
         */ 
        private function getTocando()
        {
                return $this->tocando;
        }

        /**
         * Set the value of tocando
         */ 
        private function setTocando($tocando)
        {
                $this->tocando = $tocando;

                return $this;
        }

        //Métodos Abstratos da Interface
        public function ligar()
        {
            $this->setLigado(true);
        }

        public function desligar()
        {
           $this->setVolume(0);
           $this->setLigado(false); 
        }

        public function abrirMenu()
        {
            echo "<br>O aparelho está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br>O aparelho está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br>Volume: " . $this->getVolume();

            for ($i=1; $i <= $this->getVolume(); $i++) { 
                echo " |";
            }
            echo "<br>";
        }

        public function fecharMenu()
        {
            echo "<br>Fechando o Menu...";
        }

        public function maisVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public function menosVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            }
        }

        public function ligarMudo()
        {
            if ($this->getLigado() and $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo()
        {
            if ($this->getLigado() and $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play()
        {
            if ($this->getLigado() and !$this->getTocando()) {
                $this->setTocando(true);
            }
        }

        public function pause()
        {
            if ($this->getLigado() and $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }

?>