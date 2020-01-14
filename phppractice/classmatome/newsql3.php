<?php

require "newsql.php";

class newsql3 extends newsql
{
	public function kensaku1($name)
	{
		$this->name = $name;
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		$mysqli->autocommit(true);
		 $res = $mysqli->query("select * from rensyu1 where name like '%$this->name';");

        }


	public function getkensaku1()
	{
		$this->res = $res;
	        $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                $mysqli->autocommit(true);

		echo "<TABLE border='1' >";
                     echo "<TR>";
                     echo "<TD>id";
                     echo "</TD>";
                     echo "<TD>name";
                     echo "</TD>";
                     echo "<TD>come";
                     echo "</TD>";

                   while ($data = mysqli_fetch_array($this->res)){

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

$newsql = new newsql3();
$newsql->kensaku1("野田");
$newsql1 = $newsql->getkensaku1();

echo $newsql1;

