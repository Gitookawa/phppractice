<?php

class offzero {
   public $hamazaki;

   public function offkai(){
     for($i=0; $i<$this->hamazaki; $i++){
	     for($J=0; $i<$this->hamazaki; $i++){

		$a = $a + 1;
		echo $a;
           if($a % 10 == 0){
                echo "<BR>";
           }
              }
    }
  }
}

class offzero extends oomono {
	
}
$yobu = new offzero();
$yobu->hamazaki = 100;
$yobu->offkai()






?>

