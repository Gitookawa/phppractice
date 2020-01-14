<?php
$syamu = 1000;
$syamu2 = 2000;
class Prius
{
    private $mileage = 0; // 走行距離

    // 走行する
    public function drive($distance)
    {
        // 走った距離分、走行距離を加算
        $this->mileage += $distance;
    }

    // 走行距離を取得
    public function getMileage()
    {
        return $this->mileage;
    }
}

// 2台のプリウスのインスタンスを生成
$prius1 = new Prius();
$prius2 = new Prius();

// プリウス1だけ走行してみる
$prius1->drive($syamu);
$prius2->drive($syamu2);
// 両方のプリウスの走行距離を取得する
$mileage1 = $prius1->getMileage();
$mileage2 = $prius2->getMileage();

print "プリウス1は" . $mileage1 . "km走りました
";
print "プリウス2は" . $mileage2 . "km走りました
";

?>
