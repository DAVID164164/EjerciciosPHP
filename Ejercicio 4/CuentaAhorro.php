<?php
class CuentaAhorro
{
    public $Ncuenta;
    public $Saldo;
    public $InteresMensual;

    public function __construct($InteresMensual,$Ncuenta) {
        $this->Ncuenta=$Ncuenta;
        $this->InteresMensual = $InteresMensual;
        $this->Saldo=0;
    }
    public function getSaldo(){
        return $this->Saldo;
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