<?php
session_start();
if(isset($_POST["ok2"])){
	
	
	
	if(array_key_exists($_POST["dui"],$_SESSION["personas"])){
		echo "el dui existe";
	}else{
		$datos=array($_POST["nombre"],$_POST["apellido"],$_POST["telefono"]);
		$_SESSION["personas"][$_POST["dui"]]=$datos;
	}
	
}

if(isset($_POST["ok"])){
		echo "
	<form method=post>
	<table >
		<tr>
			<td>DUI
			<td>Nombre
			<td>Apellido
			<td>telefonos
			
		<tr>
			<td><input type=text name=dui>
			<td><input type=text name=nombre>
			<td><input type=text name=apellido>
		
	";
	
	echo "<td>";
	for($i=1;$i<=$_POST["tels"];$i++){
		echo"tel $i <input type=text name=telefono[]>";
	}
	
	echo "
			<td colspan=2 align=center><input type=submit name=ok2>
	</table> 
	</form>
	
	";
}elseif(isset($_POST["ok4"])){
	echo "Dui ".$_POST["duibuscar"];
	$datosmostrar=$_SESSION["personas"][$_POST["duibuscar"]];
	
	foreach($datosmostrar as $valores){
		if(is_array($valores)){
			foreach($valores as $val){
				echo " telefono: ".$val."- ";
			}
		}else{
			echo $valores;
		}
		
	}
	
	//var_dump($datosmostrar);
}else{
	echo "
	<form method=post>
	<table >
		<tr>
			<td># de telefonos
			
		<tr>
			
			<td><input type=number min=0 step=1 name=tels>
		<tr>
			<td colspan=2 align=center><input type=submit name=ok>
	</table> 
	</form>
	
	";
}
echo "
	<form method=post>
	<table >
		<tr>
			<td># DUI
			
		<tr>
			
			<td><input type=number min=0 step=1 name=duibuscar>
		<tr>
			<td colspan=2 align=center><input type=submit name=ok4>
	</table> 
	</form>
	
	";
?>



<?php


if(isset($_SESSION["personas"])){
	var_dump($_SESSION["personas"]);
}
/*	
	echo "
	<table >
	<tr>
		<td>Nombre producto
		<td>Precio producto
	";
	arsort($_SESSION["compras"]);
	foreach($_SESSION["compras"] as $k=>$v ){
		echo "
		<tr>
		<td>$k
		<td>$v
		";
	}
	
	
	echo "
</table> 
	
	";
	
	echo "<span style=color:red >el producto mas caro: ".array_values($_SESSION["compras"])[0]."</span><br>";
	echo "<span style=color:blue>el producto mas barato: ".array_values($_SESSION["compras"])[count($_SESSION["compras"])-1]."</span><br>";
	
	
}

*/
?>