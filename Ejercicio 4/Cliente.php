<?php
include("CuentaCorriente.php");
include("CuentaAhorro.php");
include("CertificadoDeposito.php");
class Cliente
{
    public $Ncuenta;
    public $nombre;        

    public $cCo;
    public $cAho;
    public $cDepo;
    public function __construct($Ncuenta, $nombre,$SaldoInicial,$InteresMensual) {
        $this->Ncuenta=$Ncuenta;
        $this->nombre=$nombre;
        $this->cCo = new CuentaCorriente($SaldoInicial,$Ncuenta);
        $this->cAho = new CuentaAhorro($InteresMensual,$Ncuenta);
        $this->cDepo = new CertificadoDeposito($InteresMensual,$Ncuenta);
       
    }

    public function mostrarNC(){
        return $this->Ncuenta;;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function GetNombre()
    {
       return $this->nombre;
    }
    public function GetSaldoTotal(){
        $s1=$this->cCo->getSaldo();
        $s2=$this->cAho->getSaldo();
        $s3=$this->cDepo->getSaldo();
        return  $s1+$s2+$s3;
    }
    
}

$c = new Cliente(123,"jose",10,10);



//echo $c->mostrar("Jorge");
?>