<html>
 <head>
   <meta http-equiv="content-type"content="text/html; charset=sjis">
 </head>
 <body>
<?php
require"class5.php";

$name = $_POST['name'];
$come = $_POST['come'];


$sqlans = new sql();
$sqlans->name = $name;
$sqlans->come = $come;
$sqlans->subsql()



?>
        <form method="post" action="class6.php">
   名前:<input type="text" input maxlength='20'input placeholder='名前を20文字以内で入力して下さい'input required name="name" size="30"><br>
        <textarea name="come"input required cols="50" rows="10"></textarea>
         <br>
        <input type="submit" value="送信する" />
 </body>
</html>
