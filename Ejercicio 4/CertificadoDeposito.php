<?php
class CertificadoDeposito
{
    private $Ncuenta;
    private $Saldo;
    private $InteresMensual;
    private $estado;

    public function __construct($InteresMensual,$Ncuenta) {
        $this->Ncuenta=$Ncuenta;
        $this->InteresMensual=$InteresMensual;
        $this->Saldo = 0;
        $this->estado=true;
    }
    public function getSaldo(){
        return $this->Saldo;
    }
    public function CerrarCDT()
    {  $s=$this->Saldo;      
       $this->estado=false;
       $this->Saldo=0;
       return $s;
    }
    public function AbrirCDT($Saldo)
    {  $this->Saldo=$Saldo;      
       $this->estado=true;              
    }

}
?>