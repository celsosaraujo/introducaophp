<?php
    class ItemExtrato{
        private DateTime $data;        
        private string $descricao;
        private float $valor;

        public function __construct(string $descricao, float $valor){
            $this-> data = new DateTime();
            $this-> descricao = $descricao;
            $this-> valor = $valor;
        }

        public function getData(){
            return $this-> data-> format("d/m/Y");
        }

        public function getHora(){
            return $this-> data-> format("H:i:s");
        }

        public function getDescricao(){
            return $this-> descricao;
        }

        public function getvalor(){
            return number_format( $this-> valor,2,",",".");
        }

        public function imprimeItem(){
            return $this-> getData() .' '. $this-> getDescricao() . ' '. $this-> getvalor(); 
        }
    }
?>