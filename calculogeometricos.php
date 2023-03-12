<HTML>
<HEEAD>
    <center><title> Cálculos volumen </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Escriba la altura <h1>
  <select multiple size="4" name="materia[]">
    <option value="materia1" selected>Materia 1
      <option value="materia2">Materia 2
        <option value="materia3">Materia 3
          </select>
            <br>
            </br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $halt = $_REQUEST["haltura"];
      $radio= $_REQUEST["radio"];
        $lado= $_REQUEST["lado"];
        $radiob=$_REQUEST["rad"];
switch ($radiob) {
  case 'cilindro':
    // code...
    $volum = (3.1416*(pow($radio,2))*$halt);
echo "El volumen es :";echo  round($volum,2);echo "M^3";
    break;
    case 'cubo':
      // code...
      $volum = (pow($radio,3));
  echo "El volumen es :";echo  round($volum,2);echo "M^3";
      break;
      case 'cono':
        // code...
        $volum = ((3.1416*(pow($radio,2))*$halt)/2);
    echo "El volumen es :";echo  round($volum,2);echo "M^3";
        break;
  default:
  echo "eliga uno de las figuras geometricas";
    // code...
    break;
}

}
?>
</BODY>
</HTML>
