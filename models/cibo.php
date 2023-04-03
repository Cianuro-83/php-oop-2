<?php 
require_once __DIR__ . "/Prodotti.php";
require_once __DIR__ . "/Categoria.php";
class Cibo extends Prodotti{
    protected string $provenienza;
    protected string $ingredienti;
    protected string $indicazioni;

    
    
    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_ingredienti, $_indicazioni, $_provenienza, Categoria $_categoria){
        parent::__construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_categoria);
        $this->provenienza=$_provenienza;
        $this->ingredienti=$_ingredienti;
        $this->indicazioni=$_indicazioni;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   provenienza
    public function set_provenienza($newValue) {
        $this->provenienza=$newValue;
      }
    
    public function get_provenienza() {
        return $this->provenienza;
      }

    // ingredienti
    public function set_ingredienti($newValue) {
        $this->ingredienti=$newValue;
      }
    
    public function get_ingredienti() {
        return $this->ingredienti;
      }
    // indicazioni
    public function set_indicazioni($newValue) {
        $this->indicazioni=$newValue;
      }
    
    public function get_indicazioni() {
        return $this->indicazioni;
      }





    //fine class Cibo
}

?>