<?php

    // declaração da classe
    abstract class Forma{

        //declaração e atribuição do atributo
        public $tipoForma = 'Forma Abstrata';

        //declaração do metodo
        public function imprimeForma() {
            echo $this-> tipoForma . ' com Área de ' . $this-> calculaArea();
        }

        abstract public function calculaArea();
    }

    //criando uma herança entre a classe base Forma e a     
    // filha Quadrado
    class Quadrado extends Forma{

        //declarando o atributo
        public $lado;

        //declaração do construtor
        public function __construct(float $lado) {
          $this-> tipoForma = 'Quadrado';
          $this-> lado = $lado;             
        }

        //implementando o método abstrato da classe base
        public function calculaArea()
        {
            return $this-> lado * $this-> lado;
        }
    }

    // instanciação da classe concreta
    $obj = new Quadrado(10.0);

    //atribuir o valor do atributo
    
    // $obj-> lado = 10;

    //acessando o membro de uma classe
    $obj-> imprimeForma();

?>