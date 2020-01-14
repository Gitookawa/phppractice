<?php
require"class6.php";
require"class7.php";

//クラス7の呼び出し

echo "class7の呼び出し";
$hamazaki = new Syamu1("浜崎純平","2014/08/11");

$hamazakiName = $hamazaki->getname();
$hamazakiday = $hamazaki->getday();

print $hamazakiName;
print $hamazakiday;
echo"<BR>";
echo"<BR>";


//クラス６の呼び出し
echo"class6の呼び出し";
$kamaboko = new Product('かまぼこ', '2009/01/01');
$chikuwa = new Product('ちくわ', '2009/01/02');

$kamabokoName = $kamaboko->getName();
$kamabokoDate = $kamaboko->getProductDate();

$chikuwaName = $chikuwa->getName();
$chikuwaDate = $chikuwa->getProductDate();

print $kamabokoName . 'は' . $kamabokoDate . 'に製造されました。';
print $chikuwaName . 'は' . $chikuwaDate . 'に製造されました。';

?>
