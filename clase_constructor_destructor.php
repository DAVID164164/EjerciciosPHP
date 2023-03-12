<?php
/*{
definicion de la clase poligono incluyendo el constructor y destructor
}*/

class poligono{
 
   var $vertices;
   var $color;
 
   function __construct($ver=null)
   {
     if ($ver==null)
         $this->vertices = 4;
     else
         $this->vertices = $ver;
   }
 
   function __destruct()
   {
     echo 'vertices :  '.$this->vertices.' finalizado';
   }
 
   function muestraVertice()
   {
     echo $this->vertices;
   }
 
}
 
$cuadrado = new Poligono();
$triangulo = new Poligono(13);













?>