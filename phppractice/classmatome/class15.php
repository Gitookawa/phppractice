<?php

class Product
{
      protected $name;
      protected $price;

    public function __construct($name)
    {
	    $this->name = $name;
    }

    public function getPrice()
    {
	    return $this->price;
    }

    public function setPrice($price)
    {
	    $this->price = $price;
    }
}

$food = new Product('肉');
$food->setPrice(100);
echo "価格を" . $food->getPrice() . "円に設定しました。";


?>
















?>

