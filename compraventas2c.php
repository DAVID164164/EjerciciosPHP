<HTML>
<HEEAD>
    <center><title> Compra de ventas</title>

</HEEAD>
<BODY bgcolor ="skyblue">
<!--comentario-->
<form method="POST" name="calculo " >
  <h1>Compras<h1>
  <select multiple size="4" name="compras[]">
    <option value="Disco dueo SSD" selected>Disco dueo SSD
      <option value="Memoria USB de 128 GB">Memoria USB de 128 GB
        <option value="Maus inalambrico Microsoft">Maus inalambrico Microsoft
          <option value="Lector de DVD/CD">Lector de DVD/CD
          </select>
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
  foreach ($compra as $comp) {
    if ("Disco dueo SSD" == $comp ) {
      // code...
      $IVA=0.13;
      $precio=160.97;
      $IVAMS = $precio*$IVA;
        $subtotal = $IVAMS + $precio;
        print(" Su compra es un : $comp <br></br>");
        print(" precio del producto es: $ $precio <br></br>");
                print(" El IVA es : $ $IVAMS <br></br>");
                print(" El sub total es : $ $subtotal <br></br>");
    }
    elseif ("Memoria USB de 128 GB" == $comp ) {
      // code...
      $IVA=0.13;
      $precio=70.84;
      $IVAMS = $precio*$IVA;
        $subtotal = $IVAMS + $precio;
        print(" Su compra es un : $comp <br></br>");
        print(" precio del producto es: $ $precio <br></br>");
                print(" El IVA es : $ $IVAMS <br></br>");
                print(" El sub total es : $ $subtotal <br></br>");
    }
    elseif ("Maus inalambrico Microsoft" == $comp ) {
      // code...
      $IVA=0.13;
      $precio=18.46;
      $IVAMS = $precio*$IVA;
        $subtotal = $IVAMS + $precio;
        print(" Su compra es un : $comp <br></br>");
        print(" precio del producto es: $ $precio <br></br>");
                print(" El IVA es : $ $IVAMS <br></br>");
                print(" El sub total es : $ $subtotal <br></br>");
    }
    elseif ("Lector de DVD/CD" == $comp ) {
      // code...
      $IVA=0.13;
      $precio=35.49;
      $IVAMS= $precio*$IVA;
      $subtotal = $IVAMS + $precio;
      print(" Su compra es un : $comp <br></br>");
      print(" precio del producto es: $ $precio <br></br>");
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
