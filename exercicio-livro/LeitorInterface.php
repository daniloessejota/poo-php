<?php

    interface Leitor 
    {
        public function abrir();
        public function fechar();
        public function folhear();
        public function avancarPagina();
        public function voltarPagina();  
    }

?>