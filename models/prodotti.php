<?php 
require_once __DIR__ . "/Categoria.php";


class Prodotti{
    protected string $nome;
    protected float $prezzo;
    protected string $descrizione;
    protected int $pezzi_disponibili;
    protected Categoria $categoria;
    

    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, Categoria $_categoria){
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->descrizione=$_descrizione;
        $this->pezzi_disponibili=$_pezzi_disponibili;
        $this->categoria=$_categoria;
    }
      
    public function get_nome() {
        return $this->nome;
    }

    public function get_categoria() {
      return $this->categoria;
  }

        public function get_prezzo() {
            return $this->prezzo;
          }

          public function get_descrizione() {
            return $this->descrizione;
          }

          public function get_pezzi_disponibili() {
            return $this->pezzi_disponibili;
          }
    



    //fine class Prodotti 
}

?>