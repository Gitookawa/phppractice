<!DOCTYPE html>
   <head>
       <meta http-equiv="content-type" content="text/html; charset=sjis">
   </head>
     <body>
<?php
//echo"<img src=classimage/f4.jpg  alt=クランク  class= lureimage width= 400  height= 300 >";

/*$tempfile = $_FILES['fname']['tmp_name'];
$filename = "classimage/"  . $_FILES['fname']['name'];
 */
class upload{
          
public $tempfile;
public $filename;
      
	public function upfile()
	{

              if (is_uploaded_file($this->tempfile)) {
              if ( move_uploaded_file($this->tempfile , $this->filename )) {
		      echo $this->filename . "をアップロードしました。";
		      echo"<img src=$this->filename  alt=クランク  class= lureimage width= 400  height= 300 >";

                }else{
                    echo "ファイルをアップロードできません。";
	        }

                }else{
                     echo "ファイルが選択されていません。";
	        } 
    }
}

$upload = new upload();
$upload->tempfile = $_FILES['fname']['tmp_name'];
$upload->filename = "classimage/"  . $_FILES['fname']['name'];
$upload->upfile()
?>
       
       <form action="classupload1.php" method="post" enctype="multipart/form-data">
         <input type="file" name="fname">
         <input type="submit" value="アップロード">
       </form>
     </body>
</html>
