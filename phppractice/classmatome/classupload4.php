<!DOCTYPE html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=sjis">
    <style>
     .padding{

        padding: 30px 440px;

      }
    </style>
  </head>
  <body>
   <div class="padding">
<?php
// $name,$tempfile  $filename
class upload3
{
	private $name;
	private $filename;
	private $tempfile;

	    public function getfile()
	    { 
		    $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                    $mysqli->autocommit(true);
                    $res = $mysqli->query("SELECT * FROM rensyu2;");
                     echo "<TABLE border='1' >";
                     echo "<TR>";
                     echo "<TD>id";
                     echo "</TD>";
                     echo "<TD>name";
                     echo "</TD>";
                     echo "<TD>filetype";
		     echo "</TD>";
		     echo "<TD>tempfile";

                   while ($data = mysqli_fetch_array($res)){

                        echo "<TR>";
                        echo "<TD>" . $data[0];
                        echo "</TD>";
                        echo "<TD>" . $data[1];
                        echo "</TD>";
                        echo "<TD>" . $data[2];
			echo "</TD>";
                                        
			echo"<TD><img src= $data[3]  alt=クランク  class= lureimage width= 200  height= 200 >";
			echo"</TD>";
		      //echo "<TD>" . $data[1];
		      //echo"</TD>";	
	                echo"</TR>";
                     }
                         echo "</TABLE>";


	    }
	    
	    public function setfile($name,$filename,$tempfile)
            {
		  $this->name = $name;
		  $this->filename = $filename;
		  $this->tempfile = $tempfile;
		    if (is_uploaded_file($this->tempfile)) {
                    if ( move_uploaded_file($this->tempfile , $this->filename )) {
                       //echo $this->filename . "をアップロードしました。";
                        }else{
                             echo "ファイルをアップロードできません。";
                        }

                        }else{
                              echo "ファイルが選択されていません。";
                        }

		  $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
                  $mysqli->autocommit(true);
                  $mysql1 = $mysqli->query("INSERT INTO rensyu2(name,filename,tempfile) VALUE('$this->name','$this->filename','$this->tempfile');");


            }

}

$tempfile = $_FILES['fname']['tmp_name'];
$filename = "classimage/"  . $_FILES['fname']['name'];
$name = $_POST['name'];
$upload = new upload3();
$upload->setfile($name,$filename,$tempfile);
$upload3 = $upload->getfile();
?>  
       <form action="classupload4.php" method="post" enctype="multipart/form-data">
           <input type="text" input required name="name" size="30">
           <input type="file" name="fname">
           <input type="submit" value="アップロード">
       </form>
    </div>
   </body>
</html>      

