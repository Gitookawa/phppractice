<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
  <?php
  
class Piano {
	private $name = 'piano';
	public function play(){
	   echo"ドレミ";
	}
}

 $piano = new Piano();
 $piano->play();
 $syamu = "<h1>宮崎文夫</h1>";//<h1>タグを変数に入れられる

 echo $syamu;//echoで出力するとタグ通りに出力できる
   
   ?>
  </body>
</html>

