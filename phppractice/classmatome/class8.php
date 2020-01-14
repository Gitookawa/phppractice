<!DOCTYPE html>
  <head>
     <meta http-equiv="content-type"content="text/html; charset=sjis">
  </head>
   <body>
<?php

class User{
   private $name = NULL;
   public function print_hello(){
	   print $this->name;
	   print"さん、こんにちわ<br>";
   }
}

class Guest extends User{
   private $name = "ゲスト";
   public function print_hello(){
	  print$this->name;
	  print"さん、はじめまして<br>";
   }
}

$newuser = new Guest();
$newuser->print_hello();
?>
  </body>
</html>

 
