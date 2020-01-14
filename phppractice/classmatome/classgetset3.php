<?php 

class Product
{
    private $name;
    
         public function getName()
         {
		 return $this->name;
         }
         
         public function setName($name)
         {
		 $this->name = $name;
	       if($this->name == 100){
	              $this->name = "100ピッタリです";
	     }elseif($this->name == 300){
		     $this->name = "300ぴったりです";
             }elseif($this->name < 300){
		     $this->name = "300以下です";
	     }elseif($this->name < 500){
		     $this->name = "500以下です";
	     }else{
		     $this->name = "500以上です";
	     }
	 }
       
		  
}

$product= new Product();

// 商品名を設定
$product->setName(300);

// 商品名を取得
$productName = $product->getName();

echo $productName;
?>
