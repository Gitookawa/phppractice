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
     <form method="post" action="modorichi3.php">
       <input type="text"input required name="atai" size="15">
        <br>
       <input type="submit" value="送信する" />
        <br>
       <br>
<?php

$atai = $_POST['atai'];
   
class hantei
{
     public function hantei01($score){
	 if($score < 58 ) {     
		$kekka = sankaku($score); //三角の関数を戻り値に渡す
	 }elseif($score > 58 && $score < 112){
		 $kekka = sikaku($score);//四角の関数を戻り値に渡す
	}elseif($score > 112){
		$kekka = "大きすぎるので表示できません";
 }
           $this->kekka; // return $kekka;//戻り値を戻す作業
}
    public function gethantei01()
    { 
    
	    return $this->kekka;
    }
     function sankaku($data){ //三角の関数が始まる
             for($i = 0; $i<$data; $i++){
      for($j = 0; $j<$data-($i+1); $j++){
              echo " ";
      }
      for($k = 0; $k<($i+1)*2-1; $k++){
            echo " * ";
      }
           echo "<BR>";
     }
     }//三角の関数終わる

     function sikaku($data1){ //四角の関数が始まる
   for($i = 1; $i < $data1; $i++){
    for($j = 1; $j < $data1; $j++){
        echo " * ";
    }
    echo "<br>"; 
	     }
     }//四角の関数が終わる
}
$hantei = new hantei();

$hantei->hantei01($atai);

$hanteis = $hantei->gethantei01();

print $hanteis;

     echo hantei01($atai); //hantei01関数を呼び出す,戻り値はエコー以外では出来ない。
     // $hantei = hantei01($atai);変数に関数呼び出しを入れて
     // echo $hantei; 変数をエコーすると出力ができる。
      ?>
   </div>
  </body>
</html>   
