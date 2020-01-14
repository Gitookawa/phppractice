<?php
class Sakurai {
  public $data;
	 
  public function sankaku(){
    for($i = 0; $i<$this->data; $i++){
       for($j = 0; $j<$this->data-($i+1); $j++){
               echo " ";
       }
       for($k = 0; $k<($i+1)*2-1; $k++){
                echo " * ";
        }
           echo "<BR>";
    }
  }
  
}

$Sakuraisan = new Sakurai();//インスタンス化

$Sakuraisan->data = 57;//プロパティに値を代入
$Sakuraisan->sankaku()//メソッドを呼び出す


?>

