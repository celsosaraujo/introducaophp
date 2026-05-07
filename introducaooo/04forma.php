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

    class Retangulo extends Forma{

        private float $base;
        private float $altura;

        public function __construct(float $base, float $altura)
        {
            $this-> tipoForma = 'Retangulo';
            $this->base = $base;
            $this->altura = $altura;
        }
        public function calculaArea()
        {
            return $this-> base * $this-> altura;
        }

    }

    // instanciação da classe concreta
    $objQuadrado = new Quadrado(10.0);

    //atribuir o valor do atributo
    
    // $obj-> lado = 10;

    //acessando o membro de uma classe
    $objQuadrado-> imprimeForma();

    //Consigo redimensionar porque o  atributo é publico
    echo "<br/>" ;
    $objQuadrado-> lado = 20.5;
    $objQuadrado-> imprimeForma();    

    echo "<br/>" ;

    $objRetangulo = new Retangulo(10.0,5.0);
    $objRetangulo-> imprimeForma();

    //Não pode redimensionar porque o atributo é privado
    // $objRetangulo-> base = 20.5;

?>