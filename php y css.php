<?php
echo "<link rel=stylesheet href=css.css>";
class MenuPagina{
public $folder;
public $pages;

public function __construct($folder,$pages){
$this->folder=$folder;
$this->pages=$pages;
}

public function paginacion(){
$general = 0;
$t_file = glob($this->folder);
$cont=count($t_file);
for ($j=1; $j<=$this->pages; $j++) {
for($i=0; $i<=($txpages-1);$i++){
$fileExtension=explode(".", $t_file[$general]);
$fileExtension=end($fileExtension);
if($fileExtension =="jpg" or $fileExtension=="png" or $fileExtension=="gif"){
echo "<a class=\"menu menu_img\" href=$t_file[$general] target=_top>".($general+1)."</a>";
} else{
echo "<a class=\"menu menu_file\" href=$t_file[$general] target=_top>".($general+1)."</a>";
}
  }
}

public function changeFolder($folder){
$this->folder=$folder;
 }

}
$menu = new MenuPagina("*.*",4);
$menu->paginacion();
?>