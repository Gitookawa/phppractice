<!DOCTYPE>
 <html>
　  <head>
  　　 <title>PHPの練習</title>
  　</head>
     <body>
     <?php
      $member[0] = "山田卓男";
      $member[1] = "木村康夫";
      $member[2] = "桜井隆";
      
       $i = 1;
       $limit = 3;
       
       foreach($member as $key => $value){
	     
	     if($i > $limit){
              print"ループを抜ける";
	      break;
	      }
	     print"名前:$value";
	     print"<br>";
	     $i++;
       }
     ?>
     </body>
  </html>
  　

