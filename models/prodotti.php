<?php 
class Prodotti{
    protected string $categoria;
    

    function __construct($_categoria){
        $this->nome=$_nome;
        $this->categoria=$_categoria;
    }
      public function getcategoria() {
        return $this->categoria;
      }


    //fine class Prodotti 
}

?>