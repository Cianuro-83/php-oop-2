<?php 
Class Categoria {
    protected string $animale="cane";
    protected string $img="";

    function __construct($_animale, $img){
        if ($_animale == "gatto"){
            $this->animale=$_animale;
        }
    }
      public function getanimale() {
        return $this->animale;
      }

      public function getimg() {
        return $this->img;
      }
    // FINE CATEGORIA
}

?>