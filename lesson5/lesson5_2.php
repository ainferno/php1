<html>
<head>
	<meta charset="utf-8">
	<title>Lesson 5_2</title>
</head>
<body>
<?php
class Uploader
{
	protected $name;
	public function __construct($file_name){
		$this->name = $file_name;
	}
	public function isUploaded(){
		return isset($_FILES[$this->name]);
	}
	public function upload(){
		if($this->isUploaded())
		{
			$file = move_uploaded_file($_FILES[$this->name]['tmp_name'],__DIR__ . "/user_file");			
		}
	}
	public function check()
	{
		if(file_exists(__DIR__ . "/user_file")){
			echo "POINT";
			$res = fopen(__DIR__ . "/user_file",'r');
			$b = [];
			while( !feof($res)) {
				$b[] = fgets($res);
			}
			foreach($b as $a)
				echo $a . "<br>";
			fclose($res);
		}
	}
}
$file = new Uploader('file');
$file->upload();
?>
<h1>Lesson 5_2</h1>
<form action="lesson5_2.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit">
</form>
<?php $file->check(); ?>
</html>