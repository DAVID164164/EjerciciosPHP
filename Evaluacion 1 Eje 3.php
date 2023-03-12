<!DOCTYPE html>

 <title>Form</title>
 
 <h1>Informacion</h1>
</font>
<hr size='10' color='#cccccc'>
<form method=post ACTION="corto.php">

<tr>
 <td>nombre :</td>
 <td><input name="Nombre" type "TEXT" id="n1"></td>
</tr>

<tr>
    <td>apellido :</td>
    <td><input name="Apellido" type "TEXT"></td>
   </tr>
   <tr>
    <td>direccion :</td>
    <td><input name="Direccion" type "TEXT"></td>
   </tr>
   <tr>
    <td>telefono :</td>
    <td><input name="Teléfono" type "TEXT"></td>
   </tr>
   <tr>
    <td>Dui :</td>
    <td><input name="DUI" type "TEXT"></td>
   </tr>
   <tr>
    
    <input type=submit value="Mostrar">
    </td>
   </tr>
  
  
  

</form>
</body> 
</html>

<?php

session_start();
if(isset($_POST["mostrar"])){
	$_SESSION["datos"][]=$_POST["nombre"];
}
    if(!empty($_POST['nombre'])){
        

        
    /*$arreglo[0][0]=($_POST['nombre']);
    $arreglo[0][1]=($_POST['apellido']);
    $arreglo[0][2]=($_POST['direccion']);
    $arreglo[0][3]=($_POST['telefono']);
    $arreglo[0][4]=($_POST['dui']);
        
        
        echo "nombre ".$datos[0][0]."</br>";
        echo "apellido ".$datos[0][1]."</br>";
        echo "direccion ".$datos[0][2]."</br>";
        echo "telefono ".$datos[0][3]."</br>";
        echo "dui ".$datos[0][4]."</br>";
        
    }else{
       
    }*/
	echo "<pre>";
if(isset($_SESSION["nombre"])){
	foreach($_SESSION["nombre"] as $valor){
		
		echo "<tr><td>$valor;</td></tr><br>";
		
		
	}
?>
