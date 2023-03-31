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
        $this->nome=$newValue;
      }
    
    public function getnome() {
        return $this->nome;
      }

    //   pezzi_disponibili
    public function setpezzi_disponibili($newValue) {
        $this->pezzi_disponibili=$newValue;
      }
    
    public function getpezzi_disponibili() {
        return $this->pezzi_disponibili;
      }
    // prezzo
    public function setprezzo($newValue) {
        $this->prezzo=$newValue;
      }
    
    public function getprezzo() {
        return $this->pezzo;
      }

    // descrizione
    public function setdescrizione($newValue) {
        $this->descrizione=$newValue;
      }
    
    public function getdescrizione() {
        return $this->descrizione;
      }
    // valutazione
    public function setvalutazione($newValue) {
        $this->valutazione=$newValue;
      }
    
    public function getvalutazione() {
        return $this->valutazione;
      }
    // uso
    public function setvalutazione($newValue) {
        $this->valutazione=$newValue;
      }
    
    public function getvalutazione() {
        return $this->valutazione;
      }

    //fine class Varie
}

?>