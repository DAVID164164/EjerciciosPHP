<HTML>
<HEEAD>
    <center><title> Cálculos volumen </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba la altura caditad hombres o mujeres <h1>
  <input type="number"  name="cant" required>
  <br>
    </br>
    <input type="radio"  name="rad" value="hombres" >Hombres
    <br>
    </br>
    <input type="radio"  name="rad" value="mujeres" >Mujeress
    <br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
  $personas= 857263;
      $cant = $_REQUEST["cant"];
        $genero =$_REQUEST["rad"];
switch ($genero) {
  case 'hombres':
    // code...
    $proh = round((($cant*100)/$personas),3);
$prom=round((100-$proh),3);
echo "El promedio de hombres es: $proh%  <br></br>";
echo "El promedio de mujres: $prom%  <br></br>";
    break;
    case 'mujeres':
      // code...
      $prom = round((($cant*100)/$personas),3);
  $proh=round((100-$prom),3);
  echo "El promedio de mujres: $prom%  <br></br>";
    echo "El promedio de hombres es: $proh%  <br></br>";
      break;
  default:
  echo "eliga uno de los generos";
    // code...
    break;
}

}
?>
</BODY>
</HTML>
