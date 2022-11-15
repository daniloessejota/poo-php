<?php

    require_once 'PessoasClass.php';

    class Aluno extends Pessoas
    {
        //ATRIBUTOS
        private $matricula, $curso;

        //MÉTODOS PÚBLICOS
        public function cancelarMatricula()
        {   
            echo "A matricula do aluno foi cancelada.";
        }

        //MÉTODOS ESPECIAIS
        public function getMatricula()
        {
                return $this->matricula;
        }
 
        public function setMatricula()
        {
                $this->matricula = rand(1001, 9999);

                return $this;
        }

        public function getCurso()
        {
                return $this->curso;
        }

        public function setCurso($curso)
        {
                $this->curso = $curso;

                return $this;
        }
    }
    
    

?>