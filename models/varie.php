<?php 
require_once __DIR__ . "/Prodotti.php";
require_once __DIR__ . "/Categoria.php";

class Varie extends Prodotti{
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_valutazione, $_uso, Categoria $_categoria){
        parent::__construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_categoria);
        
        $this->valutazione=$_valutazione;
        $this->uso=$_uso;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 

    // valutazione
    public function set_valutazione($newValue) {
        $this->valutazione=$newValue;
      }
    
    public function get_valutazione() {
        return $this->valutazione;
      }
    // uso
    public function set_uso($newValue) {
        $this->uso=$newValue;
      }
    
    public function get_uso() {
        return $this->uso;
      }

    //fine class Varie
}

?>