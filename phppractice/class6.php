<?php

class Product
{
    public $name; // 商品名
    public $productDate; // 製造日

    // コンストラクタ
    public function __construct($name, $productDate)
    {
        $this->name= $name;
        $this->productDate = $productDate;
  }

    // 商品名を取得
    public function getName()
    {	    
        return $this->name;
  }    

    // 製造日を取得
    public function getProductDate()
   {
        return $this->productDate;
   }    
}


/*
 $kamaboko = new Product('かまぼこ', '2009/01/01');
 $chikuwa = new Product('ちくわ', '2009/01/02');

$kamabokoName = $kamaboko->getName();
$kamabokoDate = $kamaboko->getProductDate();

$chikuwaName = $chikuwa->getName();
$chikuwaDate = $chikuwa->getProductDate();

print $kamabokoName . 'は' . $kamabokoDate . 'に製造されました。';
print $chikuwaName . 'は' . $chikuwaDate . 'に製造されました。';
 */
?>
