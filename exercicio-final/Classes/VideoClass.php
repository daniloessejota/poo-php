<?php

    require_once 'Acoes.php';

    class Video implements Acoes
    {
        //ATRIBUTOS
        private $título;
        private $avaliação;
        private $views, $total;
        private $curtidas;
        private $reproduzindo;

        //MÉTODOS
        public function __construct($t) //$t = título
        {
            $this->setTítulo($t);
            $this->setCurtidas(0);
            $this->views = 0;
            $this->total = 0;
            $this->avaliação = 0;
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
        
        public function getViews()
        {
                return $this->views;
        }

        public function setViews($views)
        {
                $this->views = $views;

                return $this;
        }

        
        public function getTotal()
        {
                return $this->total;
        }

        public function setTotal($total)
        {
                $this->total = $total;

                return $this;
        }
        
        public function getAvaliação()
        {
                return $this->avaliação;
        }

        public function setAvaliação($avaliação)
        {
                $this->setTotal($this->getTotal() + $avaliação);
                $media = $this->getTotal()/$this->getViews();

                $this->avaliação = $media;
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
    