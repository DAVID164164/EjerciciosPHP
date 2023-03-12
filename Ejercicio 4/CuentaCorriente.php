<?php
class CuentaCorriente
{
    public $Ncuenta;
    public $Saldo;
    public function __construct($Saldo,$Ncuenta) {
        $this->Ncuenta=$Ncuenta;
        $this->Saldo = $Saldo;
    }
    public function getSaldo(){
        return $this->Saldo;;
    }
    public function Depositar($Saldo){
        $this->Saldo += $Saldo;
    }
    public function Retirar($Saldo){
        if($Saldo<$this->Saldo){
            $this->Saldo -= $Saldo;
        }  
    }

}
?>