<!DOCTYPE html>
   <head>
       <meta http-equiv="content-type" content="text/html; charset=sjis">
   </head>
   <body>
<?php

ini_set( 'display_errors', 1 );
//データベース名＝rensyu1
//データベース基礎情報,id = AUTO,name = varchar, come = varchar
$name = $_POST['name'];
$come = $_POST['come'];


$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
$mysqli->autocommit(true);

$syamu1 = $mysqli->query("INSERT INTO rensyu1(name,come) VALUES('$name','$come');");

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


?>
      
       <form method="post" action="class2.php">
	   <input type="text"input required name="name" size="42"input placeholder='名前を入力してください' >
	   <br>
           <br>  
          <textarea name="come"input required cols="50" rows="10"input placeholder='コメントを入力してください'></textarea>
          <br>
           <input type="submit" value="送信する" />
       </form>
  </body>
</html>
