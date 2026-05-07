<?php

    // declaração da classe
    class Forma{

        //declaração e atribuição do atributo
        public $tipoForma = 'Forma Abstrata';

        //declaração do metodo
        public function imprimeForma() {
            echo $this-> tipoForma;
        }
    }

    // instanciação da classe
    $obj = new Forma();

    //acessando o membro de uma classe
    $obj-> imprimeForma();

?>