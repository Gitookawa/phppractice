<?php
require"sql.php";

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

$sql = new sql();
$sqlName = $sql->getName();
echo $sqlName;

$subsql = new subsql();
$subsql->sqlNames("sql1外部継承成功");
$subsqlname = $subsql->getsub();
echo $subsqlname;







?>
