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
   <form method="post" action="modorichi2.php">
          <input type="text"input required name="atai" size="15">
         <br>
     <input type="submit" value="送信する" />
     <br>
   <?php
$atai = $_POST['atai'];

   function hantei01($score){
	   if($score < 58) {
		   $kekka = sankaku($score);
	  }elseif($score > 58) {
		  $kekka = "値が大きすぎます";
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
 echo hantei01($atai);
   ?>
  </div>
   </body>
</html>
