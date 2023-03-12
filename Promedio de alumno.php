<html>
<body>
<form method= "post" action=""><br>
Materia 1:<br>
calificacion de primer examen:<br>
<input type="text" name="examen1"><br>
calificacion de segundo examen:<br>
<input type="text" name="examen2"><br>
calificacion de tercer examen:<br>
<input type="text" name="examen3"><br>
calificacion de primera tarea:<br>
<input type="text" name="tarea1"><br>
calificacion de segunda tarea:<br>
<input type="text" name="tarea2"><br>
calificacion de tercera tarea:<br>
<input type="text" name="tarea3"><br>

Materia 2:<br>
calificacion de primer examen:<br>
<input type="text" name="examen21"><br>
calificacion de segundo examen:<br>
<input type="text" name="examen22"><br>
calificacion de primera tarea:<br>
<input type="text" name="tarea21"><br>
calificacion de segunda tarea:<br>
<input type="text" name="tarea22"><br>
calificacion de tercera tarea:<br>
<input type="text" name="tarea23"><br>
calificacion de cuarta tarea:<br>
<input type="text" name="tarea24"><br>

Materia 3:<br>
calificacion de primer examen:<br>
<input type="text" name="examen31"><br>
calificacion de segundo examen:<br>
<input type="text" name="examen32"><br>
calificacion de tercer examen:<br>
<input type="text" name="examen33"><br>
calificacion de primera tarea:<br>
<input type="text" name="tarea31"><br>
calificacion de segunda tarea:<br>
<input type="text" name="tarea32"><br>
calificacion de tercera tarea:<br>
<input type="text" name="tarea33"><br>
calificacion de cuarta tarea:<br>
<input type="text" name="tarea34"><br>
calificacion de quinta tarea:<br>
<input type="text" name="tarea35"><br>
calificacion de sexta tarea:<br>
<input type="text" name="tarea36"><br>

<input type="submit" value="  calcular porcentaje  "><br>


</form>
</body>

<?php

$examen1=$_POST["examen1"];
$examen2=$_POST["examen2"];
$examen3=$_POST["examen3"];
$tarea1=$_POST["tarea1"];
$tarea2=$_POST["tarea2"];
$tarea3=$_POST["tarea3"];
$SumaE=$examen1+$examen2+$examen3;
$PromE=$SumaE/3;
$PorcentE=$PromE*0.80;

$SumaT= $tarea1+$tarea2+$tarea3;
$PromT= $SumaT/3;
$PorcentT= $PromT*0.20;

$PromM1= $PorcentE+$PorcentT;

echo "El Promedio de la materia uno es: ".$PromM1;

$examen21=$_POST["examen21"];
$examen22=$_POST["examen22"];
$tarea21=$_POST["tarea21"];
$tarea22=$_POST["tarea22"];
$tarea23=$_POST["tarea23"];
$tarea24=$_POST["tarea24"];
$SumaE2=$examen21+$examen22;
$PromE2=$SumaE2/2;
$PorcentE2=$PromE2*0.60;

$SumaT2= $tarea21+$tarea22+$tarea23+$tarea24;
$PromT2= $SumaT2/4;
$PorcentT2= $PromT2*0.40;

$PromM2= $PorcentE2+$PorcentT2;

echo "    | |El Promedio de la materia dos es: ".$PromM2;

$examen31=$_POST["examen31"];
$examen32=$_POST["examen32"];
$examen33=$_POST["examen33"];
$tarea31=$_POST["tarea31"];
$tarea32=$_POST["tarea32"];
$tarea33=$_POST["tarea33"];
$tarea34=$_POST["tarea34"];
$tarea35=$_POST["tarea35"];
$tarea36=$_POST["tarea36"];
$SumaE3=$examen31+$examen32+$examen33;
$PromE3=$SumaE3/3;
$PorcentE3=$PromE3*0.40;

$SumaT3= $tarea31+$tarea32+$tarea33+$tarea34+$tarea35+$tarea36;
$PromT3= $SumaT3/6;
$PorcentT3= $PromT3*0.60;

$PromM3= $PorcentE3+$PorcentT3;

$SumaTotal= $PromM1+$PromM2+$PromM3;
$PromTotal= $SumaTotal/3;

echo "   | |El Promedio de la materia tres es: ".$PromM3;

echo "   | |-El Promedio total de las tres materias es: ".$PromTotal;


?>

</html>

