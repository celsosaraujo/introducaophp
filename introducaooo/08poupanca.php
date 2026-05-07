
 <?php

 class Poupanca extends Conta
 {
    private $reajuste;

    public function __construct($agencia, $conta, $saldoInicial, $reajuste)
    {
    	parent ::__construct('POUPANCA',$agencia, $conta);	
		$this-> deposito($saldoInicial);
		$this-> reajuste = $reajuste;		
    } 

    public function calculaSaldo()	 
	{
		return $this-> saldo() + ($this-> saldo() * $this-> reajuste / 100.0); 
	}
    
 } 

 ?>