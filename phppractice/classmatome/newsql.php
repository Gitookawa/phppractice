<?php
class newsql
{
	private $name;
	private $come;

             public function getsql()
	     {
		    $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                    $mysqli->autocommit(true);
		    $res = $mysqli->query("SELECT * FROM rensyu1;");
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

	     public function setsql($name,$come){

		   $this->name = $name;
		   $this->come = $come;
		   $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		   $mysqli->autocommit(true);
		   $mysql1 = $mysqli->query("INSERT INTO rensyu1(name,come) VALUE('$this->name','$this->come');");
	     }

}



?>
