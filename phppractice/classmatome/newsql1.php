<?php

require "newsql.php";


class subsql extends newsql
{
	public function getssql(){
             return array($this->name,$this->come);		
	}
	
	public function setssql($name,$come){
             
		$this->name = $name;
		$this->come = $come;
        }
}

$newsql = new subsql();

$newsql->setssql("野田","草履");

$sql = $newsql->getssql();

echo $sql[0];
echo $sql[1];













?>
