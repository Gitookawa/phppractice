<?php

class Product
{
	private $name;
	private $come;
          
	public function getName()
	{
	   return array($this->name,$this->come);//array配列で入力する

        }
	public function setName($name,$come)
	{
	        $this->name = $name;
                $this->come = $come;		
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                $mysqli->autocommit(true);
                $syamu1 = $mysqli->query("INSERT INTO rensyu1(name,come) VALUES('$this->name','$this->come');");

        }
}

$product= new Product();

// 商品名を設定
$product->setName("さくらい","立ち話");

// 商品名を取得
$productName = $product->getName();

echo $productName[0];
echo $productName[1];

?>
