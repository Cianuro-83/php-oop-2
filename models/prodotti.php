<?php 
require_once __DIR__ . "/Categoria.php";


class Prodotti{
    protected string $nome;
    protected int $prezzo;
    protected string $descrizione;
    protected int $pezzi_disponibili;
    protected Categoria  $categoria;
    

    function __construct($_nome, $prezzo, $_descrizione, $_pezzi_disponibili, Categoria $_categoria){
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->descrizione=$_descrizione;
        $this->pezzi_disponibili=$_pezzi_disponibili;
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

          public function getpezzi_disponibili() {
            return $this->pezzi_disponibili;
          }
    



    //fine class Prodotti 
}

?>

