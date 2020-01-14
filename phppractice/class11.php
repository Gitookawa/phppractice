<?php

require"class10.php";
require"class7.php";

$egg = 198761;
$egg2 = 42832;
$Syamu1 = new Syamu();
$Syamu2 = new Syamu();

$Syamu1->sanka($egg);
$Syamu2->sanka($egg2);

$Syamus1 = $Syamu1->getninzu();
$Syamus2 = $Syamu2->getninzu();

echo $Syamus1;
echo "<BR>";
echo "<BR>";
echo $Syamus2;

$hamazaki = new Syamu1("浜崎純平","2014/08/11");

$hamazakiName = $hamazaki->getname();
$hamazakiday = $hamazaki->getday();

print $hamazakiName;
print $hamazakiday;
 


?>
