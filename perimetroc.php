<HTML>
<HEEAD>
                    <center><title> Cálculo de prerimetro </title>

                </HEEAD>
                <BODY bgcolor ="skyblue">

                    <br>
                  </br>
                <!--comentario-->
                <form method="POST" name="calculo" >
                      <h1>Opciones</h1>
                      <select multiple size="5" name="perimet[]">
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
                      $seleccion = $_REQUEST["perimet"];
                      foreach ($seleccion as $selec) {
                        // code...
                        switch ($selec) {
                          case 'cuadrado':
                            // code...
  echo "<form method=POST>";
for ($i=1; $i <=4 ; $i++) {
  // code...

    echo "lado $i <input type=number name=cant[] required placeholder= 8 step=0.01><br></br>";

}
 echo "<input type=submit name=calcu2><br></br></form>";
                            break;
                            case 'triangulorectángulo':
                            echo "<form method=POST>";
                          for ($i=1; $i <=3 ; $i++) {
                            // code...

                              echo "lado $i <input type=number name=cant[] required placeholder= 8 step=0.01><br></br>";

                          }
                           echo "<input type=submit name=calcu3><br></br></form>";
                              // code...
                              break;
                              case 'triánguloequilátero':
                              echo "<form method=POST>";
                            for ($i=1; $i <=3 ; $i++) {
                              // code...

                                echo "lado $i <input type=number name=cant[] required placeholder= 8 step=0.01><br></br>";

                            }
                             echo "<input type=submit name=calcu4><br></br></form>";
                                // code...
                                break;
                                case 'rombo':
                                echo "<form method=POST>";
                              for ($i=1; $i <=4 ; $i++) {
                                // code...

                                  echo "lado $i <input type=number name=cant[] required placeholder= 8 step=0.01><br></br>";

                              }
                               echo "<input type=submit name=calcu5><br></br></form>";
                                  // code...
                                  break;
                                  case 'salir':
                                    // code...

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
  if(isset($_POST["calcu2"]))
    {
      $prerimetro=0;
        $cant = $_REQUEST["cant"];
        foreach ($cant as $cal) {
          // code...
            $prerimetro += $cal;
        }
        echo "<h1>El perimetro es   $prerimetro</h1>";
    }
   ?>
   <?php
   if(isset($_POST["calcu3"]))
     {
       $prerimetro=0;
         $cant = $_REQUEST["cant"];
         foreach ($cant as $cal) {
           // code...
             $prerimetro += $cal;
         }
         echo "<h1>El perimetro es   $prerimetro</h1>";
     }
    ?>
    <?php
    if(isset($_POST["calcu4"]))
      {
        $prerimetro=0;
          $cant = $_REQUEST["cant"];
          foreach ($cant as $cal) {
            // code...
              $prerimetro += $cal;
          }
          echo "<h1>El perimetro es   $prerimetro</h1>";
      }
     ?>
     <?php
     if(isset($_POST["calcu5"]))
       {
         $prerimetro=0;
           $cant = $_REQUEST["cant"];
           foreach ($cant as $cal) {
             // code...
               $prerimetro += $cal;
           }
           echo "<h1>El perimetro es   $prerimetro</h1>";
       }
      ?>
</BODY>
</HTML>
