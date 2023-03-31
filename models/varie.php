<?php 
require_once __DIR__ . "/Prodotti.php";

class Varie extends Prodotti{
    protected string $pezzi_disponibili;
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $prezzo, $_descrizione, $_pezzi_disponibili, $valutazione, $uso){
        parent::__construct($_nome, $prezzo, $_descrizione);
        $this->pezzi_disponibili=$_pezzi_disponibili;
        $this->valutazione=$_valutazione;
        $this->uso=$_uso;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   pezzi_disponibili
    public function setpezzi_disponibili($newValue) {
        $this->pezzi_disponibili=$newValue;
      }
    
    public function getpezzi_disponibili() {
        return $this->pezzi_disponibili;
      }

    // valutazione
    public function setvalutazione($newValue) {
        $this->valutazione=$newValue;
      }
    
    public function getvalutazione() {
        return $this->valutazione;
      }
    // uso
    public function setuso($newValue) {
        $this->uso=$newValue;
      }
    
    public function getuso() {
        return $this->uso;
      }

    //fine class Varie
}

?>