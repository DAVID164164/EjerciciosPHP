<?php
session_start();
if(isset($_POST["ok"])){
	$_SESSION["compras"][$_POST["producto"]]=$_POST["precio"];
}
?>

<form method=post>
<table >
	<tr>
		<td>Nombre producto
		<td>Precio producto
	<tr>
		<td><input type=text name=producto>
		<td><input type=number min=0 step=0.01 name=precio>
	<tr>
		<td colspan=2 align=center><input type=submit name=ok>
</table> 
</form>

<?php
if(isset($_SESSION["compras"])){
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
?>