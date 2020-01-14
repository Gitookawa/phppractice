<?php

class Syamu {

    public $ninzu = 0;

    public function sanka($sankaninzu) {
	    $this->ninzu += $sankaninzu;
  }

   public function getninzu() {
       return $this->ninzu;
 }
}


$Syamu1 = new Syamu();
$Syamu2 = new Syamu();

$Syamu1->sanka(100);
$Syamu2->sanka(500);

$Syamus1 = $Syamu1->getninzu();
$Syamus2 = $Syamu2->getninzu();

echo $Syamus1;
echo "<BR>";
echo "<BR>";
echo $Syamus2;
 
?>
