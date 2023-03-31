<?php 
require_once __DIR__ . "/Prodotti.php";

class Cucce extends Prodotti{
    protected int $altezza;
    protected int $larghezza;
    protected int $profondita;
    
    
    function __construct($_nome, $prezzo, $_descrizione, $_pezzi_disponibili, $larghezza, $profondita, $_altezza){
        parent::__construct($_nome, $prezzo, $_descrizione $_pezzi_disponibili);
        $this->altezza=$_altezza;
        $this->larghezza=$_larghezza;
        $this->profondita=$_profondita;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   altezza
    public function setaltezza($newValue) {
        $this->altezza=$newValue;
      }
    
    public function getaltezza() {
        return $this->altezza;
      }

    // larghezza
    public function setlarghezza($newValue) {
        $this->larghezza=$newValue;
      }
    
    public function getlarghezza() {
        return $this->larghezza;
      }
    // profondita
    public function setprofondita($newValue) {
        $this->profondita=$newValue;
      }
    
    public function getprofondita() {
        return $this->profondita;
      }





    //fine class Cucce
}

?>