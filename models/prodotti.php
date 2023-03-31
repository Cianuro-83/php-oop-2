<?php 
require_once __DIR__ . "/Categoria.php";


class Prodotti{
    protected string $nome;
    protected int $prezzo;
    protected string $descrizione;
    protected Categoria  $categoria;
    

    function __construct($_nome, $prezzo, $_descrizione, Categoria $_categoria){
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->descrizione=$_descrizione;
        $this->categoria=$_categoria;
    }
      
    public function getnome() {
        return $this->nome;

        public function getprezzo() {
            return $this->pezzo;
          }

          public function getdescrizione() {
            return $this->descrizione;
          }



    //fine class Prodotti 
}

?>

