<!DOCTYPE html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=sjis">
     <style>
       .center{
        text-align: center;
         }
    </style> 
 </head>
  <body>
　<div class="center">
   <form method="post" action="modorichi1.php">
          <input type="text"input required name="atai1" size="15">
	 <br>
     <input type="submit" value="送信する" />
     <br>
    <?php
$atai1 = $_POST['atai1'];

       function hantei01($score){
          if($score < 58){
		 $kekka = sankaku($score);
          }elseif($score > 58) {
                  $kekka = "この値は入力出来ません";
          }
          return $kekka;
       }
   
     
     function sankaku($data){
	     for($i = 0; $i<$data; $i++){
      for($j = 0; $j<$data-($i+1); $j++){
	      echo " ";
      }
      for($k = 0; $k<($i+1)*2-1; $k++){
            echo " * ";
      }
           echo "<BR>";
     }
     }
 
 hantei01($atai1);
echo hantei01($atari1);
//値は表示されるようにはなりましたが戻り値が表示されません
   ?>
  </div>
  </body>
