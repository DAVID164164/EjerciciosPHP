<HTML>
<HEEAD>
    <center><title> Cálculo de sueldo </title>


</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo ">
  <h1>  Escribi el nombre :</h1>
<input type="text" name="nombre" required size="40">
<br>
</br>
  <h1>  Escribi el Sueldo :</h1>
$ <input type="text" name="sueldo"  required placeholder="Ejemplo de catidad : (20.30) o  (20.00)" size="40" >
  <br>
  </br>
  <h1>  Puesto: <h1>
  <select multiple size="3" name="puesto">
    <option value="gerente" selected>Gerente(a)</option>
      <option value="contador">Contador(a)</option>
        <option value="secretario">Secretario(A)</option>
          </select>
            <br>
            </br>
  <input type="submit" name ="calcu" value="calcular" >
  <br>
</br>
</form>

<?PHP
if(isset($_POST["calcu"]))
{
  $puest= $_REQUEST["puesto"];
  $suel = $_REQUEST["sueldo"];
  $nom = $_REQUEST["nombre"];
  $patron = "/^([A-Za-z][\s]*)+$/";
    $patronnum="/^([0-9]{1,}[.]([0-9]{2}))+$/";
 if (!preg_match($patron,$nom ) ){
    echo "Ingrese un nombre valido.";
  }
  elseif (!preg_match($patronnum,$suel)) {
    echo "Ingrese un sueldo  valido solo dos desimales despues del punto .";
  }else {
    // code...

  switch ($puest) {
    case 'gerente':
      // code...
      if ($suel<200) {
        // code...
            echo "no aplica para retencion<br></br>";
      }
      elseif ($suel>=200 && $suel<=500) {
        // code...
        $reten=0.20;
        $suelbase = $suel*$reten;
        echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (20%) en su sueldo de $$suel";

      }
      elseif ($suel>500) {
        // code...
        $reten=0.25;
        $suelbase = $suel*$reten;
        echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (25%) en su sueldo de $$suel";
      }
      break;
    case 'contador':
      // code...
      if ($suel<100) {
        // code...
            echo "no aplica para retencion<br></br>";
      }
      elseif ($suel>=100 && $suel<=250) {
        // code...
        $reten=0.08;
        $suelbase = $suel*$reten;
        echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (8%) en su sueldo de $$suel";


      }
      elseif ($suel>250) {
        // code...
        $reten=0.1;
        $suelbase = $suel*$reten;
        echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (10%) en su sueldo de $$suel";
      }
      break;
      case 'secretario':
        // code...
        if ($suel<100) {
          // code...
              echo "no aplica para retencion<br></br>";
        }
        elseif ($suel>=100 && $suel<=250) {
          // code...
          $reten=0.04;
          $suelbase = $suel*$reten;
          echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (4%) en su sueldo de $$suel";


        }
        elseif ($suel>250) {
          // code...
          $reten=0.07;
          $suelbase = $suel*$reten;
          echo " Su nombre es $nom la Retención aplicada es de $$suelbase del (7%) en su sueldo de $$suel";
        }
        break;
    default:
      // code...
        echo "Seleccione un puesto";
      break;
    }
  }
}
?>
</BODY>
</HTML>
