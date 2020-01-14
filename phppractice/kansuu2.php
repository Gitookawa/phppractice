<!DOCTYPE>
<html>
 <head>
  <title>PHP関数</title>
   <body>
   <?php
ini_set( 'display_errors',1 );
function fizzbuzz($data,$i = 1){
	  $a = 0;
	  $b = 0;
          $c = 0;
	  $d = 0;
    for ($i; $i <= $data; $i++) {
     if ($i % 15 === 0) {
	    echo 'FizzBuzz';
	    echo"<BR>";
	    $a = $a + 1;
    } elseif ($i % 3 === 0) {
	    echo 'Fizz';
	    echo"<BR>";
	    $b = $b + 1;
    } elseif ($i % 5 === 0) {
	    echo 'Buzz';
	    echo "<BR>";
	    $c = $c + 1;
    } else {
	   $d = $d + 1;
	    echo $i;
	    echo"<BR>";

    }
     } 
	  echo"FIZZBUZZの表示回数$a";
	  echo"FIZZの表示回数$b";
	  echo"BUZZの表示回数$c";
	  echo"数字の表示回数$d"; 
      }
$syamu = 10;
$exe = 1;
fizzbuzz($syamu,$exe);

$sakurai = 200;
fizzbuzz($sakurai);


?>

  </body>
</html>
