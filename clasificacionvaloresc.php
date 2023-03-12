<HTML>
<HEEAD>
    <center><title> Cálculo de clificacion </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Escriba el  calificacion de (A, B, C, D o E)<h1>
<input type="text"  name="clasi" required >
  <br>
    </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
      $clas = $_REQUEST["clasi"];
    switch ($clas) {
      case 'A':
      echo "El valor es 10 nota exelente";
        // code...
        break;
      case 'B':
          echo "El valor es de 9 - 8 nota bien";
        // code...
        break;
        case 'C':
          // code...
          echo "El valor es de 7 - 6 nota suficiente";
          break;
          case 'D':
          echo "El valor es de 5 nota suspendidio";
            // code...
            break;
            case 'E':
                  echo "El valor es de 5 nota suspendidio";
              // code...
              break;
      default:
      echo "escriba en mayusculas y solo  (A, B, C, D o E) ";
        // code...
        break;
    }

}
?>
</BODY>
</HTML>
