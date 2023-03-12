<form method="post" action=""><br>
Ingrese el punto ¨X¨:
<input type="text" name="x"><br>
Ingrese el punto ¨Y¨:
<input type="text" name="y"><br>
<input type="submit" value="Evaluar" name="Evaluar"><br></form>

<?php

class cuadrante{

	function solucion($x,$y){

		if($x==0 && $y==0){
			echo "Esta en el origen";
		}elseif($x>0 && $y>0){
			echo "Esta en el cuadrante I";
		}elseif($x<0 && $y>0){
			echo "Esta en el cuadrante II";
        }
    elseif($x<0 && $y<0){
        echo "Esta en el cuadrante III";
    }elseif($x>0 && $y<0){
		echo "Esta en el cuadrante IV";
		
	}
	}
}

$sol=new cuadrante();
echo $sol->solucion($_POST["x"],$_POST["y"]);

?>

