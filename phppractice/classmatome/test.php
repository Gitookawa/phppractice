<?php
//吉見先生に聞くこと、このプログラムをセッター、ゲッター化する
//上記のプログラムが出来たらさらにそのプログラムを継承化する。
class sql {

public $name;
public $come;

  
 public function subsql(){
       
  $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
  $mysqli->autocommit(true);

  $syamu1 = $mysqli->query("INSERT INTO rensyu1(name,come) VALUES('$this->name','$this->come');");

  //ここまでは大丈夫,インサートがまだ出来てない

  $res1 = $mysqli->query($syamu1);

  $res = $mysqli->query("SELECT * FROM rensyu1;");
  //echo "<TABLE border='1' >";
  echo" <table border='1' style= border-collapse: collapse>";
  echo "<TR>";
  echo "<TD>id";
  echo "</TD>";
  echo "<TD>name";
  echo "</TD>";
  echo "<TD>come";
  echo "</TD>";


  while ($data = mysqli_fetch_array($res)){

   echo "<TR>";
   // 列１を出力
  echo "<TD>" . $data[0];
  echo "</TD>";
   //列２を出力
  echo "<TD>" . $data[1];
  echo "</TD>";
   //列3を出力
  echo "<TD>" . $data[2];
  echo "</TD>";
  echo "</TR>";
  }
  echo "</TABLE>";
  }
}

$sqlans = new sql();
$sqlans->name = "青地晃平の本音";
$sqlans->come = "ヒゲオヤジ";

$sqlans->subsql()
?>
