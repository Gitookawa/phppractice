<?php


class Product
{
    private $name;  
    private $price;   // 価格

    // 商品名を取得する
    public function getName()
    {
        return $this->name;
    }

    // 商品名を設定する
    public function setName($name)
    {
	    $this->name = $name;//この宣言が必要
	       if($this->name % 2 == 0){
	             echo"割り切れる";
	       }else{
		       echo"割り切れない";
	}
             
    }
}

// インスタンス生成
$product= new Product();

// 商品名を設定
$product->setName(101);

// 商品名を取得
$productName = $product->getName();

echo $productName;

?>

