<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Crear Cliente</title>
</head>
<body >
    <form style="background-color:gray;margin-left:30%;margin-right:30%;" class="form-horizontal" action="CrearCliente.php" method="post">
        <div class="form-group">
            <label class="col-lg-8 control-label" for="N">Nombre </label>
            <div class="col-lg-4">
                <input autocomplete="off"   type="text" name="Nombre" id="N" required>
            </div>
        </div>
        <div class="form-group">   
            <label class="col-lg-8 control-label" for="Nc">Nº Cuenta</label>
            <div class="col-lg-4">
                <input  type="number" min="0" name="Ncuenta" id="Nc" required >
            </div>
        </div>
         <div class="form-group">   
            <label class="col-lg-8 control-label" for="Si">Saldo Inicial</label>
            <div class="col-lg-4">
                <input  type="number" step="5" min="0" name="sald" id="Si" required >
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-8 control-label" for="Interes">Tasa Interes (%)</label>
            <div class="col-lg-4">
                <input  type="number" value="0" max="100" min="0" name="Interes" id="Interes">
            </div>
        </div>    
        <input class="col-lg-12 btn btn-primary" type="submit" value="Guardar" >   
        <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Nº Cuenta</th>
        <th scope="col">Saldo total</th>
        <th scope="col">Administrar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("Cliente.php"); 
            session_start();
            MostrarClientes();
            $_SESSION['clas']="enabled";
            //session_destroy();
            if (isset($_POST["Ncuenta"]) && isset($_POST["Interes"]) && isset($_POST["Nombre"]) && isset($_POST["sald"]) ) {                                               
                $cliente = new Cliente($_POST["Ncuenta"],$_POST["Nombre"],$_POST["sald"],$_POST["Interes"]);                
                $clientes=array();
                if (isset($_SESSION['Arreglo'])) {
                $clientes=$_SESSION['Arreglo'];
                if (array_key_exists($_POST["Ncuenta"], $clientes)) {
                    echo "Ya existe ese N";
                }else{
                    $clientes[$_POST["Ncuenta"]]=$cliente;
                    $_SESSION['Arreglo']=$clientes;
                }                    
                MostrarClientes();
                }else {
                    
                    $clientes[$_POST["Ncuenta"]]=$cliente;
                    $_SESSION['Arreglo']=$clientes;     
                    MostrarClientes();
                }
            }
            function MostrarClientes()
            {
                if (isset($_SESSION['Arreglo'])) {
                    foreach ($_SESSION['Arreglo'] as $key => $clie) {                    
                        echo "
                        <tr>
                            <th scope='row'>{$clie->GetNombre()}</th>
                            <td>{$clie->mostrarNC()}</td>
                            <td>{$clie->cCo->getSaldo()}</td>
                            <td><a class='btn btn-primary' href='InformacionCliente.php?Nc={$clie->mostrarNC()}'>Ver</a></td>
                        
                        </tr> 
                        ";
                    }
                }
            }   
        ?>
        
        

    </tbody>
</table>         
    </form>
    
</body>
</html>