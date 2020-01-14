<?php 

class Dog {

   private $name;
   public $value;
   public function __construct($name) {
	    $this->name = $name; 
    }

    public function getName() {
	    return $this->name;
    }
  
   public function hantei(){ 
     if($this->value == 100){
	   echo"満点です";
    }elseif($this->value > 80){
	echo "合格です";
     }elseif($this->value < 80 && $this->value > 75){
	echo"補欠合格です";	   
     }elseif($this->value < 75 ){
	echo"不合格です";
     }elseif($this->value < 35){
	 echo"落第です";

   }
}
}

$dog = new Dog("joseph");//一度インスタンスしたら二度目は必要ない
$dog_name = $dog->getName();
echo $dog_name;

$dog->value = 100;

$dog->hantei()
/*
$hanteisan = new Dog();
$hanteisan->value = 100;
$hanteisan->hantei()
 */
?>
