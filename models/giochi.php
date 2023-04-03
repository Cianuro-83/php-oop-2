<?php 
require_once __DIR__ . "/Prodotti.php";
require_once __DIR__ ."/Categoria.php";

class Giochi extends Prodotti{

    protected string $materiale;
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_valutazione, $_uso, $_materiale, Categoria $_categoria){
        parent::__construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_categoria);
        $this->materiale=$_materiale;
        $this->valutazione=$_valutazione;
        $this->uso=$_uso;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   materiale
    public function set_materiale($newValue) {
        $this->materiale=$newValue;
      }
    
    public function get_materiale() {
        return $this->materiale;
      }

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



    //fine class Giochi
}

?>