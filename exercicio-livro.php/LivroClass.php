<?php
    require_once 'PessoaClass.php';
    require_once 'LeitorInterface.php';

    class Livro implements Leitor 
    {
        //Atributos:
        private $titulo, $autor, $totalDePaginas, $paginaAtual, $aberto, $leitor;

        //Métodos:
        public function detalhes($pessoaLeitora, $livro)
        {
                echo "Leitor: " . $pessoaLeitora->getNome() . ", do sexo " . $pessoaLeitora->getSexo() . " e tem " . $pessoaLeitora->getIdade() .  " anos de idade.</br>";
                echo "Título do Livro: " . $livro->getTitulo() . "</br>";
                echo "Autor: " . $livro->getAutor().  "</br>";
                echo "Quantidade de Páginas: " . $livro->getTotalDePaginas() .  "</br>";
                echo "O livro está aberto? " . $livro->getAberto() . "</br>";
                echo "Página Atual: " . $livro->getPaginaAtual() . "</br>";
        }

        //Métodos Especiais:
        public function __construct($t, $a, $totalPag, $pagAtual)
        {
                $this->setTitulo($t);
                $this->setAutor($a);
                $this->setTotalDePaginas($totalPag);
                $this->setPaginaAtual($pagAtual);
                $this->setAberto(false);
        }
        
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
                if (!$this->aberto) {
                        echo "O livro está fechado.";
                        return;
                }

                return $this->paginaAtual;
        }
 
        public function setPaginaAtual($paginaAtual)
        {
                $this->paginaAtual = $paginaAtual;

                return $this;
        }


        public function getAberto()
        {
                switch ($this->aberto) {
                        case 'true':
                                echo "sim";
                                break;
                        
                        default:
                                echo "não";
                                break;
                }
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
            for ($i=0; $i <= $this->getTotalDePaginas(); $i = $i + 10) { 
                echo "Folheando o livro, página " . $i . "...<br>";
            }
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