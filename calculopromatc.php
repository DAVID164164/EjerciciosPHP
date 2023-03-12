<HTML>
<HEEAD>
    <center><title> Cálculos de promedios </title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Elige la materia </h1>
  <select multiple size="3" name="materia[]">
    <option value="materia1" selected>Materia 1</option>
      <option value="materia2">Materia 2</option>
        <option value="materia3">Materia 3</option>
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
      $materias =$_REQUEST["materia"];
      foreach ($materias as $materi) {
        // code...
        switch ($materi) {
          case 'materia1':
            // code...
            echo "<form method=POST name=calcul>";
            echo "Ecribe las notas de los 3 examenes<br></br>";
for ($i=0; $i <3 ; $i++) {
  // code...
  $nt=$i + 1;
  echo "Escriba las notas $nt :";
  echo "  <input type=number  name=not1[] required step=0.01 required><br><br/>";
}
echo "Ecribe las notas de las 3 tareas<br></br>";
for ($i=0; $i <3 ; $i++) {
// code...
$nt=$i + 1;
echo "Escriba las notas $nt :";
echo "  <input type=number  name=not2[] required step=0.01 required><br><br/>";
}
//href=http://localhost/practica1PHP/resultadomat1.php
     echo "<input type=submit name=calcu2 value=calcular ><br></br></form>";
            break;
            case 'materia2':

            echo "<form method=POST name=calcul>";
            echo "Ecribe las notas de los 2 examenes<br></br>";
for ($i=0; $i <2 ; $i++) {
  // code...
  $nt=$i + 1;
  echo "Escriba las notas $nt :";
  echo "  <input type=number  name=not1[] required step=0.01 required><br><br/>";
}
echo "Ecribe las notas de las 6 tareas <br></br>";
for ($i=0; $i <6 ; $i++) {
// code...
$nt=$i + 1;
echo "Escriba las notas $nt :";
echo "  <input type=number  name=not2[] required step=0.01 required><br><br/>";
}
//href=http://localhost/practica1PHP/resultadomat1.php
     echo "<input type=submit name=calcu3 value=calcular ><br></br></form>";
              // code...
              break;
              case 'materia3':

              echo "<form method=POST name=calcul>";
              echo "Ecribe las notas de los 3 examenes<br></br>";
  for ($i=0; $i <3 ; $i++) {
    // code...
    $nt=$i + 1;
    echo "Escriba las notas $nt :";
    echo "  <input type=number  name=not1[] required step=0.01 required><br><br/>";
  }
  echo "Ecribe las notas de las 6 tareas <br></br>";
  for ($i=0; $i <6 ; $i++) {
  // code...
  $nt=$i + 1;
  echo "Escriba las notas $nt :";
  echo "  <input type=number  name=not2[] required step=0.01 required><br><br/>";
  }
  //href=http://localhost/practica1PHP/resultadomat1.php
       echo "<input type=submit name=calcu4 value=calcular ><br></br></form>";
                // code...
                break;
          default:
          echo "eliga uno de las materias";
            // code...
            break;
        }

      }

}
?>
<?PHP
if (isset($_POST["calcu2"])) {
  // code...
$not1=$_POST["not1"];
$not2=$_POST["not2"];
$sum1=0;
$sum=0;
foreach ($not1 as $nota) {
  // code...
      $sum +=$nota;
}
      $prom1= ($sum/(count($not1))*0.80);;
      foreach ($not2 as $nota1) {
        // code...
        $sum1 +=$nota1;
      }
                  $prom2= ($sum1/(count($not2))*0.20);;
                  $promt = $prom1+$prom2;
                  echo "<h1>El promedio es : $promt </h1>";
                }
?>
<?PHP
if (isset($_POST["calcu3"])) {
  // code...
  $not1=$_POST["not1"];
  $not2=$_POST["not2"];
  $sum1=0;
  $sum=0;
  foreach ($not1 as $nota) {
    // code...
        $sum +=$nota;
  }
        $prom1= ($sum/(count($not1))*0.60);;
        foreach ($not2 as $nota1) {
          // code...
          $sum1 +=$nota1;
        }
                    $prom2= ($sum1/(count($not2))*0.40);;
                    $promt = $prom1+$prom2;
                    echo "<h1>El promedio es : $promt </h1>";
}
 ?>
 <?PHP
 if (isset($_POST["calcu4"])) {
   // code...
   $not1=$_POST["not1"];
   $not2=$_POST["not2"];
   $sum1=0;
   $sum=0;
   foreach ($not1 as $nota) {
     // code...
         $sum +=$nota;
   }
         $prom1= ($sum/(count($not1))*0.40);;
         foreach ($not2 as $nota1) {
           // code...
           $sum1 +=$nota1;
         }
                     $prom2= ($sum1/(count($not2))*0.60);;
                     $promt = $prom1+$prom2;
                     echo "<h1>El promedio es : $promt </h1>";
 }
  ?>
</BODY>
</HTML>
