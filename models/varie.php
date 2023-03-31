<?php 
require_once __DIR__ . "/Prodotti.php";

class Varie extends Prodotti{
    protected string $nome;
    protected string $pezzi_disponibili;
    protected int $prezzo;
    protected string $descrizione;
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $_prezzo, $_pezzi_disponibili){
        parent::__construct($categoria);
        $this->nome=$_nome;
        $this->categoria=$_categoria;
        $this->pezzi_disponibili=$_pezzi_disponibili
    }
    // nome
    public function setnome($newValue) {
        $this->nome=$_nome;
      }
    
    public function getnome($newValue) {
        return $this->nome;
      }

    //   pezzi_disponibili
    public function setpezzi_disponibili($newValue) {
        $this->pezzi_disponibili=$_pezzi_disponibili;
      }
    
    public function getpezzi_disponibili($newValue) {
        return $this->pezzi_disponibili;
      }
    // prezzo
    public function setprezzo($newValue) {
        $this->prezzo=$_prezzo;
      }
    
    public function getprezzo($newValue) {
        return $this->pezzo;
      }

    // descrizione
    public function setdescrizione($newValue) {
        $this->descrizione=$_descrizione;
      }
    
    public function getdescrizione($newValue) {
        return $this->descrizione;
      }
    // valutazione
    public function setvalutazione($newValue) {
        $this->valutazione=$_valutazione;
      }
    
    public function getvalutazione($newValue) {
        return $this->valutazione;
      }
    // uso
    public function setvalutazione($newValue) {
        $this->valutazione=$_valutazione;
      }
    
    public function getvalutazione($newValue) {
        return $this->valutazione;
      }

    //fine class Varie
}

?>