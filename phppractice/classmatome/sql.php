<?php

class sql
{
	private $name;
	private $come;
          
	public function getName()
	{
	//return array($this->name,$this->come);//arrayで配列として返す 
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                $mysqli->autocommit(true);
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


	public function setName($name,$come)
	{
	        $this->name = $name;
                $this->come = $come;		
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                $mysqli->autocommit(true);
                $syamu1 = $mysqli->query("INSERT INTO rensyu1(name,come) VALUES('$this->name','$this->come');");

        }
}
/*
class subsql extends sql{

	public function getsub(){

		return $this->name;
	}

	public function sqlNames($name)
	{

	$this->name = $name;
        $mysqli = new mysqli("localhost","root","tfhrt318","rensyu"); 
     	$mysqli->autocommit(true);
        $syamu1 = $mysqli->query("INSERT INTO rensyu1(name) VALUES('$this->name');");

	}	
}
 */
$sql = new sql();//ここでインスタンス化した
$sql->setName("桜井","太田");//setnameメソッドに値を入れている
$sqlName = $sql->getName();//ここでgetNameメソッドを呼び出している
echo $sqlName;
/*
$subsql = new subsql();
$subsql->sqlNames("立花孝志");
$subsqlname = $subsql->getsub();
echo $subsqlname;
 */




?>
