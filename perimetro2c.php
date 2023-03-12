<HTML>
<HEEAD>
    <center><title> Cálculos de perimetro</title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Opciones<h1>
    <select multiple size="5" name="obcion[]">
       <option value="cuadrado" selected>Cuadrado
    <option value="triangulorectángulo">Triangulo rectángulo
          <option value="triánguloequilátero">Triángulo equilátero
            <option value="rombo">Rombo
              <option value="salir">Salir
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
      $opciones = $_REQUEST["obcion"];
      foreach ($opciones as $op) {
        // code...
        switch ($op) {
          case 'cuadrado':
            // code...
            echo "<form method=POST>";

              echo "Escriba un lado de el cuadrado : <input type=number name=cant required placeholder= 8 step=0.01><br></br>";

           echo "<input type=submit name=calcu2><br></br></form>";
            break;
case 'triangulorectángulo':
  // code...
  echo "<form method=POST>";
for ($i=1; $i <=3 ; $i++) {
  // code...
    echo "Escriba el lado $i : <input type=number name=cant[] required placeholder= 8 step=0.01><br></br>";
}


 echo "<input type=submit name=calcu3><br></br></form>";
  break;
  case 'triánguloequilátero':
    // code...
    echo "<form method=POST>";

      echo "Escriba un lado de un triangulo rectángulo : <input type=number name=cant required placeholder= 8 step=0.01><br></br>";

   echo "<input type=submit name=calcu4><br></br></form>";
    break;
    case 'rombo':
      // code...
      echo "<form method=POST>";

        echo "Escriba un lado de un rombo : <input type=number name=cant required placeholder= 8 step=0.01><br></br>";

     echo "<input type=submit name=calcu5><br></br></form>";
      break;
          default:
          echo "Elija una de las opciones";
            // code...
            break;
        }
      }
}
?>
<?php
if (isset($_POST["calcu2"])) {
  // code...
  $cant = $_REQUEST["cant"];
  $perimetro = $cant*4;
  echo "El perimetro es : $perimetro";
}
 ?>
 <?php
 if (isset($_POST["calcu3"])) {
   // code...
   $cant = $_REQUEST["cant"];
   $perimetro =0;
   foreach ($cant as $canti ) {
     // code...
     $perimetro += $canti;
   }
   echo "El perimetro es : $perimetro";
 }
  ?>
  <?php
  if (isset($_POST["calcu4"])) {
    // code...
    $cant = $_REQUEST["cant"];
    $perimetro = $cant*3;
    echo "El perimetro es : $perimetro";
  }
   ?>
   <?php
   if (isset($_POST["calcu5"])) {
     // code...
     $cant = $_REQUEST["cant"];
     $perimetro = $cant*4;
     echo "El perimetro es : $perimetro";
   }
    ?>
</BODY>
</HTML>
