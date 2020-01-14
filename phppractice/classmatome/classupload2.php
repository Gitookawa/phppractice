<!DOCTYPE html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=sjis">
  </head>
     <body>
<?php
class upload2{

   private $tempfile;
   private $filename;
         
        public function getfile(){
		echo"<img src=$this->filename  alt=クランク  class= lureimage width= 400  height= 300 >";
		echo"<BR>";
              echo $this->filename . "をアップロードしました。";

	}
       
        public function setfile($tempfile,$filename)
	{
	$this->tempfile = $tempfile;
	$this->filename = $filename;

            if (is_uploaded_file($this->tempfile)) {
            if ( move_uploaded_file($this->tempfile , $this->filename )) {
                //echo $this->filename . "をアップロードしました。";
                }else{
                   echo "ファイルをアップロードできません。";
                }

                }else{
                     echo "ファイルが選択されていません。";
                }

	}
}

$tempfile = $_FILES['fname']['tmp_name'];
$filename = "classimage/"  . $_FILES['fname']['name'];
$upload = new upload2();
$upload->setfile($tempfile,$filename);
$upload2 = $upload->getfile();


//$upload2 = $upload->setfile();
/*$upload->tempfile = $_FILES['fname']['tmp_name'];
$upload->filename = "classimage/"  . $_FILES['fname']['name'];*/

?>   
     </body>
       <form action="classupload2.php" method="post" enctype="multipart/form-data">
           <input type="file" name="fname">
           <input type="submit" value="アップロード">
      </form>
     </body>
</html>
