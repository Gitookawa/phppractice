<html>
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
       <form method="post" action="kansuu3.php">
	  <input type="text"input required name="atai1" size="15">
         <br>
	 <input type="text"input required name="atai2" size="15">
         <br>
     <input type="submit" value="送信する" />
   <?php
   $atai1 = $_POST['atai1'];
   $atai2 = $_POST['atai2'];
   echo $atai1;
   function fizzbuzz($data){
    for ($i = 0; $i <= $data; $i++) {
     if ($i % 15 === 0) {
	     echo 'FizzBuzz';
	     echo '<BR>';
    } elseif ($i % 3 === 0) {
	    echo 'Fizz';
	    echo '<BR>';
    } elseif ($i % 5 === 0) {
	    echo 'Buzz';
	    echo '<BR>';
    } else {
            echo $i;

    }
    }
   }
   function checkf($data1){
	   $return01;
for ($i = 0; $i <= $data1; $i++) {
     if ($i % 15 === 0) {
             $return01 = "FIZZBUZZ";
             echo '<BR>';
    } elseif ($i % 3 === 0) {
             $return01 = "FIZZ";
    } elseif ($i % 5 === 0) {
             $return01 = "BUZZ";
    } else {
            echo $i;

    }
}
  return $return01;
   }
   echo checkf($atai2);
   fizzbuzz($atai1);
   　?>
　 </div>
  </body>
</html>
