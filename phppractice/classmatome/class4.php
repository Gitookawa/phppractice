<?php
class Cat {

    // 名前
    private $name;
    private $come;
    // getter
    public function getName() {
	    return $this->name . 'ちゃん';
	    return $this->come;
    }

    // setter
    public function setName($name,$come) {
	    $this->name = $name;
	    $this->come = $come;
	    var_dump($come);//comeの中に値は入っている
    }

}
//値の太郎は返ってきたが二郎の値は呼び出しても返ってこなかった
$tarou = new Cat();
echo $tarou->setName('太郎','二郎');
echo $tarou->getName(); 
echo $tarou->getName();
?>

