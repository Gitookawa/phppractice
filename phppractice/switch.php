<!DOCTYPE>
 <html>
 <head>
  <title>PHPのサンプル</title>
</head>
 <body>
<?php  
$type = "form";

switch($type){

       case "form":
		print"登録フォームです";
	      break;
       case"conform":
	       print"確認画面";
	       break;
       case"exec":
	       print"登録処理を実行中";
	       break;

       default:
	       print"画面がありません";
}
?>
</body>
</html>


