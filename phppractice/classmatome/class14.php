<?php
 
class product
{
	private $price;

	public function setPrice($price)
	{
	     $this->price = $price;
	      if($price > 100){
		      echo"100未満";
	      }else{
		   echo"100以上";
                    
              }
	}
     	
            public function getPrice()
           {
		return $this->price;
           }
}


$product = new product();
$product->setPrice(80);
echo $product->getPrice();


?>
