<!DOCTYPE html>
    <head>
       <meta http-equiv="content-type"content="text/html; charset=sjis">
    </head>
  <body> 
<?php
// ini_set( 'display_errors', 1 ); 

$come = $_POST['come'];

$mysqli = new mysqli("localhost", "root","tfhrt318", "rensyu");
$mysqli->autocommit(TRUE); 


$quryset = mysqli_query("SELECT * FROM rensyu1;");
$res = $mysqli->query("SELECT * FROM rensyu1 WHERE come like '%$come%';");


$response = $mysqli->query($sql);


if($come == null){
	echo"";
}else{

echo "<TABLE border='1' >";
echo "<TR>";
echo "<TD>id";
echo "</TD>";
echo "<TD>name";
echo "</TD>";
echo "<TD>comme";
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
}

?> 
      <form method="post" action="class10.php">
        <input type="text"  input maxlength='100'input placeholder='検索したい文字を入力してください'input required name="come" size="30"><br>
        <input type="submit" value="検索" />
      </form>
  </body>
</html>



