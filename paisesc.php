<HTML>
<HEEAD>
    <center><title> Cálculos de paises</title>

</HEEAD>
<BODY bgcolor ="skyblue">

    <br>
  </br>
<!--comentario-->
<form method="POST" name="calculo" >
  <h1>Paises<h1>
    <select multiple size="5" name="paises[]">
       <option value="canada" selected>Canada
    <option value="estadosunidos">Stados Unidos
          <option value="brasil">Brasil
            <option value="elsalvador">El elsalvador
              <option value="panama">Panama
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
      $paises = $_REQUEST["paises"];
      foreach ($paises as $pais) {
        // code...
        switch ($pais) {
          case 'canada':
            // code...
            echo "Nombre del pais es : $pais <br></br>";

              echo "El idioma es el : Ingles <br></br>";

           echo " LA mooneda que usan es : Dolar canadiense <br></br>";

              echo " continente al que pertenece es : America del norte<br></br>";
            break;
case 'estadosunidos':
  // code...
  echo "Nombre del pais es : $pais <br></br>";

    echo "El idioma es el : Ingles <br></br>";

 echo " LA mooneda que usan es : Dolares  Estadounidences <br></br>";

    echo " continente al que pertenece es : America del norte<br></br>";


 echo "<input type=submit name=calcu3><br></br></form>";
  break;
  case 'brasil':
    // code...
    echo "Nombre del pais es : $pais <br></br>";

      echo "El idioma es el : Portugues <br></br>";

   echo " LA mooneda que usan es : Real brasileño <br></br>";

      echo " continente al que pertenece es : sur  America <br></br>";
    break;
    case 'elsalvador':
      // code...
      echo "Nombre del pais es : $pais <br></br>";

        echo "El idioma es el : Español <br></br>";

     echo " LA mooneda que usan es :  Dolares  Estadounidences <br></br>";

        echo " continente al que pertenece es : centro  America <br></br>";
        case 'panama':
          // code...
          echo "Nombre del pais es : $pais <br></br>";

            echo "El idioma es el : Español <br></br>";

         echo " LA mooneda que usan es :  Dolares  Estadounidences <br></br>";

            echo " continente al que pertenece es : centro  America <br></br>";
      break;
          default:
          echo "Elija una de los paises";
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
