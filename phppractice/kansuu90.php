<!DOCTYPE html>
 <head>
  <title>クラスの復習</title>
   <style>
   .center{
      text-align: center;
    }
   </style>
 </head>
 <body>
 <div class="center">
<?php
ini_set( 'display_errors', 1 );
$syamu = 12;	
//gyakusan($syamu);
//

$zukei = new zukei();

$zukei->sankaku($syamu);

$all =$zukei->getsankaku();

echo $all;
class zukei
{
	public function sankaku($score){

		$kekka = gyakusan($score);
		$this->kekka;

  }
	public function getsankaku()
	{
		return $this->kekka;
  }

    function gyakusan($degai){
        for($i=0; $i<$degai;  $i++){
            for($j=0; $j<$i;  $j++){
                echo" ";
      }
        for($k=0; $k<($degai-$i)*2-1; $k++){
                  echo"*";
       }
       echo"<BR>";
    }
  }
}
?>
</div>
</body>
</html>
