<!DOCTYPE> 
<html>
  <head>
   <title>PHP関数サンプル</title>
  </head>
   <body>
<?php
// ini_set( 'display_errors',1 );

/* function hantei($score){
   if($score >  80){
	 echo"合格です！おめでとうございます！"; 
    }else($score < 80){
	 echo"hanchanu";
    }
 }  
  function hantei($score){
	  if($score > 80){
		  echo"合格";
	  }elseif($score < 80) {
		  echo"不合格";
	  }
  }*/

  function hantei01($score){
          if($score > 80){
                  $kekka = "合格である";
          }elseif($score < 80) {
                  $kekka ="不合格";
	  }
	  return $kekka;

  }

     $one = 90;
    echo hantei01($one);
    //$kekka = hantei01($one)でも可
  // echo $kekka;     
   ?>
   </body>
 </html>
