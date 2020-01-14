<!DOCTYPE>
 <html>
 <head>
  <title>フォーチ</title>
 </head>
 
  <body>
  
<?php
   ini_set( 'display_errors',1 );
   function onaji($data1 = array("月","火","水","木","金")) {
	for($i = 0; $i < count($data1); $i++){
		print $data1[$i];
	        
	}
   print"<br>";
  }
  $week = array("月","火","水","木","金");
    onaji();
 /* foreach($week as $value){
	  print $value;
	  print"<br>";*/
  
  
  $week = array("1月","２月","３月","４月","５月");
       onaji($week);
 /* for($i = 0; $i < count($week); $i++){
	  print $week[$i];
	  print"<br>";
  }*/

  function test(){
 $week1= array("桜井","誠","エッグ","野間","syamu");
  for($i = 0; $i < count($week1); $i++){
	  print $week1[$i];
	  print"<br>";
  }
  }
  test();
  test();
/*
  $week = array("田中","佐藤","鈴木","浜崎");
  for($i = 0; $i < count($week); $i++){
	  print $week[$i];
	  print"<br>";
  }
 */
?>
</body>
</html>
