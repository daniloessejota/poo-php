<?php

    require_once 'Acoes.php';

    class Video implements Acoes
    {
        //ATRIBUTOS
        private $título;
        private $avaliação;
        private $views;
        private $curtidas;
        private $reproduzindo;

        //MÉTODOS
        public function __construct($t) //$t = título
        {
            $this->setTítulo($t);
            $this->setCurtidas(0);
            $this->setViews(0);
            $this->setAvaliação('-----');
            $this->setReproduzindo(false);
        }

        //MÉTODOS ESPECIAIS
        public function getTítulo()
        {
                return $this->título;
        }

        public function setTítulo($título)
        {
                $this->título = $título;

                return $this;
        }

        
        public function getAvaliação()
        {
                return $this->avaliação;
        }

        public function setAvaliação($avaliação)
        {
                $this->avaliação = $avaliação;

                return $this;
        }


        public function getViews()
        {
                return $this->views;
        }

        public function setViews($views)
        {
                $this->views = $views;

                return $this;
        }

        
        public function getCurtidas()
        {
                return $this->curtidas;
        }

        public function setCurtidas($curtidas)
        {
                $this->curtidas = $curtidas;

                return $this;
        }

 
        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }

        public function setReproduzindo($reproduzindo)
        {
                if (!true) {
                        $this->reproduzindo = 'está reproduzindo';
                        return;
                }

                $this->reproduzindo = 'não está reproduzindo';
                return;
        }

        //MÉTODOS ABSTRATOS DA INTERFACE
        public function play()
        {
                $this->setReproduzindo(true);
        }

        public function pause()
        {
                $this->setReproduzindo(false);
        }

        public function curtidas()
        {
            $this->setCurtidas($this->getCurtidas() + 1);
        }
    }
    