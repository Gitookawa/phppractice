<?php
//select * from rensyu1 where name like '%野田';
//継承後、値を検索するプログラム
require "newsql.php";

class newsql2 extends newsql
{
	public function kensaku($name){
		$this->name = $name;
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		$mysqli->autocommit(true);
		$res = $mysqli->query("select * from rensyu1 where name like '%$this->name';");
                echo "<TABLE border='1' >";
                     echo "<TR>";
                     echo "<TD>id";
                     echo "</TD>";
                     echo "<TD>name";
                     echo "</TD>";
                     echo "<TD>come";
                     echo "</TD>";

                   while ($data = mysqli_fetch_array($res)){

                        echo "<TR>";
                        echo "<TD>" . $data[0];
                        echo "</TD>";
                        echo "<TD>" . $data[1];
                        echo "</TD>";
                        echo "<TD>" . $data[2];
                        echo "</TD>";
                        echo "</TR>";
                     }
                        echo "</TABLE>";

       }
}

$newsql = new newsql2();
$newsql->kensaku("野田");
$newsql1 = $newsql->kensaku();
echo $newsql1;

?>
