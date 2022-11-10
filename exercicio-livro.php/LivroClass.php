<?php
    require 'LeitorInterface.php';

    class Livro implements Leitor 
    {
        //Atributos:
        private $titulo, $autor, $totalDePaginas, $paginaAtual, $aberto, $leitor;

        //Métodos:

        //Métodos Especiais:
        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }


        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        
        public function getTotalDePaginas()
        {
                return $this->totalDePaginas;
        }

        public function setTotalDePaginas($totalDePaginas)
        {
                $this->totalDePaginas = $totalDePaginas;

                return $this;
        }

        
        public function getPaginaAtual()
        {
                return $this->paginaAtual;
        }
 
        public function setPaginaAtual($paginaAtual)
        {
                $this->paginaAtual = $paginaAtual;

                return $this;
        }


        public function getAberto()
        {
                return $this->aberto;
        }

        public function setAberto($aberto)
        {
                $this->aberto = $aberto;

                return $this;
        }


        public function getLeitor()
        {
                return $this->leitor;
        }
 
        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;

                return $this;
        }

        //Métodos Abstratos da Interface:
        public function abrir()
        {
            $this->setAberto(true);
        }

        public function fechar()
        {
            $this->setAberto(false);
        }

        public function folhear()
        {
            # code...
        }

        public function avancarPagina()
        {
            $this->setPaginaAtual($this->getPaginaAtual() + 1);
        }

        public function voltarPagina()
        {
            $this->setPaginaAtual($this->getPaginaAtual() - 1);
        }
    }

?>