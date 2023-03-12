<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Informacion</title>
</head>
<body>
<?php 
     include("Cliente.php");
    session_start();
    
    if(isset($_GET["Nc"])){
        $_SESSION['Nc']=$_GET["Nc"];
       
    }else{
        $_GET["Nc"]=$_SESSION['Nc'];
    }

    if (isset($_POST["depoAho"])) {
       //echo $_POST["depoAho"];
       $_SESSION['Arreglo'][$_GET["Nc"]]->cAho->Depositar($_POST["depoAho"]);
    }
    if (isset($_POST["RetiAho"])) {
        //echo $_POST["RetiAho"];
        $_SESSION['Arreglo'][$_GET["Nc"]]->cAho->Retirar($_POST["RetiAho"]);
     }

     if (isset($_POST["depoC"])) {
        //echo $_POST["depoC"];
         $_SESSION['Arreglo'][$_GET["Nc"]]->cCo->Depositar($_POST["depoC"]);
     }
     if (isset($_POST["retiC"])) {
         //echo $_POST["retiC"];
         $_SESSION['Arreglo'][$_GET["Nc"]]->cCo->Retirar($_POST["retiC"]);
    }
    if (isset($_POST["abrir"])) {       
        $_SESSION['Arreglo'][$_GET["Nc"]]->cDepo->AbrirCDT($_POST["abrir"]);
        $_SESSION['clas']="disable";
    }
    if (isset($_POST["cerrar"])) {        
       $saldo= $_SESSION['Arreglo'][$_GET["Nc"]]->cDepo->CerrarCDT();
       $_SESSION['Arreglo'][$_GET["Nc"]]->cCo->Depositar($saldo);
       $_SESSION['clas']="enabled";
        //$_SESSION['Arreglo'][$_GET["Nc"]]->cCo->Retirar($_POST["retiC"]);
    }

 
    
    $arreglo=$_SESSION['Arreglo'];

?>
<br>
    <div style="background-color:gray;margin-left:10%;margin-right:10%;" class="form-horizontal" >
        <br>
        <div class="row">
            <label class="col-md-1" for="N">Nombre </label>
            <div class="col-md-4">
                <input autocomplete="off" disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]-> GetNombre(): "";?>"  type="text" name="Nombre" id="N" >
            </div>
            <label class="col-md-2" for="Nc">Nº Cuenta</label>
            <div class="col-md-5">
                <input autocomplete="off" disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]-> mostrarNC(): "";?>"  type="text" name="Nc" id="N" >
                <a class="btn btn-primary"href="CrearCliente.php">Vover</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <label class="col-md-12" for="N"><b>Informacion</b> </label>            
        </div>
        <hr>
        <div class="row">
            <label class="col-md-2" for="N"><b>Cuenta de Ahorros</b></label>    
            <div class="col-md-4">
                <h5>Saldo</h5> 
                <input autocomplete="off"  disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]->cAho->getSaldo(): "";?>"   type="text" name="SaldoA" id="N" >
            </div>   
            <div class="col-md-3">
                
                <form action="InformacionCliente.php" method="post">
                    <br>
                    <input class="btn btn-success" type="submit" value="Depositar"> 
                    <select name="depoAho" id="">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> 
                    <!--<input  type="number" max="100" min="5"  name="depoAho" id=""> -->
                </form>                       
            </div>              
            <div class="col-md-3">                
               <form action="InformacionCliente.php" method="post">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Retirar">     
                    <input value="0" type="number" max="700" min="5" step="5" name="RetiAho" id=""> 
                </form> 
            </div>       
        </div>


        <hr>
        <div class="row">
            <label class="col-md-2" for="N"><b>Cuenta corriente</b></label>    
            <div class="col-md-4">
                <h5>Saldo</h5> 
                <input autocomplete="off" disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]->cCo->getSaldo(): "";?>"  type="text" name="SaldoA" id="N" >
            </div>   
            <div class="col-md-3">
                
                <form action="InformacionCliente.php" method="post">
                    <br>
                    <input class="btn btn-success" type="submit"  value="Depositar">
                    <select name="depoC" id="">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>    
                    <!--<input  type="number" max="100" min="5"   name="depoC" id=""> -->
                </form>                       
            </div>              
            <div class="col-md-3">                
               <form action="InformacionCliente.php" method="post">
                    <br>
                    <input class="btn btn-primary"type="submit" value="Retirar">    
                    <input value="0"  type="number" max="700" step="5" min="5" name="retiC" id=""> 
                </form> 
            </div>        
        </div>
        <hr>
        <div class="row">
            <label class="col-md-2" for="N"><b>CDT</b></label>    
            <div class="col-md-4">
                <h5>Saldo</h5> 
                <input autocomplete="off" disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]->cDepo->getSaldo(): "";?>"   type="text" name="SaldoA" id="N" >
            </div>   
            <div class="col-md-3">
                
                <form action="InformacionCliente.php" method="post">
                    <br>
                    <input <?php echo $_SESSION['clas'];?> class="btn btn-primary" type="submit" value="Abrir">      
                    <input required <?php echo $_SESSION['clas'];?> min="5" type="number" name="abrir" id="">
                </form>                       
            </div>              
            <div class="col-md-3">                
               <form action="InformacionCliente.php" method="post">
                    <br>
                    <input  type="hidden" name="cerrar">
                    <input class="btn btn-danger" type="submit" value="Cerrar">     
                    
                </form> 
            </div>      
        </div>

        <div class="row">
            <label class="col-md-2" for="N"><b></b></label>    
            <div class="col-md-10">
                <h5>Saldo Total</h5> 
                <input autocomplete="off" disabled value="<?php echo $retVal = (isset($_GET["Nc"])) ? $arreglo[$_GET["Nc"]]->GetSaldoTotal(): "";?>"   type="text" name="SaldoT" id="N" >
            </div>   
                         
                  
        </div>
        <br>
    </div>
    
</body>
</html>