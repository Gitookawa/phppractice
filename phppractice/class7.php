<!DOCTYPE html>
  <head>
   <title>クラス練習</title>
  </head>
  <body>  
<?php

class Syamu1 {
	public $name;
	public $day;

      public function __construct($name,$day)
	{
		$this->name = $name;
		$this->day = $day;
	
   }
	public function getname()
	{
		return $this->name;

     }

	public function getday()
	{
		return $this->day;
     }
} 
/*
$hamazaki = new Syamu1("浜崎純平","2014/08/11");

$hamazakiName = $hamazaki->getname();
$hamazakiday = $hamazaki->getday();

print $hamazakiName;
print $hamazakiday;
 */
?>
  </body>
</html>
