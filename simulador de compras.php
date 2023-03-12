<html>
<form method="post" action ="simulador de compras.php"><br>
Escoja los productos que desea comprar:<br>
<input type="checkbox" name="op[]" value="lapiz $0.20" >Lápiz $0.20
<input type="checkbox" name="op[]" value="borrador $0.30" >Borrador $0.30
<input type="checkbox" name="op[]" value="colores $1.20" >Colores $1.20
<input type="checkbox" name="op[]" value="cuaderno $2.50" >Cuaderno $2.50
<input type="submit" name="confirmar" value="confirmar" ></input>

</form> 


<?php
$iva=0.13;
$lapiz=0.20;
$borrador=0.30;
$colores=1.20;
$cuaderno=2.50;

if(isset ($_POST["op"]))
{
	$op=$_REQUEST["op"];
	$n= count($op);
	
	echo "Artículos de su compra: "
	;
	foreach($op as $op)
	{
		
		print("$op<BR>\n");
		
	}
	/*$calcL=$lapiz*$iva;
	$totalL=$calcL+$lapiz;
	echo "Costo de producto: ".$lapiz." el total a pagar es: ".$totalL;
	
	$calcB=$iva*$borrador;
	$totalB=$calcB+$borrador;
	echo " |Costo de producto: ".$borrador." el total a pagar es: ".$totalB;
	
	$calcCol=$iva*$colores;
	$totalCol=$calcB+$colores;
	echo " |Costo de producto: ".$colores." el total a pagar es: ".$totalCol;
	
	$calcC=$iva*$cuaderno;
	$totalC=$calcB+$cuaderno;
	echo " |Costo de producto: ".$cuaderno." el total a pagar es: ".$totalC;*/
}

?>
</html>
