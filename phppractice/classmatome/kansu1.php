<?php

function tachibanat($nhk){
     	if($nhk == 100){
	    $kekka = "満点合格です";
        }elseif($nhk > 90 ){
	    $kekka = "高得点合格です";
	}elseif($nhk > 80 ){
	    $kekka = "合格です";
	}elseif($nhk < 80 && $nhk > 75){
	    $kekka = "補欠合格です";
	}elseif($nhk < 75){
	    $kekka = "不合格です";
        }elseif($nhk > 35){
	    $kekka = "落第です";
	}
	return $kekka;

}

$min = 0;
$max = 100;

$atai = mt_rand($min,$max);
echo $atai;
echo tachibanat($atai);


?>
