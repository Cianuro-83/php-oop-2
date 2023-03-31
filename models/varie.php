<?php 
require_once __DIR__ . "/Prodotti.php";

class Varie extends Prodotti{
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $prezzo, $_descrizione, $_pezzi_disponibili, $valutazione, $uso){
        parent::__construct($_nome, $prezzo, $_descrizione, $_pezzi_disponibili);
        
        $this->valutazione=$_valutazione;
        $this->uso=$_uso;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 

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