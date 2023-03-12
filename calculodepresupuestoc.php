<HTML>
<HEEAD>
    <center><title> calculos de presupuesto </title>

</HEEAD>
<BODY bgcolor ="skyblue">
  <form method="POST" name="calculo" >

   <h1>Elije una area de servicio </h1>
   <select multiple size="3" name="serv[]">
     <option value="ginecobstetricia" selected>Ginecobstetricia
       <option value="traumatología">Traumatología
         <option value="pediatría">Pediatría
           </select>
             <br>
             </br>
             <h1>Escriba la cantidad que dese calcular el presupuesto<h1>
             $:<input type="number" name="cant" required step="0.01">
             <br>
            </br>
    <input type="submit" name ="calcu" value="calcular" >
    <br>
  </br>
  </form>
<!--comentario-->
<?PHP
if (isset($_POST["calcu"])) {
  // code...
  $servi=$_REQUEST["serv"];
  $cant=$_REQUEST["cant"];
foreach ($servi as $se) {
  // code...
  switch ($se) {
    case 'ginecobstetricia':

    $cont=round(($cant*0.40),2);
    $presu=$cant+$cont;
    echo "El presupuesto es : $$presu<br></br>";
    echo "El presupues es del 40%";
      // code...
      break;
      case 'traumatología':

      $cont=round(($cant*0.30),2);
      $presu=$cant+$cont;
      echo "El presupuesto es : $$presu<br></br>";
        echo "El presupues es del 30%";
        // code...
        break;
        case 'pediatría':

        $cont=round(($cant*0.30),2);
        $presu=$cant+$cont;
        echo "El presupuesto es : $$presu<br></br>";
          echo "El presupues es del 30%";
          // code...
          break;
    default:
    echo "Elija uno de los servicios";
      // code...
      break;
  }
}
}
?>
</BODY>
</HTML>
