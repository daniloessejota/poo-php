<?php

    require_once 'VideoClass.php';
    require_once 'UsuarioClass.php';

    class Visualizacao
    {
        //ATRIBUTOS
        private $observador;
        private $videoAssistido;


        //MÉTODOS
        public function __construct($o, $v) //$o = observador, $v = vídeo assistido
        {
            $this->setObservador($o);
            $this->setVideoAssistido($v);
            $this->videoAssistido->setViews($this->videoAssistido->getViews() + 1);
            $this->observador->setTotalAssistido($this->observador->getTotalAssistido() + 1);
        }

        //técnica para usar sobrecaraga em métodos com PHP
        public function avaliacaoNota($nota)
        {
            $this->videoAssistido->setAvaliação($nota);
        }

        public function avaliacaoPorcentagem($p) //$p = porcentagem
        {
            $nota = 0; 

            if ($p <= 20) {
                $nota = 2;
                $this->videoAssistido->setAvaliação($nota);
                return;
            }
            if ($p > 20 and $p <= 50) {
                $nota = 5;
                $this->videoAssistido->setAvaliação($nota);
                return;
            }
            if ($p > 50 and $p <= 80) {
                $nota = 8;
                $this->videoAssistido->setAvaliação($nota);
                return;
            }
            if ($p > 80 and $p <= 100) {
                $nota = 10;
                $this->videoAssistido->setAvaliação($nota);
                return;
            }

            $this->videoAssistido->setAvaliação($p);
            return;

        }

        //MÉTODOS ESPECIAIS
        public function getObservador()
        {
                return $this->observador;
        }

        public function setObservador($observador)
        {
                $this->observador = $observador;

                return $this;
        }


        public function getVideoAssistido()
        {
                return $this->videoAssistido;
        }

        public function setVideoAssistido($videoAssistido)
        {
                $this->videoAssistido = $videoAssistido;

                return $this;
        }
    }
    