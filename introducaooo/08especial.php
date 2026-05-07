
 <?php
 
 class Especial extends Conta
 {
    public $limiteEspecial;    

    public function __construct($agencia, $conta, $saldoInicial, $limiteEspecial)
    {
		parent ::__construct('ESPECIAL',$agencia, $conta);	
		$this-> deposito($saldoInicial);
		$this-> limiteEspecial = $limiteEspecial;		
    } 

    public function calculaSaldo()	 
	{
		return $this-> saldo() + $this-> limiteEspecial; 
	}
    
 }

 ?>