<HTML>
<HEEAD>
    <center><title> Compra de ventas</title>

</HEEAD>
<BODY bgcolor ="skyblue">
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Compras</h1>
  <select multiple size="4" name="compras[]">
    <option value="Disco dueo SSD" selected>Disco dueo SSD
      <option value="Memoria USB de 128 GB">Memoria USB de 128 GB
        <option value="Maus inalambrico Microsoft">Maus inalambrico Microsoft
          <option value="Lector de DVD/CD">Lector de DVD/CD
          </select>
            <br>
            </br>
              <h1>Escriba la cantidad<h1>
    <input type="number" name ="cant" required min="4" >
    <br>
  </br>
  <input type="submit" name ="com" value="comprar" >
  <br>
  </br>
</form>
<?PHP
if(isset($_REQUEST["com"]))
{
  $compra = $_REQUEST["compras"];
  $num = count($compra);
    $cant= $_REQUEST["cant"];
    $patron ="/^([0-9]{1,})+$/";
  foreach ($compra as $comp) {
    if ("Disco dueo SSD" == $comp ) {
      // code...
  // code...
  // code...
  $IVA=0.13;
  $precio=160.97;
  $total=$precio*$cant;
  $IVAMS = $total*$IVA;
    $subtotal = $IVAMS + $total;
    print(" Su compra es un : $comp <br></br>");
    print(" precio del producto  c/u es : $ $precio <br></br>");
                     print(" la cantidad de compra es :  $cant <br></br>");
        print(" El total es : $ $total <br></br>");
            print(" El IVA es : $ $IVAMS <br></br>");
            print(" El sub total es : $ $subtotal <br></br>");




    }
    elseif ("Memoria USB de 128 GB" == $comp ) {
      // code...

      $IVA=0.13;
            $precio=70.84;
      $total=$precio*$cant;
      $IVAMS = $total*$IVA;
        $subtotal = $IVAMS + $total;
        print(" Su compra es un : $comp <br></br>");
        print(" precio del producto  c/u es : $ $precio <br></br>");
                         print(" la cantidad de compra es :  $cant <br></br>");
            print(" El total es : $ $total <br></br>");
                print(" El IVA es : $ $IVAMS <br></br>");
                print(" El sub total es : $ $subtotal <br></br>");

    }
    elseif ("Maus inalambrico Microsoft" == $comp ) {
      // code...


          $IVA=0.13;
          $precio=18.46;
          $total=$precio*$cant;
          $IVAMS = $total*$IVA;
            $subtotal = $IVAMS + $total;
          print(" Su compra es un : $comp <br></br>");
          print(" precio del producto  c/u es : $ $precio <br></br>");
                           print(" la cantidad de compra es :  $cant <br></br>");
              print(" El total es : $ $total <br></br>");
                  print(" El IVA es : $ $IVAMS <br></br>");
                  print(" El sub total es : $ $subtotal <br></br>");

    }
    elseif ("Lector de DVD/CD" == $comp ) {
      // code...

          $IVA=0.13;
          $precio=35.49;
          $total=$precio*$cant;
          $IVAMS = $total*$IVA;
            $subtotal = $IVAMS + $total;
          print(" Su compra es un : $comp <br></br>");
          print(" precio del producto  c/u es : $ $precio <br></br>");
                           print(" la cantidad de compra es :  $cant <br></br>");
              print(" El total es : $ $total <br></br>");
                  print(" El IVA es : $ $IVAMS <br></br>");
                  print(" El sub total es : $ $subtotal <br></br>");

    }

    // code...
  }
      // code...




}
?>
</BODY>
</HTML>
