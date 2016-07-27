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
		$name = $file_name;
	}
	public function isUploaded(){
		return (isset($_FILES[$name])&&(0 == $_FILES[$name]['error']));
	}
	public function upload(){
		if($this->isUploaded())
		{
			$file = move_uploaded_file($_FILES[$name]['tmp_name'],__DIR__ . "user_file");			
		}
	}
}
?>
<h1>Lesson 5_2</h1>
<form action="lesson5_2.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
</form>
</html>