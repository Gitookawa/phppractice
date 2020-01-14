<!DOCTYPE>
<html>
 <head>
 <title>PHP関数の練習</title>
 </head>
 <body>
 <?php 
  ini_set('display_errors',1);
  function fizzbuzz($data){
   for($i=0; $i < $data; $i++){
	 if($i % 15 == 0){
		 echo "FIZZBAZZ";
         }elseif($i % 3 == 0){
		 echo "FIZZ";
        }elseif($i % 5 == 0){
		echo "BAZZ";
	}else{
		echo $i;
	}
} 
  }
    
  $syamu = 300;
  $egg; 
  fizzbuzz($syamu);
 ?>
 </body>
</html>

