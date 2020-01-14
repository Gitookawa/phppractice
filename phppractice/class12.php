<?php

class offzero {
     public $data;
 
     public function offkai(){
	 for($i=0; $i<$this->data; $i++){
	   for($j = 0; $i <$this->data; $i++){
                      $a = $a + 1;
             if($a % 2 == 0){
		 echo "割り切れます";
	     }else{
		  echo $a;
	     }

          }
        }
    }
}
/*
$Syamu = new offzero();
$maxmurai = 500;
$Syamu->data = $maxmurai;
$Syamu->offkai()
 */





?>

