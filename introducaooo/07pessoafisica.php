<?php

    class PessoaFisica extends Pessoa{
        public int $diasTrabalho;
        public float $salario;

        public function __construct(string $numeroCPF, int $diasTrabalho,float $salario){
            parent:: __construct("CPF",$numeroCPF);
            $this-> diasTrabalho = $diasTrabalho;
            $this-> salario = $salario;
        }

        public function calculaRenda(){
            return $this-> diasTrabalho * $this-> salario;
        }
    }
?>