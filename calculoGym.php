<?php

/**
 *
 */
class calculoGym{

   private $numeroHombres=[];
   private $numeroMujeres=[];


  public function nuevoSocioHombre($numeroHombres){
    if ($numeroHombres>0) $this->numeroHombres[]=$numeroHombres;
  }

  public function nuevoSocioMujer($numeroMujeres){
    if ($numeroMujeres>0) $this->numeroMujeres[]=$numeroMujeres;
  }

  public function mediaHombres(){
    $total=0;
    foreach ($this->numeroHombres as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->numeroHombres)/count($this->numeroHombres);
  }

  public function mediaMujeres(){
    $total=0;
    foreach ($this->numeroMujeres as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->numeroMujeres)/count($this->numeroMujeres);
  }
}

?>
